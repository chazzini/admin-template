<?php

namespace App\Livewire\Admin\Users;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';
    
    // User Creation/Editing Fields
    public $name, $email, $password, $password_confirmation;
    public $editingUser = null;
    public $selectedRoles = [];
    
    public $showRoleModal = false;
    public $showCreateModal = false;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.admin.users.user-list', [
            'users' => User::with('roles')
                ->where(function($query) {
                    $query->where('name', 'like', '%' . $this->search . '%')
                          ->orWhere('email', 'like', '%' . $this->search . '%');
                })
                ->latest()
                ->paginate(10),
            'allRoles' => Role::all(),
        ])->layout('layouts.admin');
    }

    public function openCreateModal()
    {
        $this->reset(['name', 'email', 'password', 'password_confirmation', 'editingUser', 'selectedRoles']);
        $this->showCreateModal = true;
    }

    public function saveUser()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->showCreateModal = false;
        $this->reset(['name', 'email', 'password', 'password_confirmation']);
        
        session()->flash('message', 'User created successfully.');
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
        $this->showCreateModal = false;
        $this->reset(['editingUser', 'selectedRoles', 'name', 'email', 'password', 'password_confirmation']);
    }

    public function deleteUser(User $user)
    {
        if ($user->id === auth()->id()) {
            session()->flash('error', 'You cannot delete yourself.');
            return;
        }

        $user->delete();
        session()->flash('message', 'User deleted successfully.');
    }
}
