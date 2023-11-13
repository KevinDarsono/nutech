<?= $this->extend("page/layouts/main") ?>

<?= $this->section("title") ?>

Dashboard

<?= $this->endSection() ?>

<?= $this->section("css") ?>

<link rel="stylesheet" type="text/css" href="<?= base_url('css/slick.css') ?>" />
<link rel="stylesheet" type="text/css" href="<?= base_url('css/slick-theme.css') ?>" />
<style>
    .box {
        margin-bottom: 20px;
        overflow: hidden;
        height: auto;
    }

    .title {
        font-size: 12px;
        margin-top: 5px;
        text-align: center;
    }

    @media only screen and (min-width: 350px) and (max-width: 449px) {
        .box {
            width: 25%;
            text-align: center;
            margin-right: auto;
        }
    }

    @media only screen and (min-width: 450px) and (max-width: 549px) {
        .box {
            width: 25%;
            text-align: center;
            margin-right: auto;
        }
    }

    @media only screen and (min-width: 550px) and (max-width: 799px) {
        .box {
            width: 25%;
            margin-right: auto;
        }
    }

    @media only screen and (min-width: 800px) and (max-width: 999px) {
        .box {
            width: 15%;
            margin-right: auto;
        }
    }

    @media only screen and (min-width: 1000px) {
        .box {
            width: 8%;
            margin-right: auto;
        }
    }

    .img {
        width: 100%;
    }

    .banner {
        margin-right: 50px;
    }
</style>

<?= $this->endSection() ?>

<?= $this->section("content") ?>

<?= $this->include("page/layouts/partials/hero") ?>

<div class="row row-grid pt-5">
    <?php foreach ($component as $data) : ?>
        <div class="box">
            <img class="img" src="<?= base_url($data["image"]) ?>" alt="">
            <div class="title">
                <?= $data["name"] ?>
            </div>
        </div>
    <?php endforeach ?>
</div>

<h5 class="pt-3">
    Temukan promo menarik
</h5>

<div class="banner-container">
    <?php foreach ($banners as $banner) : ?>
        <div class="banner">
            <img src="<?= base_url($banner["image"]) ?>" alt="">
        </div>
    <?php endforeach ?>
</div>



<?php //echo $api_data;?>

<?= $this->endSection() ?>

<?= $this->section("javascript") ?>

<script type="text/javascript" src="<?= base_url('js/jquery.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('js/slick.min.js') ?>"></script>

<script>
    $(document).ready(function() {
        $('.banner-container').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            variableWidth: true,
            centerMode: false,
            centerPadding: '0px',
            prevArrow: null,
            nextArrow: null
        });
    });
</script>

<?= $this->endSection() ?>