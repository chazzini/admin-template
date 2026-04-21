<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                            <h4 class="mb-0">Application Permissions</h4>
                            <div class="app-form app-icon-form">
                                <div class="position-relative">
                                    <input type="search" class="form-control form-control-sm search-filter" 
                                           placeholder="Search permissions..." wire:model.live="search">
                                    <i class="ti ti-search text-dark"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive app-scroll">
                            <table class="table align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Permission Name</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($permissions as $permission)
                                        <tr>
                                            <td>
                                                <h6 class="mb-0">{{ $permission->name }}</h6>
                                            </td>
                                            <td><code>{{ $permission->slug }}</code></td>
                                            <td>{{ $permission->created_at->format('M d, Y') }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center">No permissions found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-4">
                            {{ $permissions->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
