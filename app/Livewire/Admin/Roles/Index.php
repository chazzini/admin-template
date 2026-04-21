<?php

namespace App\Livewire\Admin\Roles;

use App\Models\Permission;
use App\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $name, $slug, $description, $selectedPermissions = [];
    public $editingRole = null;
    public $showForm = false;

    public function render()
    {
        return view('livewire.admin.roles.index', [
            'roles' => Role::with('permissions')->latest()->paginate(10),
            'allPermissions' => Permission::all(),
        ])->layout('layouts.admin');
    }

    public function create()
    {
        $this->reset(['name', 'slug', 'description', 'selectedPermissions', 'editingRole']);
        $this->showForm = true;
    }

    public function edit(Role $role)
    {
        $this->editingRole = $role;
        $this->name = $role->name;
        $this->slug = $role->slug;
        $this->description = $role->description;
        $this->selectedPermissions = $role->permissions->pluck('id')->toArray();
        $this->showForm = true;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:roles,slug,' . ($this->editingRole->id ?? 'NULL'),
            'selectedPermissions' => 'array',
        ]);

        $roleData = [
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
        ];

        if ($this->editingRole) {
            $this->editingRole->update($roleData);
            $role = $this->editingRole;
        } else {
            $role = Role::create($roleData);
        }

        $role->permissions()->sync($this->selectedPermissions);

        $this->showForm = false;
        $this->reset(['name', 'slug', 'description', 'selectedPermissions', 'editingRole']);
        
        session()->flash('message', 'Role saved successfully.');
    }

    public function delete(Role $role)
    {
        $role->delete();
        session()->flash('message', 'Role deleted successfully.');
    }

    public function cancel()
    {
        $this->showForm = false;
        $this->reset(['name', 'slug', 'description', 'selectedPermissions', 'editingRole']);
    }
}
