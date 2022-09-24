<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Employee DataTable with minimal features & hover style</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Job Title</th>
                            <th>Dept</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <tr>
                            <td>1.</td>
                            <td>1</td>
                            <td>Demo</td>
                            <td>Trainee</td>
                            <td>Computer</td>
                            <td><a id="view_employee"><i class="fa fa-eye"></i></a>
                                <a id="edit_employee"><i class='fas fa-edit'></i></a>
                                <a id="delete_employee"><i class='fas fa-trash-alt'></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>2</td>
                            <td>Test</td>
                            <td>Fresher</td>
                            <td>Computer</td>
                            <td><a id="view_employee"><i class="fa fa-eye"></i></a>
                                <a id="edit_employee"><i class='fas fa-edit'></i></a>
                                <a id="delete_employee"><i class='fas fa-trash-alt'></i></a>
                            </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <div class="card-button">
                    <button id="add_emp" class="btn btn-block btn-primary btn-lg">ADD</button>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>