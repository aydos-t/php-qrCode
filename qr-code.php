<?php
require_once 'connection.php';
require_once 'phpqrcode/qrlib.php';

$path = 'images/';
$qrCode = $path.time().".png";
$qrImage = time().".png";

if (isset($_REQUEST['generate-btn'])) {
    $qrText = $_REQUEST['qrtext'];
    $query = mysqli_query($connect,"insert into php-qr-code set qrtext='$qrText', qrimage='$qrImage'");
    if ($query) {
        ?>
        <script>
            alert("Data save successfully");
        </script>
        <?php
    }
}
QRcode :: png($qrText, $qrCode, 'H', 4, 4);
echo "<img src='".$qrCode."'>";
?>