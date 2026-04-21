<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if($showForm)
                    <!-- Role Form Card -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>{{ $editingRole ? 'Edit Role: ' . $editingRole->name : 'Create New Role' }}</h4>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="save">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Role Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name" placeholder="e.g. Administrator">
                                        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Role Slug</label>
                                        <input type="text" class="form-control @error('slug') is-invalid @enderror" wire:model="slug" placeholder="e.g. admin">
                                        @error('slug') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" wire:model="description" rows="2"></textarea>
                                    </div>

                                    <div class="col-12 mb-4">
                                        <label class="form-label d-block">Assign Permissions</label>
                                        <div class="row g-3">
                                            @foreach($allPermissions as $permission)
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="{{ $permission->id }}" 
                                                               id="perm-{{ $permission->id }}" wire:model="selectedPermissions">
                                                        <label class="form-check-label" for="perm-{{ $permission->id }}">
                                                            {{ $permission->name }}
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Save Role</button>
                                        <button type="button" class="btn btn-secondary" wire:click="cancel">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endif

                <!-- Roles List Card -->
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Roles Management</h4>
                        <button class="btn btn-primary btn-sm" wire:click="create">
                            <i class="ti ti-plus me-1"></i> Add New Role
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive app-scroll">
                            <table class="table align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Role</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Permissions</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($roles as $role)
                                        <tr>
                                            <td>
                                                <h6 class="mb-0">{{ $role->name }}</h6>
                                                <small class="text-muted">{{ $role->description }}</small>
                                            </td>
                                            <td><code>{{ $role->slug }}</code></td>
                                            <td>
                                                @foreach($role->permissions as $permission)
                                                    <span class="badge bg-light-primary text-primary">{{ $permission->name }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <button class="btn btn-outline-primary btn-sm" wire:click="edit({{ $role->id }})">
                                                        <i class="ti ti-edit"></i>
                                                    </button>
                                                    <button class="btn btn-outline-danger btn-sm" 
                                                            onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                                                            wire:click="delete({{ $role->id }})">
                                                        <i class="ti ti-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">No roles found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-4">
                            {{ $roles->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
