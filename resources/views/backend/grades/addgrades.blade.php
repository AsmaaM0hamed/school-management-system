@extends('backend.layouts.master')

@section('title')
    add grades
@endsection

@section('content')

@if (Session::has('add'))
<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show">
    {{ Session::get('add') }}
</div>


@endif
<div class="row">
    <!-- left column -->
    <div class="col">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">add grades</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('grades.store') }}" method="POST">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1"  >name (en)</label>
              <input type="text" name="name_en" class="form-control" >
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">name (ar)</label>
              <input type="text" name="name_ar" class="form-control">
            </div>
            <div class="form-group">
                <label>nots</label>
                <textarea  name="nots" class="form-control" rows="3" ></textarea>
              </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.card -->
    </div>
</div>
@endsection
