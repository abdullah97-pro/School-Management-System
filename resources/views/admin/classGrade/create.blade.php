@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Create ClassGroup') }}</div>

                <div class="card-body">
                    <a href=" {{ route('grades.index') }} " class="btn btn-primary mb-2">Back</a>

                    <form action=" {{ route('grades.store') }} " method="POST">
                        @csrf

                        <div class="form-group row mb-2">
                            <div class="col-sm-2">
                                <label for="">Select Class:</label>
                            </div>
                            <div class="col-sm-10">
                                <select name="c_category_id" class="form-select">
                                    <option value="">Select</option>
                                    @foreach ($classCategories as $classCategory)
                                        <option value="{{$classCategory->id}}">
                                            @switch($classCategory->name)
                                            @case("Nursury")
                                                Class {{ $classCategory->name }}
                                            @break
                                            @case("KG1")
                                                Class {{ $classCategory->name }}
                                            @break
                                            @case("KG2")
                                                Class {{ $classCategory->name }}
                                            @break
                                            @case(1)
                                                Class {{ $classCategory->name }}
                                                @break
                                            @case(2)
                                                Class {{ $classCategory->name }}
                                            @break
                                            @case(3)
                                                Class {{ $classCategory->name }}
                                            @break
                                            @case(4)
                                                Class {{ $classCategory->name }}
                                            @break
                                            @case(5)
                                                Class {{ $classCategory->name }}
                                            @break
                                            @case(6)
                                                Class {{ $classCategory->name }}
                                            @break
                                            @case(7)
                                                Class {{ $classCategory->name }}
                                            @break
                                            @case(8)
                                                Class {{ $classCategory->name }}
                                            @break
                                            @case(9)
                                                Class {{ $classCategory->name }}
                                            @break
                                            @case(10)
                                                Class {{ $classCategory->name }}
                                            @break
                                            @case(11)
                                                Class {{ $classCategory->name }}
                                            @break
                                            @case(12)
                                                Class {{ $classCategory->name }}
                                            @break
                                        
                                            @default
                                                {{ $classCategory->name }}
                                        @endswitch
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <label for="">Class Grade: </label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button class="btn btn-success">ADD</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection