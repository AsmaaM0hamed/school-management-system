@extends('backend.layouts.master')

@section('title')
    edit grades
@endsection

@section('content')



<div class="row">
    <!-- left column -->
    <div class="col">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">edit grades</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('grades.update',$grade->id) }}" method="POST">
            @csrf
            @method('put')
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1"  >name (en)</label>
              <input type="text" value="{{ $grade->getTranslation('name','en') }}" name="name_en" class="form-control" >
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">name (ar)</label>
              <input type="text" value="{{ $grade->getTranslation('name','ar') }}" name="name_ar" class="form-control">
            </div>
            <div class="form-group">
                <label>nots</label>
                <textarea  name="nots" class="form-control" rows="3" >
                    {{ $grade->nots }}
                </textarea>
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
