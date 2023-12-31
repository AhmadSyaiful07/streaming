

  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4>Data Film</h4>
                  <a type="button" class="btn btn-info" href="<?= base_url('admin/tambah_film')?>">
                    Tambah Film
                  </a>
            </div>
            <table class="table table-light">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Foto</th>
                  <th>Genre</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>One Piece</td>
                  <td>Image</td>
                  <td>Aksi,Komedi</td>
                  <td>Aksi</td>
                </tr>
              </tbody>
            </table>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  