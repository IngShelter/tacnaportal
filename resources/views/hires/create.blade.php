@extends('layouts.master')

@section('content')
        <h1>Create a New Hire Request</h1>
        {!! Form::open(array('route'=>'hires.store')) !!}
        <!-- <form role="form" action="hires/store" method="post" > -->
            <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
            <div class="form-group">
              <label for="firstname">First Name</label>
              <input type="text" class="form-control" name="firstname" >
            </div>
            <div class="form-group">
              <label for="lastname">Last Name</label>
              <input type="text" class="form-control" name="lastname">
            </div>

            <div class="form-group">
              <label for="startdate">Start Date</label>
              <input type="text" class="form-control" name="startdate" placeholder="YYYY-MM-DD">
            </div>

            <div class="form-group">
              <label for="startdate">Employee Number</label>
              <input type="text" class="form-control" name="emp_no">
            </div>

            <!-- <div class="form-group">
              <label for="startdate">Department</label>
              <input type="text" class="form-control" name="startdate">
            </div> -->

             <div class="form-group">
              <label for="sel1">Department:</label>
              <select class="form-control" name="department">
                @foreach($departments as $depto)
                <option>{{$depto}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email">
            </div>

            <div class="form-group">
              <label for="startdate">Position</label>
              <input type="text" class="form-control" name="position">
            </div>

            <div class="form-group">
              <label for="startdate">Location</label>
              <input type="text" class="form-control" name="location">
            </div>
        
        
            
            <!-- {!! Form::label('First Name:') !!}
            {!! Form::text('firstname') !!}
<br>
            {!! Form::label('Last Name:') !!}
            {!! Form::text('lastname') !!}
<br>
            {!! Form::label('Department:') !!}
            {!! Form::select('department',$departments) !!}
<br>
            {!! Form::label('Emp. #:') !!}
            {!! Form::text('emp_no') !!}
<br>
            {!! Form::label('Position:') !!}
            {!! Form::text('position') !!}
<br>
            {!! Form::label('Start Date:') !!}
            {!! Form::text('startdate') !!}
<br>
            {!! Form::label('Email:') !!}
            {!! Form::text('email') !!}
<br>
            {!! Form::label('Location:') !!}
            {!! Form::text('location') !!}
 -->
            <!-- <div class="form-group col-md-4">
                <label for="sel1">Department:</label>
                <select class="form-control" name="department">
                    @foreach($departments as $option)
                    <option>{{$option}}</option>
                    @endforeach
                </select>
            </div> -->

            <br>
            {!!Form::submit('Create',array('class' => 'btn btn-success btn-sm'))!!}
            {!! Form::close() !!}
            
            {!! Form::open(array('route'=>'hires.index','method'=>'GET')) !!}
                {!!Form::submit('Cancel',array('class' => 'btn btn-danger btn-sm'))!!}
            {!! Form::close() !!}
        
@endsection