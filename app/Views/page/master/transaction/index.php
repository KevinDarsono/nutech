<?= $this->extend("page/layouts/main") ?>

<?= $this->section("title") ?>
Transaction
<?= $this->endSection() ?>

<?= $this->section("css") ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .nominal-plus {
        color: green;
        font-size: 30px;
        font-weight: bold;
    }

    .waktu {
        font-size: 12px;
        color: grey;
    }

    .keterangan {
        font-size: 15px;
    }

    .card {
        margin-bottom: 20px;
    }

    .nominal-minus {
        color: red;
        font-size: 30px;
        font-weight: bold;
    }
</style>

<?= $this->endSection() ?>

<?= $this->section("content") ?>

<?= $this->include("page/layouts/partials/hero") ?>

<h5>
    Semua Transaksi
</h5>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <div class="nominal-plus">
                    <i class="fa fa-plus"></i> Rp.10.000
                </div>
                <small class="waktu">
                    17 Agustus 2023 13:10 WIB
                </small>
            </div>
            <div class="col-md-4" style="text-align: right;">
                <small class="keterangan">
                    Top Up Saldo
                </small>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <div class="nominal-minus">
                    <i class="fa fa-minus"></i> Rp.10.000
                </div>
                <small class="waktu">
                    17 Agustus 2023 13:10 WIB
                </small>
            </div>
            <div class="col-md-4" style="text-align: right;">
                <small class="keterangan">
                    Top Up Saldo
                </small>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>