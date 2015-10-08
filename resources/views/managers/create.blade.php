@extends('layouts.master')

@section('content')
        <h1>Create a New Manager</h1>
        {!! Form::open(array('route'=>'managers.store')) !!}
            
            {!! Form::label('First Name:') !!}
            {!! Form::text('firstname') !!}

            {!! Form::label('Last Name:') !!}
            {!! Form::text('lastname') !!}

            {!! Form::label('Department:') !!}
            {!! Form::select('department',$departments) !!}
            <!-- <div class="form-group col-md-4">
                <label for="sel1">Department:</label>
                <select class="form-control" name="department">
                    @foreach($departments as $option)
                    <option>{{$option}}</option>
                    @endforeach
                </select>
            </div> -->

            <br>
            {!!Form::submit('Create')!!}
        {!! Form::close() !!}
@endsection