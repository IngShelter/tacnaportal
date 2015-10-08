@extends('layouts.master')

@section('content')
        <h1>New Hire Details</h1>
        <hr>
        
        {!! Form::label('Name: ') !!}
        {!! Form::text('firstname:',$hire['firstname']) !!}
        {!! Form::text('lastname:',$hire['lastname']) !!}
        <br>
        {!! Form::label('Department: ') !!}
        {!! Form::text('lastname:',$hire['department_id']) !!}

        <br>
        {!! Form::label('Position: ') !!}
        {!! Form::text('position',$hire['position']) !!}

        <br>
        {!! Form::label('Start Date: ') !!}
        {!! Form::text('startdate',$hire['startdate']) !!}
        <br>
        {!! Form::label('Email: ') !!}
        {!! Form::text('email',$hire['email']) !!}
        <br>
        {!! Form::label('Loation: ') !!}
        {!! Form::text('location',$hire['location']) !!}

        
        {!! Form::open() !!}
            {!!Form::submit('Update',array('class' => 'btn btn-info btn-sm'))!!}
        {!! Form::close() !!}

        {!! Form::open(array('route'=>'hires.index','method'=>'GET')) !!}
            {!!Form::submit('Cancel',array('class' => 'btn btn-danger btn-sm'))!!}
        {!! Form::close() !!}

@endsection