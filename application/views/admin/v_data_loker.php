<!DOCTYPE html>
<html>

<head>
  <title>Data Loker</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="<?php echo base_url() . 'asset/admin/css/bootstrap.css' ?>" rel="stylesheet">
</head>

<body>

  <div class="container">
    <?php $this->load->view('admin/menu'); ?>
    <!--Include menu-->
    <div class="col-md-12">
      <div class="row">
        <h2>Data Loker</h2>
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Loker</th>
              <th>Gambar</th>
              <th>Alamat</th>
              <th>Deskripsi</th>
              <th>Kategori</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($loker as $lkr) {
            ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $lkr->nama_loker ?></td>
                <td><?php echo $lkr->gambar ?></td>
                <td><?php echo $lkr->alamat ?></td>
                <td><?php echo $lkr->deskripsi ?></td>
                <td><?php echo $lkr->kategori ?></td>
                <td>
                  <a href="<?php echo base_url(); ?>index.php/Page/detailLoker/<?php echo $lkr->id_loker ?>" class="btn btn-info">Detail</a>
                  <a href="<?php echo base_url(); ?>index.php/Page/hapusLoker/<?php echo $lkr->id_loker ?>" class="btn btn-danger">Hapus</a>
                  <a href="<?php echo base_url(); ?>index.php/Page/editDataLoker/<?php echo $lkr->id_loker ?>" class="btn btn-warning">Edit</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>

        </table>
      </div>
    </div>
  </div> <!-- /container -->



  <script src="<?php echo base_url() . 'asset/admin/js/jquery.js' ?>"></script>
  <script src="<?php echo base_url() . 'asset/admin/js/bootstrap.min.js' ?>"></script>

</body>

</html>