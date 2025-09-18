@extends('layouts.app')
@section('title','Class Category')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Class Category') }}</div>

                <div class="card-body">
                    @session('success')
                        <div class="alert alert-success">
                            {{ $value }}
                        </div>
                    @endsession
                    
                    @can('classCategory-create')
                        <a href=" {{ route('categories.create') }} " class="btn btn-success mb-2">Create</a>
                    @endcan

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $x = 1;
                            @endphp
                            @foreach ($classCategories as $classCategory)
                                <tr>
                                    <td>{{ ++$x }}</td>
                                    <td>Class {{ $classCategory->name }}</td>
                                    <td>
                                        <form action="{{ route('categories.destroy', $classCategory->id) }}" method="POST" onsubmit="return confirmDelete(this)">
                                            @csrf
                                            @method('DELETE')
                                            
                                            @can('classCategory-list')
                                                <a href="{{ route('categories.show', $classCategory->id) }}" class="btn btn-info">Show</a>
                                            @endcan

                                            @can('classCategory-edit')
                                                <a href="{{ route('categories.edit', $classCategory->id) }}" class="btn btn-secondary">Edit</a>
                                            @endcan
                                            
                                            @can('classCategory-delete')
                                                <button type="submit" class="btn btn-danger" id="btnDelete">Delete</button>
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
@push('scripts')

    <script>
        function confirmDelete(form)
        {
            const confirmAction = confirm("Are you sure to Delete!");
            if(confirmAction)
            {
                const btn = form.querySelector("#btnDelete");
                btn.textContent = "Deleting...";
                return true;
            }
            return false;
        }
    </script>

@endpush