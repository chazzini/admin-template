<?php

namespace App\Livewire\Admin\Users;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';
    public $editingUser = null;
    public $selectedRoles = [];
    public $showRoleModal = false;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.admin.users.user-list', [
            'users' => User::with('roles')
                ->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%')
                ->latest()
                ->paginate(10),
            'allRoles' => Role::all(),
        ])->layout('layouts.admin');
    }

    public function editRoles(User $user)
    {
        $this->editingUser = $user;
        $this->selectedRoles = $user->roles->pluck('id')->toArray();
        $this->showRoleModal = true;
    }

    public function saveRoles()
    {
        $this->editingUser->roles()->sync($this->selectedRoles);
        $this->showRoleModal = false;
        $this->reset(['editingUser', 'selectedRoles']);
        
        session()->flash('message', 'User roles updated successfully.');
    }

    public function close()
    {
        $this->showRoleModal = false;
        $this->reset(['editingUser', 'selectedRoles']);
    }
}
