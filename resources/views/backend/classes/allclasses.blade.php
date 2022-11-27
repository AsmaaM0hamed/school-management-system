@extends('backend.layouts.master')

@section('title')
    all classes
@endsection

@section('content')

@if (Session::has('delet'))
<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show">
    {{ Session::get('delet') }}
</div>


@endif
@if (Session::has('edit'))
<div class="alert alert-warning bg-warning text-light border-0 alert-dismissible fade show">
    {{ Session::get('edit') }}
</div>


@endif

<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">classes Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>name (en)</th>
                <th>name (ar)</th>
                <th >grade</th>
                <th>edit</th>
                <th>delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($classes as $class)
                <tr>
                    <td>{{ $loop->index +1}}</td>
                    <td>{{ $class->getTranslation('name','en') }}</td>
                    <td>
                        {{ $class->getTranslation('name','ar') }}
                    </td>


                    <td>{{ $class->grade->name }}</td>
                    <td><a class="btn btn-warning" href="{{ route("classes.edit",$class->id) }}">edit</a></td>
                    <td> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delet">
                        delete
                       </button>
                    </td>
                  </tr>

                  <div class="modal fade" id="delet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">delete</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="{{ route('classes.destroy',$class->id) }}"method="post">
                            @csrf
                            @method('delete')
                        <div class="modal-body">
                            هل انت متاكد من الحذف
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>

                @endforeach


            </tbody>
          </table>
        </div>
        <!-- /.card-body -->

      </div>
    </div>
</div>
@endsection
