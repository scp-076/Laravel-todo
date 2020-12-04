@extends('base.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>{{ $task->title }}</h3>
                <p>{{ $task->description }}</p>
            </div>
            <a href="{{ route('tasks.index') }}" class="btn btn-success">Back</a>
        </div>
    </div>
@endsection
