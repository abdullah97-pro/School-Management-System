@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Permissions') }}</div>

                <div class="card-body">
                    @session('success')
                        <div class="alert alert-success">
                            {{ $value }}
                        </div>
                    @endsession

                    <a href="{{ route('permissions.create') }}" class="btn btn-success mb-3">Create Permission</a>

                    <table class="table table-striped bordered">
                        <tr>
                            <th width="60px">ID</th>
                            <th>Name</th>
                            <th width="200px">Action</th>
                        </tr>
                        <tbody>
                            @foreach ($permissions as $permission)
                                <tr>
                                    <td>{{ $permission->id }}</td>
                                    <td>{{ $permission->name }}</td>
                                    <td>
                                        <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            @can('permission-list')
                                                <a href="{{ route('permissions.show', $permission->id) }}" class="btn btn-info btn-sm">Show</a>
                                            @endcan

                                            @can('permission-edit')
                                                <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            @endcan

                                            @can('permission-delete')
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
