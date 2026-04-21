<?php

namespace App\Traits;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Collection;

trait HasPermissions
{
    /**
     * Get all roles for the user.
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * Get all permissions for the user (via roles).
     */
    public function permissions(): Collection
    {
        return $this->roles->map->permissions->flatten()->unique('slug');
    }

    /**
     * Check if the user has a specific role.
     */
    public function hasRole(string|Role $role): bool
    {
        if ($role instanceof Role) {
            return $this->roles->contains('id', $role->id);
        }

        return $this->roles->contains('slug', $role);
    }

    /**
     * Check if the user has a specific permission.
     */
    public function hasPermission(string|Permission $permission): bool
    {
        if ($permission instanceof Permission) {
            return $this->permissions()->contains('id', $permission->id);
        }

        return $this->permissions()->contains('slug', $permission);
    }
}
