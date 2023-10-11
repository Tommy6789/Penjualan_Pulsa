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
          <h3>DATA PENJUALAN</h3>
          <?php 
            $message = $this->session->flashdata('message');
            if ($message == "success"){
            ?>
              <script>alert('berhasil memasukan')</script>
              <?php
              }else if($message == "success update"){
                ?>
                <script>alert('berhasil merubah')</script>
                <?php
              }else if($message == "success delete"){
                ?>
                <script>alert('berhasil menghapus')</script>
                <?php
              };
            ?>
            
          </div>
          <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nomer Telepon</th>
                <th>Nominal</th>
                <th>Tanggal</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>

              <?php
                $i = 1;
                foreach($data as $p) :
              ?>
              <tr>
              <td><?= $i?></td>
              <td><?= $p->nomor_telepon ?></td>
              <td><?= $p->nominal ?></td>
              <td><?= $p->tanggal_penjualan?></td>
              <td>
                <a href="<?= base_url()?>Penjualan/update_penjualan?id=<?= $p->id?>" type="button" class="btn btn-warning"><i class="fas fa-pencil-alt"> EDIT</i></a>
                <a href="<?= base_url()?>Penjualan/delete_penjualan?id=<?= $p->id?>" type="button" class="btn btn-danger"><i class="fas fa-trash"> DELETE</i></a>
              </td>
              </tr>
              <?php
                $i++;
                endforeach;
              ?>
            </tbody>
          </table>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->