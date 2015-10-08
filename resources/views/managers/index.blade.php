@extends('layouts.master')

@section('content')
        <h1>Managers</h1>
        <p>List of all Managers</p>
        {!! Form::open(array('route'=>'managers.create','method'=>'GET')) !!}
            {!!Form::submit('New Manager',array('class' => 'btn btn-success btn-sm'))!!}
        {!! Form::close() !!}
        <br>
        <table class="table table-hover">
          <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Department</th>
            <th></th>
          </tr>
        @foreach ($data as $manager)
        <tr>
        {!! Form::open(array('url'=>'managers/'.$manager->id,'method'=>'GET')) !!}
            <input hidden type="text" name="id" value= {{$manager['id']}}>
            <td>{{$manager['firstname']}}</td>
            <td>{{$manager['lastname']}}</td>
            <td><?php  ?></td>
            <td>{!!Form::submit('Details',array('class' => 'btn btn-info btn-xs'))!!}</td>
        {!! Form::close() !!}
        </tr>
        @endforeach
        </table>
        </div><!-- /.container -->
@endsection