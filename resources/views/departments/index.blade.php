@extends('layouts.master')

@section('content')
        <h1>Departments</h1>
        <p>List of all departments</p>
        {!! Form::open(array('route'=>'departments.create','method'=>'GET')) !!}
            {!!Form::submit('New Department',array('class' => 'btn btn-success btn-sm'))!!}
        {!! Form::close() !!}
        <br>
        <table class="table table-hover">
          <tr>
            <th>Department Name</th>
            <th></th>
          </tr>
        @foreach ($data as $dept)
        <tr>
        {!! Form::open(array('url'=>'departments/'.$dept->id,'method'=>'GET')) !!}
            <input hidden type="text" name="id" value= {{$dept['id']}}>
            <td>{{$dept['name']}}</td>
            <td>{!!Form::submit('Details',array('class' => 'btn btn-info btn-xs'))!!}</td>
        {!! Form::close() !!}
        </tr>
        @endforeach
        </table>
 </div><!-- /.container -->        
@endsection