<?php
$dt = json_decode($data);

?>

<!DOCTYPE html>
<html>

<head>
    <!-- <style>
        .floating {
            position: fixed;
            width: 20px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #fff;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .fa-cart-shopping {
            margin-top: 16px;
        }
    </style> -->
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="<?= $dt->keywords; ?>" />
    <meta name="description" content="<?= $dt->description; ?>" />
    <meta name="author" content="<?= $dt->author ?>" />
    <meta name="canonical" content="<?= $dt->author ?>"" />
    <link rel=" shortcut icon" href="<?= base_url('assets/guard/') ?>images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title><?= $dt->title ?></title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/guard/') ?>css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/guard/') ?>css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="<?= base_url('assets/guard/') ?>css/responsive.css" rel="stylesheet" />
    <link href="<?= base_url('assets/font/') ?>css/all.css" rel="stylesheet" />
    <link href="<?= base_url('assets/font/') ?>css/all.css" rel="stylesheet" />
    <link href="<?= base_url('assets/font/') ?>css/all.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/font/') ?>css/brands.css" rel="stylesheet" />
    <link href="<?= base_url('assets/font/') ?>css/brands.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/font/') ?>css/fontawesome.css" rel="stylesheet" />
    <link href="<?= base_url('assets/font/') ?>css/fontawesome.css" rel="stylesheet" />
    <link href="<?= base_url('assets/font/') ?>css/fontawesome.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/font/') ?>css/regular.css" rel="stylesheet" />
    <link href="<?= base_url('assets/font/') ?>css/regular.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/font/') ?>css/solid.css" rel="stylesheet" />
    <link href="<?= base_url('assets/font/') ?>css/solid.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/font/') ?>css/svg-with-js.css" rel="stylesheet" />
    <link href="<?= base_url('assets/font/') ?>css/svg-with-js.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/font/') ?>css/v4-font-face.css" rel="stylesheet" />
    <link href="<?= base_url('assets/font/') ?>css/v4-font-face.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/font/') ?>css/v4-shims.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('assets/guard/') ?>css/TimeCircles.css" />

</head>

<body>
    <div id="content-mobile">
        <p style='position:fixed;background-color: green;padding: 20px 0;bottom: 30px;text-align: center;width: 20%;margin-left:0px;z-index:99999;'><a href='<?= $dt->whatsappme ?>' style='color:white;' target='_blank'> <i class="fa-solid fa-cart-shopping"></i> Pesan Disini
            </a></p>
    </div>
    <?= $contents ?>




    <!-- footer section -->

    <footer class="container-fluid footer_section" style="margin-bottom: 100px;">
        <p>
            &copy; <span id="currentYear"></span> All Rights Reserved. Design by
            <a href="https://wa.link/jegsbj">A. Saifur</a> Distribution by
            <a href="https://wa.link/huiiqu">Produk</a>
        </p>
    </footer>




    <!-- footer section -->

    <script src="<?= base_url('assets/guard/') ?>js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url('assets/guard/') ?>js/bootstrap.js"></script>
    <script src="<?= base_url('assets/guard/') ?>js/custom.js"></script>
    <script src="<?= base_url('assets/font/') ?>js/all.js"></script>
    <script src="<?= base_url('assets/font/') ?>js/all.min.js"></script>
    <script src="<?= base_url('assets/font/') ?>js/brands.js"></script>
    <script src="<?= base_url('assets/font/') ?>js/brands.min.js"></script>
    <script src="<?= base_url('assets/font/') ?>js/conflict-detection.js"></script>
    <script src="<?= base_url('assets/font/') ?>js/conflict-detection.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/guard/') ?>js/TimeCircles.js"></script>
    <script type="text/javascript">
        $("#DateCountdown").TimeCircles();
        $("#CountDownTimer").TimeCircles({
            time: {
                Days: {
                    show: false
                },
                Hours: {
                    show: true
                }
            }
        });
        $("#PageOpenTimer").TimeCircles();

        var updateTime = function() {
            var date = $("#date").val();
            var time = $("#time").val();
            var datetime = date + ' ' + time + ':00';
            $("#DateCountdown").data('date', datetime).TimeCircles().start();
        }
        $("#date").change(updateTime).keyup(updateTime);
        $("#time").change(updateTime).keyup(updateTime);

        // Start and stop are methods applied on the public TimeCircles instance
        $(".startTimer").click(function() {
            $("#CountDownTimer").TimeCircles().start();
        });
        $(".stopTimer").click(function() {
            $("#CountDownTimer").TimeCircles().stop();
        });

        // Fade in and fade out are examples of how chaining can be done with TimeCircles
        $(".fadeIn").click(function() {
            $("#PageOpenTimer").fadeIn();
        });
        $(".fadeOut").click(function() {
            $("#PageOpenTimer").fadeOut();
        });
    </script>
</body>

</html>