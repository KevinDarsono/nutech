<?= $this->extend("authentication/layouts/main") ?>

<?= $this->section("title") ?>

Login

<?= $this->endSection() ?>

<?= $this->section("css") ?>

<style>
    .col-md-4 {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .logo {
        font-size: 20px;
        font-weight: bold;
        padding-bottom: 20px;
    }

    .content {
        font-weight: bold;
        font-size: 25px;
        text-align: center;
        padding-bottom: 50px;
    }
</style>

<?= $this->endSection() ?>

<?= $this->section("content") ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="row p-0 m-0">
    <div class="col-md-4 mx-auto">
        <div class="logo">
            <img src="<?= base_url('image/Logo.png') ?>" alt=""> SIMS PPOB
        </div>
        <div class="content">
            Masuk atau buat akun <br> untuk memulai
        </div>
        <form action="" method="POST">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" style="border-radius: 5px 0px 0px 5px;padding-top: 10px; padding-bottom: 10px; padding-left: 10px; padding-right: 10px; background-color: white;">
                        <i class="fa fa-envelope" style="color: darkgray;"></i>
                    </span>
                </div>
                <input type="text" class="form-control" size="100" style="border-left: 0" placeholder="masukkan email anda">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" style="border-radius: 5px 0px 0px 5px;padding-top: 10px; padding-bottom: 10px; padding-left: 10px; padding-right: 10px; background-color: white;">
                        <i class="fa fa-key" style="color: darkgray;"></i>
                    </span>
                </div>
                <input type="text" class="form-control" style="border-left: 0" placeholder="buat password">
            </div>
            <div class="form-group mb-4">
                <button type="submit" class="btn btn-danger btn-block" style="width: 100%; background-color: red; padding-top: 10px; padding-bottom: 10px;">
                    Registrasi
                </button>
            </div>
        </form>
        <center>
            <span>
                belum punya akun? registrasi <a href="<?= base_url('registration') ?>" style="text-decoration: none; color: red;">di sini</a>
            </span>
        </center>
    </div>
    <div class="col-md-6" style="background-image: url('image/ilustrasi.png'); background-repeat: no-repeat; background-size: cover; background-position: center; height: 100vh;">
    </div>
</div>


<?= $this->endSection() ?>