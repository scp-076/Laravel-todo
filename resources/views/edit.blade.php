@extends('base.base')

@section('content')
    <div class="container">
        <h3>Edit task # - {{ $task->id }}</h3>
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => ['tasks.update', $task->id], 'method' => 'PUT']) !!}
                @include('formErrors')
                <div class="form-group">
                    <input type="text" class="form-control" name="title" placeholder="title"
                           value="{{ $task->title }}">
                    <br>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"
                              placeholder="task">{{ $task->description }}</textarea>
                    <br>
                    <button class="btn btn-warning">Edit</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
