@extends('layouts.master')

@section('content')

    <h1>{{ $task->solution }}</h1>
    <p class="lead">Iteration: {{ $task->iteration }}</p>
    <hr>



    <div class="pull-right">
        {!! Form::open([
                'method' => 'DELETE',
                'route' => ['tasks.destroy', $task->id]
            ]) !!}

        <a href="{{ route('tasks.index') }}" class="btn btn-info">Back</a>
        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Regenerate</a>

        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>

@endsection
