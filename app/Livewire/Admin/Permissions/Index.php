<?php

namespace App\Livewire\Admin\Permissions;

use App\Models\Permission;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.permissions.index', [
            'permissions' => Permission::latest()->paginate(10),
        ])->layout('layouts.admin');
    }
}
