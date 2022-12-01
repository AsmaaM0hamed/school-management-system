@extends('backend.layouts.master')

@section('title')
    dashboard
@endsection

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <h3 class="card-title">Expandable Table Tree</h3>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                        add section
                      </button>
                </div>

            </div>

        </div>
        <!-- ./card-header -->
        <div class="card-body p-0">
          <table class="table table-hover">
            <tbody>

              <tr data-widget="expandable-table" aria-expanded="true">
                <td>
                  <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                  219
                </td>
              </tr>
              <tr class="expandable-body">
                <td>
                  <div class="p-0">
                    <table class="table table-hover">
                      <tbody>
                        <tr data-widget="expandable-table" aria-expanded="false">
                          <td>
                            <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                            219-1
                          </td>
                        </tr>
                        <tr class="expandable-body">
                          <td>
                            <div class="p-0">
                              <table class="table table-hover">
                                <tbody>
                                  <tr>
                                    <td>219-1-1</td>
                                  </tr>
                                  <tr>
                                    <td>219-1-2</td>
                                  </tr>

                                </tbody>
                              </table>
                            </div>
                          </td>
                        </tr>
                        <tr data-widget="expandable-table" aria-expanded="false">
                          <td>
                            <button type="button" class="btn btn-primary p-0">
                              <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                            </button>
                            219-2
                          </td>
                        </tr>
                        <tr class="expandable-body">
                          <td>
                            <div class="p-0">
                              <table class="table table-hover">
                                <tbody>
                                  <tr>
                                    <td>219-2-1</td>
                                  </tr>
                                  <tr>
                                    <td>219-2-2</td>
                                  </tr>
                                  <tr>
                                    <td>219-2-3</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </td>
              </tr>

            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('sections.store') }}" method="POST">
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
                    <label>Select</label>
                    <select  name="Grade_id" class="form-control"    onchange="console.log($(this).val())">
                        <option value="" selected >select
                    </option>
                        @foreach ($grades as $grade)
                        <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                        @endforeach
                    </select>

                  </div>
                  <div class="col">
                    <label for="inputName"
                           class="control-label">select</label>
                    <select name="Class_id" class="custom-select">

                    </select>
                </div><br>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save </button>
        </div>
    </form>
      </div>
    </div>
  </div>

@endsection

@section('js')


@endsection
