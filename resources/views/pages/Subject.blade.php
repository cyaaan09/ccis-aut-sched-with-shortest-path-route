@extends('index')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Subjects</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="row">
      <div class="col-sm-4">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Data Subjects</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Subject Name</label>
                        <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
                      </div>

                      <div class="form-group">
                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Subject Name</label>
                        <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
                      </div>

                      <div class="form-group">
                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Subject Name</label>
                        <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
                      </div>

                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-block btn-info btn-md">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
      </div>
      <div class="col-sm-8">
         <div class="card">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">List</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body p-0">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>ID #</th>
                                  <th>Subject Name</th>
                                  <th>Subject Name</th>
                                  <th>Description </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>19-202</td>
                                  <td>IT</td>
                                  <td>IT</td>
                                  <td>IT</td>
                                  <td>Delete</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
@endsection