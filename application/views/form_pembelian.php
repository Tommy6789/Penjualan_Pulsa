  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">FORM PEMBELIAN PULSA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PEMBELIAN</a></li>
              <li class="breadcrumb-item active">PULSA</li>
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
          PEMBELIAN PULSA
        </div>
        <form action="<?= base_url('penjualan/simpan_data')?>"method="post">
          <div class="card-body">
            <?php 
            $message = $this->session->flashdata('message');

            if ($message == "success"){
            ?>
              <script>alert('berhasil memasukan data')</script>
              <?php
              };
            ?>
              <label for="">NOMOR TELEPON</label>
              <input required type="text" class="form-control" name="nomor_telepon">
              <label for="">Pulsa</label>
              <select class="form-control" name="nominal" id="">
                <option value="">Pilih Nominal</option>
                <option value="5.000">5.000</option>
                <option value="10.000">10.000</option>
                <option value="15.000">15.000</option>
                <option value="20.000">20.000</option>
                <option value="25.000">25.000</option>
                <option value="50.000">50.000</option>
                <option value="100.000">100.000</option>
              </select>
              <label for="">KOUTA</label>
              <select class="form-control" name="nominal" id="">
                <option value="">Pilih Nominal</option>
                <option value="500MB 5.000">500MB 5.000</option>
                <option value="1GB 10.000">1GB 10.000</option>
                <option value="2GB 15.000">2GB 15.000</option>
                <option value="3GB 20.000">3GB 20.000</option>
                <option value="4GB 25.000">4GB 25.000</option>
                <option value="11GB 50.000">11GB 50.000</option>
                <option value="45GB 100.000">45GB 100.000</option>
              </select>
            <label for="">TANGGAL PENJUALAN</label>
            <input required class="form-control" type="date" name="tanggal_penjualan" id="">

          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary". >Beli</button>
            </div>
        </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->