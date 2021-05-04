<?php
switch ($_GET["mp_status"]) {
    case 'success':
        $background = '#58D68D';
        $message = 'Exito';
        break;
    case 'failure':
        $background = '#EC7063';
        $message = 'Error';
        break;
    case 'pending':
        $background = '#F7DC6F';
        $message = 'Pendiente';
        break;
    default:
        $background = '#8ebacd';
        $message = '';
        break;
}
?>

<?php if( isset($_GET["payment_id"]) ) : ?>
    <div style="background: <?= $background ?>; text-align: center;padding: .3em;">
        <h1><?= $message ?></h1>
        <p>
            <b>mp_status:</b> <?php echo $_GET["mp_status"] ?> <br>
            <b>payment_id:</b> <?php echo $_GET["payment_id"] ?> <br>
            <b>collection_id:</b> <?php echo $_GET["collection_id"] ?> <br>
            <b>collection_status:</b> <?php echo $_GET["collection_status"] ?> <br>
            <b>external_reference:</b> <?php echo $_GET["external_reference"] ?> <br>
            <b>payment_type:</b> <?php echo $_GET["payment_type"] ?> <br>
            <b>merchant_order_id:</b> <?php echo $_GET["merchant_order_id"] ?> <br>
            <b>preference_id:</b> <?php echo $_GET["preference_id"] ?> <br>
        </p>
    </div>
    <div style="text-align: center;padding: .3em;">
        <a href="./">Ir a Home</a>
    </div>
<?php endif; ?>