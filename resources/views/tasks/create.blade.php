@extends('layouts.master')

@section('content')

    <h1>HIER + GIBT + ES = NEUES</h1>
    <p class="lead">Generate solution below.</p>
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


    {!! Form::open([
        'route' => 'tasks.store'
    ]) !!}

    <div class="form-group">
        {!! Form::label('solution', 'Solution:', ['class' => 'control-label']) !!}
        {!! Form::text('solution',  $solution , ['class' => 'form-control', 'readonly' => 'true']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('iteration', 'Iteration:', ['class' => 'control-label']) !!}
        {!! Form::text('iteration',  $iteration , ['class' => 'form-control', 'readonly' => 'true']) !!}
    </div>

    {!! Form::submit('Create New Solution', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection
