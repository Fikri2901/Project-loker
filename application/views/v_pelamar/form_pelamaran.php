    <div class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url(); ?>asset/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
            <p class="breadcrumbs mb-0"><span class="mr-3"><a href="<?php echo base_url(); ?>c_pelamar/HomePelamar">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Form Pelamaran</span></p>
            <h1 class="mb-3 bread">Form Pelamaran</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="ftco-section bg-light">
      <div class="container">
        <div class="row">

          <div class="col-md-12 col-lg-8 mb-5">

            <form action="#" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Nama Pekerjaan</label>
                  <input type="text" id="fullname" class="form-control" disabled value="<?php echo $loker->nama_loker ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Nama</label>
                  <input type="text" class="form-control" value="<?php echo $this->session->userdata('ses_nama'); ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Alamat</label>
                  <input type="text" class="form-control" value="<?php echo $this->session->userdata('ses_alamat'); ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">No Telp</label>
                  <input type="text" class="form-control" value="<?php echo $this->session->userdata('ses_no_telp'); ?>">
                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Email</label>
                  <input type="text" class="form-control" value="<?php echo $this->session->userdata('ses_email'); ?>">
                </div>
              </div>

              <!-- <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Deskripsi</label>
                  <textarea name="" class="form-control" id="" cols="10" rows="5"></textarea>
                </div>
              </div> -->

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="fullname">Upload CV </label>
                  <input type="file" class="btn btn-primary">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="fullname">Upload Ijazah </label>
                  <input type="file" class="btn btn-primary">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send" class="btn btn-primary  py-2 px-5">
                </div>
              </div>


            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Info Kontak</h3>
              <p class="mb-0 font-weight-bold">Alamat</p>
              <p class="mb-4">Jl. MT Haryono Gg.22 no.11 Rt.05 Rw.05 Tegal Arum Kota Pasuruan</p>

              <p class="mb-0 font-weight-bold">Telepon</p>
              <p class="mb-4"><a href="#">+6283833424784</a></p>

              <p class="mb-0 font-weight-bold">Email</p>
              <p class="mb-0"><a href="#">jobpply@jobpply.com</a></p>

            </div>

            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>Anda dapat menemukan informasi terbaru mengenai kami pada website ini. JOBBLY terus berkembang dan berevolusi. Kami menyediakan beragam layanan. Misi kami adalah menyediakan Solusi Career terbaik yang dapat membantu semua orang.</p>
              <p><a href="<?php echo base_url(); ?>c_perusahaan/c_about" class="btn btn-primary  py-2 px-4">About</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>