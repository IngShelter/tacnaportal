@extends('layouts.master')

@section('content')
        <h1>Manager Details</h1>
        <hr>
        {!! Form::label('Name: ') !!}
        {!! Form::label('firstname:',$manager['firstname']) !!}
        {!! Form::label('lastname:',$manager['lastname']) !!}
        <br>
        {!! Form::label('Department: ') !!}
        {!! Form::label('deptname:',$depto) !!}


        {!! Form::open(array('route'=>'managers.index','method'=>'GET')) !!}
            {!!Form::submit('Cancel',array('class' => 'btn btn-danger btn-sm'))!!}
        {!! Form::close() !!}

@endsection