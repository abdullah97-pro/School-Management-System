@extends('layouts.app')
@section('title','Class Grade')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('ClassGroup') }}</div>

                @session('success')
                    <div class="alert alert-success">
                        {{ $value }}
                    </div>
                @endsession
                <div class="card-body">

                    @can('classGrade-create')
                        <a href=" {{ route('grades.create') }} " class="btn btn-success mb-2">Create</a>
                    @endcan
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Class</th>
                                <th>Class Group</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($classGrades as $classGrade)
                                <tr>
                                    <td>{{ $classGrade->id }}</td>
                                    <td>Class {{ $classGrade->classCategory->name }}</td>
                                    <td>{{ $classGrade->name }}</td>
                                    <td>
                                        <form action="{{ route('grades.destroy', $classGrade->id) }}" method="POST" onsubmit="return confirmDelete(this)">
                                            @csrf
                                            @method('DELETE')
                                            
                                            @can('classGrade-list')
                                                <a href="{{ route('grades.show', $classGrade->id) }}" class="btn btn-info">Show</a>
                                            @endcan
                                            
                                            @can('classGrade-edit')
                                                <a href="{{ route('grades.edit', $classGrade->id) }}" class="btn btn-secondary">Edit</a>
                                            @endcan
                                            
                                            @can('lassGrade-delete')
                                                <button class="btn btn-danger" id="btnDelete">Delete</button>
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