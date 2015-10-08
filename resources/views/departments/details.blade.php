@extends('layouts.master')

@section('content')
        <h1>Department Details</h1>
        {{$dept}}

        {!! Form::open(array('route'=>'departments.index','method'=>'GET')) !!}
            {!!Form::submit('Cancel',array('class' => 'btn btn-danger btn-sm'))!!}
        {!! Form::close() !!}

@endsection