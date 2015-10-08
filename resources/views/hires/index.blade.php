@extends('layouts.master')

@section('content')
        <h1>Hires</h1>
        <p>List of all Hirings</p>
        <!-- {!! Form::open(array('route'=>'hires.create','method'=>'GET')) !!}
            {!!Form::submit('New Hire',array('class' => 'btn btn-success btn-sm'))!!}
        {!! Form::close() !!} -->
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#newhire">New Hire</button>
        <br><br>
        <table class="table table-hover">
          <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Start Date</th>
            <th></th>
          </tr>
        @foreach ($data as $hire)
        <tr>
        {!! Form::open(array('url'=>'hires/'.$hire->id,'method'=>'GET')) !!}
            <input hidden type="text" name="id" value= {{$hire['id']}}>
            <td>{{$hire['firstname']}}</td>
            <td>{{$hire['lastname']}}</td>
            <td>{{$hire['startdate']}}</td>
            <td>{!!Form::submit('Details',array('class' => 'btn btn-info btn-xs'))!!}</td>
        {!! Form::close() !!}
        </tr>
        @endforeach
        </table>
        </div><!-- /.container -->



<!-- Modal -->
<div id="newhire" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header" >
          <h4>Create a New Hire Request</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          {!! Form::open(array('route'=>'hires.store')) !!}

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


        
              <button type="submit" class="btn btn-success btn-block">Create</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
      </div>
      
    </div>
  </div> 
@endsection