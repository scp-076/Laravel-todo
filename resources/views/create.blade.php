@extends('base.base')

@section('content')
    <div class="container">
        <h3>Create task</h3>
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => ['tasks.store']]) !!}
                @include('formErrors')
                <div class="form-group">
                    <input type="text" class="form-control" name="title" placeholder="title"
                           value="{{ old('title') }}">
                    <br>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"
                              placeholder="task">{{ old('description') }}</textarea>
                    <br>
                    <button class="btn btn-success">Submit</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
