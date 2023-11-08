<?php
$dt = json_decode($data);

?>

<style>
    .blink {
        animation: blink-animation 1s steps(5, start) infinite;
        -webkit-animation: blink-animation 1s steps(5, start) infinite;
    }

    @keyframes blink-animation {
        to {
            visibility: hidden;
        }
    }

    @-webkit-keyframes blink-animation {
        to {
            visibility: hidden;
        }
    }
</style>

<section class="about_section layout_padding">
    <div class="container">
        <div class="row" style="text-align: center;">
            <div class="col-md-12">
                <button class="buttonku">
                    <h1><?= $dt->title; ?></h1>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 px-0">
                <div class="detail-box">
                    <div class="img_container" style="text-align: center;">
                        <div class="img-box">
                            <img class="img-thumbnail" src="<?= base_url('assets/guard/images/') . $dt->images1; ?>" alt="" style="width: 80%; border-radius:20px solid #ffff;" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="text-align: center; width: fit-content;">
                <div class="col-md-12">
                    <video controls="true" width="300px" height="300px">
                        <source src="<?= base_url('assets/guard/video/') . $dt->video; ?>" type="video/webm" />
                        Browsermu tidak mendukung tag ini, upgrade donk!
                    </video>
                </div>
            </div>
        </div>
        <div class="row" style="text-align: center;">
            <div class="col-md-12 px-0" style="text-align: center;">
                <div class="detail-box">
                    <div class="heading_container ">
                        <h2>
                            <?= $dt->paragraf1; ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="text-align: center;">
            <div class="col-md-12 px-0">
                <div class="detail-box">
                    <div class="img_container" style="text-align: center;">
                        <div class="img-box">
                            <img class="img-thumbnail" src="<?= base_url('assets/guard/images/') . $dt->images2; ?>" alt="" style="width: 80%; border-radius:20px solid #ffff;" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="text-align: center;">
                <div class="col-md-12 px-0">
                    <div class="img_container" style="text-align: center;">
                        <div class="img-box">
                            <img class="img-thumbnail" src="<?= base_url('assets/guard/images/') . $dt->images5; ?>" alt="" style="width: 80%; border-radius:20px solid #ffff;" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="detail-box">
                <div class="col-md-12 px-0" style="text-align: center;display: inline-block;">
                    <div class="detail-box">
                        <div class="heading_container" style="background-color: chocolate;">
                            <h3>
                                Spesifikasi :
                            </h3>
                        </div>
                        <ul style="list-style-type: none; text-align: left;">
                            <?php foreach ($produk as $p) : ?>
                                <li> <button type="button" class="btn btn-rounded-primary"><i class="fa-solid fa-check"></i></button> <?= $p->title ?> </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="btn-box">
                            <a href="<?= $dt->whatsappme ?>" class="buttonku">
                                Pesan Disini
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="text-align: center;">
            <div class="col-md-12 px-0" style="text-align: center;">
                <div class="detail-box">
                    <div class="heading_container" ;">
                        <button type="button" class="btn btn-secondary" style="font-size: 40px;"><i class="fa-regular fa-heart"></i> Terpercaya <i class="fa-solid fa-check"></i> Aman <i class="fa-solid fa-cart-plus"></i> Ada Discount </button>
                    </div>
                </div>
                <div class="detail-box">
                    <div class="col-md-12 px-0">
                        <div class="img_container" style="text-align: center;">
                            <div class="img-box">
                                <img class="img-thumbnail" src="<?= base_url('assets/guard/images/') . $dt->images3; ?>" alt="" style="width: 80%; border-radius:20px solid #ffff;" />
                            </div>
                        </div>
                    </div>
                    <div class="heading_container ">
                        <h3>
                            <?= $dt->note; ?>
                        </h3>
                    </div>
                    <div class="btn-box">
                        <a href="<?= $dt->whatsappme; ?>" class="buttonku">
                            Pesan Disini
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 px-0" style="text-align: center;display: inline-block;">
                <div class="detail-box">
                    <div class="heading_container" style="background-color: chartreuse;">
                        <h3>
                            Isi Paket :
                        </h3>
                    </div>

                    <ul style="list-style-type: none; text-align: left;">
                        <?php foreach ($isi_paket as $p) : ?>
                            <li> <button type="button" class="btn btn-rounded-warning"><i class="fa-solid fa-check"></i></button> <?= $p->title ?> </li>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 px-0">
                <div class="img_container" style="text-align: center;">
                    <div class="img-box">
                        <img class="img-thumbnail" src="<?= base_url('assets/guard/images/') . $dt->images4; ?>" alt="" style="width: 80%; border-radius:20px solid #ffff;" />
                    </div>
                </div>
            </div>
            <div class="col-md-12 px-0">
                <div class="img_container" style="text-align: center;">
                    <div class="img-box">
                        <img class="img-thumbnail" src="<?= base_url('assets/guard/images/') . $dt->images6; ?>" alt="" style="width: 80%; border-radius:20px solid #ffff;" />
                    </div>
                </div>
            </div>
            <div class="col-md-12 px-0">
                <div class="img_container" style="text-align: center;">
                    <div class="img-box">
                        <img class="img-thumbnail" src="<?= base_url('assets/guard/images/') . $dt->images7; ?>" alt="" style="width: 80%; border-radius:20px solid #ffff;" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="detail-box" style="text-align: center;">
                    <div class="heading_container">
                        <h3>
                            Produk Yang Kami Jual Dalam Kondisi Asli (Bergaransi)
                        </h3>
                    </div>
                    <div class="heading_container" style="text-align: center;">
                        <h3>
                            Mengapa Memilih Produk Kami
                        </h3>
                    </div>
                    <ul style="list-style-type: none; font-size:30px ;text-align: left;">
                        <li> <i class="fa-solid fa-check"></i> Produk Asli</li>
                        <li> <i class="fa-solid fa-check"></i> Ada Garansi Toko</li>
                        <li> <i class="fa-solid fa-check"></i> Dapat COD</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="detail-box" style="text-align: center;">
                    <div class="heading_container">
                        <h4>
                            Khusus Hari ini !!! </h4>
                        <h4>Kami Berikan Diskon
                        </h4>
                        <h3>Harga Normal </h3>
                        <h3>
                            <span style="text-decoration:line-through;color:#F44336"><span data-text="true">Rp <?= number_format($dt->harga_normal, 0, '.', ',') ?></span>

                        </h3>
                        <h3>
                            Promo Diskon
                        </h3>
                        <h3 class="text-success" style="font-size: 30px;">
                            Rp <?= number_format($dt->harga_promo, 0, '.', ',') ?>
                        </h3>
                        <h3 class="text-underline" style="text-decoration: underline;color:#F44336;">PROMO TIDAK BERLAKU APABILA WAKTU HABIS</h3>
                        <h2> Promo Berakhir 2 Jam Lagi </h2>
                    </div>
                </div>
                <div class="detail-box" style="text-align: center;">
                    <div id="CountDownTimer" class="heading_container" data-timer="7200" style="width: 400px; height: 250px; text-align: center;"></div>
                </div>
            </div>
            <div class="col-md-12 px-0">
                <div class="img-responsive" style="text-align: center;">
                    <div class="img-box blink">
                        <img src="<?= base_url('assets/guard/images/') ?>click.jpg" alt="" class="img-responsive" style="width: 20%; rotate: 180degree;">
                    </div>
                </div>
            </div>
            <div class="col-md-12 px-0" style="font-size: 30px;">
                <div style="text-align: center;">
                    <div class="btn-box">
                        <a href="<?= $dt->whatsappme; ?>" class="buttonku blink">
                            Pesan Disini
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="container">
                <div class="col-md-12 px-0">
                    <div class="heading_container">
                        <div class="img_container" style="text-align: center;">
                            <div class="img-box">
                                <img class="img-thumbnail" src="<?= base_url('assets/guard/images/') . $dt->images8 ?>" alt="" style="width:50%; border-radius:20px solid #ffff;" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 px-0">
                    <div class="img_container" style="text-align: center;">
                        <div class="img-box">
                            <img class="img-thumbnail" src="<?= base_url('assets/guard/images/') ?>jnt.jpg" alt="" style="width:50%; border-radius:20px solid #ffff;" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<script type="text/javascript">

</script>