@extends('backend.layouts.master')

@section('title')
    add classes
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
          <h3 class="card-title">add class</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('classes.store') }}" method="POST">
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
                <label>grade name</label>
                <select class="form-control" name="grade_id">
                    @foreach ($grades as $grade )
                    <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                    @endforeach


                </select>
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
