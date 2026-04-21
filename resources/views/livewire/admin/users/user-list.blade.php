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

                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">User Role Assignments</h4>
                        <div class="w-25">
                            <input type="text" class="form-control form-control-sm" placeholder="Search users..." wire:model.live="search">
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
                                                <button class="btn btn-outline-primary btn-sm" wire:click="editRoles({{ $user->id }})">
                                                    <i class="ti ti-shield-lock me-1"></i> Manage Roles
                                                </button>
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

    <!-- Role Assignment Modal -->
    <div class="modal fade @if($showRoleModal) show @endif" id="roleModal" tabindex="-1" 
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
