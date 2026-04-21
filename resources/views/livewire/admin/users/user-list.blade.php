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
                
                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                            <h4 class="mb-0">User Management</h4>
                            <div class="d-flex align-items-center gap-3">
                                <!-- Styled Search Bar -->
                                <div class="app-form app-icon-form">
                                    <div class="position-relative">
                                        <input type="search" class="form-control form-control-sm search-filter" 
                                               placeholder="Search users..." wire:model.live="search">
                                        <i class="ti ti-search text-dark"></i>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-sm" wire:click="openCreateModal">
                                    <i class="ti ti-plus me-1"></i> Add User
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive app-scroll">
                            <table class="table align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">User</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Roles</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($users as $user)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="h-35 w-35 d-flex-center b-r-10 bg-light-primary text-primary me-2">
                                                        {{ strtoupper(substr($user->name, 0, 1)) }}
                                                    </div>
                                                    <h6 class="mb-0">{{ $user->name }}</h6>
                                                </div>
                                            </td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @foreach($user->roles as $role)
                                                    <span class="badge bg-light-success text-success">{{ $role->name }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <button class="btn btn-outline-primary btn-sm" wire:click="editRoles({{ $user->id }})">
                                                        <i class="ti ti-shield-lock"></i>
                                                    </button>
                                                    @if($user->id !== auth()->id())
                                                    <button class="btn btn-outline-danger btn-sm" 
                                                            onclick="confirm('Are you sure you want to delete this user?') || event.stopImmediatePropagation()"
                                                            wire:click="deleteUser({{ $user->id }})">
                                                        <i class="ti ti-trash"></i>
                                                    </button>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">No users found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-4">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Create User Modal -->
    <div class="modal fade @if($showCreateModal) show @endif" tabindex="-1" 
         style="display: @if($showCreateModal) block @else none @endif; background: rgba(0,0,0,0.5);"
         aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create New User</h5>
                    <button type="button" class="btn-close" wire:click="close"></button>
                </div>
                <form wire:submit.prevent="saveUser">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name">
                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model="email">
                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" wire:model="password">
                            @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" wire:model="password_confirmation">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="close">Cancel</button>
                        <button type="submit" class="btn btn-primary">Create User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Role Assignment Modal -->
    <div class="modal fade @if($showRoleModal) show @endif" tabindex="-1" 
         style="display: @if($showRoleModal) block @else none @endif; background: rgba(0,0,0,0.5);"
         aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Assign Roles to {{ $editingUser?->name }}</h5>
                    <button type="button" class="btn-close" wire:click="close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        @foreach($allRoles as $role)
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $role->id }}" 
                                           id="user-role-{{ $role->id }}" wire:model="selectedRoles">
                                    <label class="form-check-label" for="user-role-{{ $role->id }}">
                                        <strong>{{ $role->name }}</strong><br>
                                        <small class="text-muted">{{ $role->description }}</small>
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="close">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="saveRoles">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
