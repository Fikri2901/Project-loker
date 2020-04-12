<div class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url(); ?>asset/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
      <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
        <p class="breadcrumbs mb-0"><span class="mr-3"><a href="<?php echo base_url(); ?>c_perusahaan/HomePerusahaan">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Profil</span></p>
        <h1 class="mb-3 bread">Profil Perusahaan</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section contact-section bg-light">
  <div class="container">
    <div class="col-md-12 heading-section ftco-animate">
      <h2 class="mb-4">Profil</h2>
    </div>
    <img src="<?= base_url(); ?>foto_perusahaan/<?= $perusahaan->logo ?>" class="rounded mx-auto d-block" width="40%">
    <center>
      <div class="mt-2">
        <label class="font-weight-bold" for="foto_profil">Upload Foto </label>
        <input type="file" class="btn btn-primary" id="logo" name="logo">
      </div>
    </center><br>

    <form>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nama">Nama Perusahaan</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Email" value="<?= $perusahaan->nama ?>">
        </div>
        <div class="form-group col-md-6">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= $perusahaan->username ?>">
        </div>
        <div class="form-group col-md-6">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?= $perusahaan->email ?>">
        </div>
        <div class="form-group col-md-6">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?= $perusahaan->password ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="<?= $perusahaan->alamat ?>">
      </div>
      <div class="form-group">
        <label for="website">Website</label>
        <input type="text" class="form-control" id="website" name="website" placeholder="Website" value="<?= $perusahaan->website ?>">
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="no_telp">No Telp</label>
          <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="No Telp" value="<?= $perusahaan->no_telp ?>">
        </div>
        <div class="form-group col-md-4">
          <label for="fax">fax</label>
          <input type="text" class="form-control" id="fax" name="fax" placeholder="fax" value="<?= $perusahaan->fax ?>">
        </div>
        <div class="form-group col-md-4">
          <label for="contact_person">Contact person</label>
          <input type="text" class="form-control" id="contact_person" name="contact_person" placeholder="Contact Person" value="<?= $perusahaan->contact_person ?>">
        </div>

      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="deskripsi">Deskripsi</label>
          <textarea name="deskripsi" id="deskripsi" cols="120" rows="5"><?= $perusahaan->deskripsi ?></textarea>
        </div>

      </div>
      <center>
        <button type="submit" class="btn btn-primary mt-5">Ubah Data</button>
      </center>
    </form>


</section>