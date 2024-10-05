@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Batches</div>
  <div class="card-body">
      
      <form action="{{ url('batches/' .$batches->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$batches->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$batches->name}}" class="form-control"></br>
        <label>Course</label></br>
        <input type="text" name="syllabus" id="course_id" value="{{$batches->syllabus}}" class="form-control"></br>
        <label>start_date</label></br>
        <input type="text" name="duration" id="start_date" value="{{$batches->duration}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  </div>
</div>
 
@stop
