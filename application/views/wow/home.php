<?php
$dt = json_decode($data);

?>
<div class="overlay" id="overlay" onclick="closeNav()"></div>

<section class="head index-part-1">
    <div class="head-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">

                </div>
                <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6 text-right">
                    <div id="mySidenav" class="sidenav text-center">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br>
                        <a href="<?= base_url('') ?>">Home</a>
                        <hr>
                        <a href="#head">Generic</a>
                        <hr>
                        <a href="#contact">Kontak</a>
                    </div>
                    <div class="main" id="main">
                        <a href="#" onclick="openNav()">MENU &#9776;</a>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <div class="wow">
        <div class="container">
            <div class="row">
                <div class="wow-logo">
                    <img class="img-responsive img-logo" src="<?= base_url('assets/guard/images/') . $dt->images1; ?>">
                </div>
                <div class="font-1 helmet text-center">
                    <?= $dt->description; ?>
                </div>
                <div class="wow-btn text-center">
                    <a class="btn btn-danger wow-button" href="<?= $dt->whatsappme ?>">Pesan Disini</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="index-part-2">
    <div class="container">

        <div class="row">
            <div class="text-center">
                <h2>Spesifikasi</h2>
            </div>
            <hr class="hr-mid">
            <div class="sub-text text-center">
                <p class="font-1">
                    <?= $description ?>
                </p>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-12 col-lg-6 col-sm-6 col-md-6 col-block">
                <div class="block text-center block-first">
                    <div class="icon">
                        <i class="fa fa-diamond fa-2x"></i>
                    </div>
                    <h4>Supreme comfort</h4>
                    <p class="font-2">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et.</p>
                </div>
            </div>
            <div class="col-xs-12 col-lg-6 col-sm-6 col-md-6 col-block">
                <div class="block text-center block-second">
                    <div class="icon">
                        <i class="fa fa-camera fa-2x"></i>
                    </div>
                    <h4>Immersive experince</h4>
                    <p class="font-2">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-lg-6 col-sm-6 col-md-6 col-block">
                <div class="block text-center block-third">
                    <div class="icon">
                        <i class="fa fa-eye fa-2x"></i>
                    </div>
                    <h4>complete focus</h4>
                    <p class="font-2">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et.</p>
                </div>
            </div>
            <div class="col-xs-12 col-lg-6 col-sm-6 col-md-6 col-block">
                <div class="block text-center block-last">
                    <div class="icon">
                        <i class="fa fa-sliders fa-2x"></i>
                    </div>
                    <h4>Convenient control</h4>
                    <p class="font-2">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="index-part-3">
    <div class="container">
        <div class="row why-div">
            <div class="text-center">
                <h2>Why wow</h2>
            </div>
            <hr class="hr-mid">
            <div class="sub-text text-center">
                <p class="font-1">
                    Sed varius suspendisse dictum leo ipsum amet pellentesque
                    fusce ac hendrerit consectetur tempor lorem ipsum
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-9 col-sm-12 col-md-9 col-xs-12">
                <div class="holder-para">
                    <h3>Comfortable stap holder</h3>
                    <hr class="hr-short">
                    <p class="font-2">
                        The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed
                        is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother’s keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-xs-12 col-sm-12 col-md-3">
                <div class="holder-img">
                    <img class="round-img img-responsive center-block" src="<?= base_url('assets/wow/assets/') ?>/img/2.jpg">
                </div>
            </div>
        </div>

        <hr class="line-full">

        <div class="row">
            <div class="col-lg-9 col-xs-12 col-sm-12 col-md-9 col-md-push-3">
                <div class="holder-para">
                    <h3>Tracking with controler</h3>
                    <hr class="hr-short">
                    <p class="font-2">
                        The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed
                        is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother’s keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-xs-12 col-sm-12 col-md-3 col-md-pull-9">
                <div class="holder-img">
                    <img class="round-img img-responsive center-block" src="<?= base_url('assets/wow/assets/') ?>/img/3.jpg">
                </div>
            </div>
        </div>

        <hr class="line-full">

        <div class="row">
            <div class="col-lg-9 col-xs-12 col-sm-12 col-md-9">
                <div class="holder-para">
                    <h3>Foam cushing</h3>
                    <hr class="hr-short">
                    <p class="font-2">
                        The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed
                        is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother’s keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-xs-12 col-sm-12 col-md-3">
                <div class="holder-img">
                    <img class="round-img img-responsive center-block" src="<?= base_url('assets/wow/assets/') ?>/img/2.jpg">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="index-part-4">
    <div class="container">

        <div class="row">
            <div class="text-center">
                <h2>Step in wow</h2>
            </div>
            <hr class="hr-mid">
            <div class="sub-text text-center">
                <p class="font-1">
                    Sed varius suspendisse dictum leo ipsum amet pellentesque
                    fusce ac hendrerit consectetur tempor lorem ipsum
                </p>
            </div>
        </div>

        <div class="row text-center">
            <a class="btn btn-default wow-button" href="#">BUY WOW NOW</a>
        </div>
    </div>
</section>

<section class="social">
    <ul>
        <li><a href="#" class="fa fa-pinterest fa-2x" aria-hidden="true"></a></li>
        <li><a href="#" class="fa fa-twitter fa-2x" aria-hidden="true"></a></li>
        <li><a href="#" class="fa fa-linkedin fa-2x" aria-hidden="true"></a></li>
        <li><a href="#" class="fa fa-stumbleupon fa-2x" aria-hidden="true"></a></li>
    </ul>
</section>

<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                <div class="footer-p1">
                    <p class="font-2">Copy right 2016 by wow technology</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <img class="img-responsive foot-img" src="<?= base_url('assets/wow/assets/') ?>/img/footer-logo.png">
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                <div class="footer-p2">
                    <p class="font-2">Made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://themewagon.com/themes/" target="_blank">themewagon</a></p>
                </div>
            </div>
        </div>
    </div>
</section>