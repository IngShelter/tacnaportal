@extends('layouts.master')

@section('content')
        <h1>Create a New Department</h1>
        {!! Form::open(array('route'=>'departments.store')) !!}
            {!! Form::label('Department Name:') !!}
            {!! Form::text('name') !!}
            {!!Form::submit('Create',array('class' => 'btn btn-success btn-sm'))!!}
        {!! Form::close() !!}

        {!! Form::open(array('route'=>'departments.index','method'=>'GET')) !!}
            {!!Form::submit('Cancel',array('class' => 'btn btn-danger btn-sm'))!!}
        {!! Form::close() !!}
@endsection