@extends('layouts.master')

@section('content')

    <h1>HIER + GIBT + ES = NEUES</h1>
    <p class="lead">Edit this solution below. <a href="{{ route('tasks.index') }}">Go back to all solutions.</a></p>
    <hr>

    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    {!! Form::model($task, [
        'method' => 'PATCH',
        'route' => ['tasks.update', $task->id]
    ]) !!}

    <div class="form-group">
        {!! Form::label('solution', 'Solution:', ['class' => 'control-label']) !!}
        {!! Form::text('solution', $solution, ['class' => 'form-control', 'readonly' => 'true']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('iteration', 'Iteration:', ['class' => 'control-label']) !!}
        {!! Form::text('iteration', $iteration, ['class' => 'form-control', 'readonly' => 'true']) !!}
    </div>

    {!! Form::submit('Regenerate Solution', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection
