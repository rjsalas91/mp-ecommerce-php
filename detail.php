<?php

// SDK de Mercado Pago
require __DIR__ . '/vendor/autoload.php';

date_default_timezone_set('America/Lima');

// $domain = 'http://mercadopago.test/';
$domain = 'https://rjsalas91-mp-commerce-php.herokuapp.com/';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-8208253118659647-112521-dd670f3fd6aa9147df51117701a2082e-677408439');
MercadoPago\SDK::setIntegratorId('dev_2e4ad5dd362f11eb809d0242ac130004');

$payer               = new MercadoPago\Payer();
$payer->name         = 'Lalo';
$payer->surname      = 'Landa';
$payer->email        = 'test_user_46542185@testuser.com';
$payer->phone        = [
    'area_code' => '52',
    'number'    => '5549737300'
];
$payer->identification = [
    'type'   => 'DNI',
    'number' => '22334445'
];
$payer->address = [
    'street_name'   => 'Insurgentes Sur',
    'street_number' => 1602,
    'zip_code'      => '03940'
];

// Crea un ítem en la preferencia
$item              = new MercadoPago\Item();
$item->id          = '1234';
$item->title       = $_POST['title'];
$item->description = 'Dispositivo móvil de Tienda e-commerce';
$item->picture_url = $domain . str_replace('./', '', $_POST['img']);
$item->quantity    = $_POST['unit'];
$item->unit_price  = $_POST['price'];
$item->currency_id = 'PEN';

// Crea un objeto de preferencia
$preference                  = new MercadoPago\Preference();
$preference->payment_methods = [
    'excluded_payment_methods' => [
        ['id' => 'diners']
    ],
    'excluded_payment_types' => [
        ['id' => 'atm']
    ],
    'installments' => 6
];
$preference->external_reference = 'jnt.torres.jt@gmail.com';
$preference->back_urls          = [
    'success' => $domain . 'response.php?mp_status=success',
    'failure' => $domain . 'response.php?mp_status=failure',
    'pending' => $domain . 'response.php?mp_status=pending'
];
$preference->auto_return      = 'all';
$preference->notification_url = $domain . 'notification.php?source_news=webhooks';
$preference->items            = [$item];
$preference->payer            = $payer;
$preference->save();

?>

<!DOCTYPE html>
<html class="supports-animation supports-columns svg no-touch no-ie no-oldie no-ios supports-backdrop-filter as-mouseuser" lang="es-PE">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=1024">
    <title>Tienda RjSalas91</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="format-detection" content="telephone=no">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./assets/category-landing.css" media="screen, print">

    <link rel="stylesheet" href="./assets/category.css" media="screen, print">

    <link rel="stylesheet" href="./assets/merch-tools.css" media="screen, print">

    <link rel="stylesheet" href="./assets/style.css">

</head>



<body class="as-theme-light-heroimage">

    <div class="stack">

        <div class="as-search-wrapper" role="main">
            <div class="as-navtuck-wrapper">
                <div class="as-l-fullwidth  as-navtuck" data-events="event52">
                    <div>
                        <div class="pd-billboard pd-category-header">
                            <div class="pd-l-plate-scale">
                                <div class="pd-billboard-background">
                                    <img src="./assets/music-audio-alp-201709" alt="" width="1440" height="320" data-scale-params-2="wid=2880&amp;hei=640&amp;fmt=jpeg&amp;qlt=95&amp;op_usm=0.5,0.5&amp;.v=1503948581306" class="pd-billboard-hero ir">
                                </div>
                                <div class="pd-billboard-info">
                                    <h1 class="pd-billboard-header pd-util-compact-small-18">Tienda RjSalas91</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="as-search-results as-filter-open as-category-landing as-desktop" id="as-search-results">

                <div id="accessories-tab" class="as-accessories-details">
                    <div class="as-accessories" id="as-accessories">
                        <div class="as-accessories-header">
                            <div class="as-search-results-count">
                                <span class="as-search-results-value"></span>
                            </div>
                        </div>
                        <div class="as-searchnav-placeholder" style="height: 77px;">
                            <div class="row as-search-navbar" id="as-search-navbar" style="width: auto;">
                                <div class="as-accessories-filter-tile column large-6 small-3">

                                    <button class="as-filter-button" aria-expanded="true" aria-controls="as-search-filters" type="button">
                                        <h2 class=" as-filter-button-text">
                                            Smartphones
                                        </h2>
                                    </button>


                                </div>

                            </div>
                        </div>
                        <div class="as-accessories-results  as-search-desktop">
                            <div class="width:60%">
                                <div class="as-producttile-tilehero with-paddlenav " style="float:left;">
                                    <div class="as-dummy-container as-dummy-img">

                                        <img src="./assets/wireless-headphones" class="ir ir item-image as-producttile-image  " style="max-width: 70%;max-height: 70%;" alt="" width="445" height="445">
                                    </div>
                                    <div class="images mini-gallery gal5 ">


                                        <div class="as-isdesktop with-paddlenav with-paddlenav-onhover">
                                            <div class="clearfix image-list xs-no-js as-util-relatedlink relatedlink" data-relatedlink="6|Powerbeats3 Wireless Earphones - Neighborhood Collection - Brick Red|MPXP2">
                                                <div class="as-tilegallery-element as-image-selected">
                                                    <div class=""></div>
                                                    <img src="./assets/003.jpg" class="ir ir item-image as-producttile-image" alt="" width="445" height="445" style="content:-webkit-image-set(url(<?php echo $_POST['img'] ?>) 2x);">
                                                </div>

                                            </div>


                                        </div>



                                    </div>

                                </div>
                                <div class="as-producttile-info" style="float:left;min-height: 168px;">
                                    <div class="as-producttile-titlepricewraper" style="min-height: 128px;">
                                        <div class="as-producttile-title">
                                            <h3 class="as-producttile-name">
                                                <p class="as-producttile-tilelink">
                                                    <span data-ase-truncate="2"><?php echo $_POST['title'] ?></span>
                                                </p>

                                            </h3>
                                        </div>
                                        <h3>
                                            Precio: S/. <?php echo number_format($_POST['price']) ?>
                                        </h3>
                                        <h3>
                                            Cantidad: <?php echo $_POST['unit'] ?>
                                        </h3>
                                        <div class="mt-2">
                                            <a href="<?= $preference->init_point ?>" class="mercadopago-button">Pagar la compra</a>
                                        </div>
                                        <div class="mt-2">
                                            <a href="./" class="btn-back">Regresar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div role="alert" class="as-loader-text ally" aria-live="assertive"></div>
        <div class="as-footnotes">
            <div class="as-footnotes-content">
                <div class="as-footnotes-sosumi">
                    Todos los derechos reservados Tienda RjSalas91 | <?= date('Y') ?>
                </div>
            </div>
        </div>

    </div>

    <script src="https://www.mercadopago.com/v2/security.js" view="item"></script>
</body>

</html>