@extends('backend.layouts.master')

@section('title')
   edit classes
@endsection

@section('content')


<div class="row">
    <!-- left column -->
    <div class="col">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">edit class</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('classes.update',$class->id) }}" method="POST">
            @csrf
            @method('put')
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1"  >name (en)</label>
              <input type="text" value="{{ $class->getTranslation('name','en') }}" name="name_en" class="form-control" >
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">name (ar)</label>
              <input type="text" value="{{ $class->getTranslation('name','ar') }}" name="name_ar" class="form-control">
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
