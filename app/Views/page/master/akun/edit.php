<?= $this->extend('page/layouts/main') ?>

<?= $this->section('title') ?>
Profil Akun
<?= $this->endSection() ?>

<?= $this->section("css") ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-8 mx-auto">
        <form action="" method="POST">
            <center>
                <div class="rounded-circle pb-4">
                    <img src="<?= base_url('image/Profile Photo.png') ?>" class="img-fluid" style="width: 100px;" alt="Profile Image">
                </div>
                <h3>
                    Kevin Darsono
                </h3>
            </center>
            <br>
            <div class="form-group">
                <label for="email" class="mb-2"> Email </label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="border-radius: 5px 0px 0px 5px;padding-top: 10px; padding-bottom: 10px; padding-left: 10px; padding-right: 10px; background-color: white;">
                            <i class="fa fa-envelope" style="color: darkgray;"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" size="100" style="border-left: 0" placeholder="Masukkan Email Anda">
                </div>
            </div>
            <div class="form-group">
                <label for="nama_depan" class="mb-2"> Nama Depan </label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="border-radius: 5px 0px 0px 5px;padding-top: 10px; padding-bottom: 10px; padding-left: 10px; padding-right: 10px; background-color: white;">
                            <i class="fa fa-user" style="color: darkgray;"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" size="100" style="border-left: 0" placeholder="Masukkan Nama Depan Anda">
                </div>
            </div>
            <div class="form-group">
                <label for="nama_depan" class="mb-2"> Nama Belakang </label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="border-radius: 5px 0px 0px 5px;padding-top: 10px; padding-bottom: 10px; padding-left: 10px; padding-right: 10px; background-color: white;">
                            <i class="fa fa-user" style="color: darkgray;"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" size="100" style="border-left: 0" placeholder="Masukkan Nama Belakang Anda">
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-danger" style="background-color: red; width: 100%;">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>