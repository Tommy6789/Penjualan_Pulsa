  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">FORM UPDATE PENJUALAN</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">UPDATE</a></li>
              <li class="breadcrumb-item active">PENJUALAN</li>
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
          UPDATE PENJUALAN
        </div>
        <form action="<?= base_url('penjualan/update_data')?>"method="post">
          <div class="card-body">
            <?php 
            $message = $this->session->flashdata('message');

            if ($message == "success"){
            ?>
              <script>alert('berhasil memasukan data')</script>
              <?php
            };
            foreach ($data as $p) :
            ?>
            <label for="">ID PENJUALAN</label>
            <input readonly value="<?= $p->id?>" required type="text" class="form-control" name="id">
              <label for="">NOMOR TELEPON</label>
              <input required type="text" class="form-control" name="nomor_telepon">
              <label for="">NOMINAL</label>
              <select required class="form-control" name="nominal" id="">
                <option value="">Pilih Nominal</option>
                <option value="5000">5.000</option>
                <option value="10000">10.000</option>
                <option value="15000">15.000</option>
                <option value="20000">20.000</option>
                <option value="25000">25.000</option>
                <option value="50000">50.000</option>
                <option value="100000">100.000</option>
              </select>
            <label for="">TANGGAL PENJUALAN</label>
            <input required class="form-control" type="date" name="tanggal_penjualan" id="">
          </div>
          <?php 
            endforeach;
            ?>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary". >Update</button>
            </div>
        </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->