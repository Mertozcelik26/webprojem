<?php
include ("codes/baglan.php");
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetim - Sil</title>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css" />
</head>

<body>
    <?php
    switch ($_GET["tablo"]) {
        case 'urunler':
            echo "<a href='yonetim.php#urunler'>Ürünler Yönetim</a>";
            $tablo = $_GET['tablo'];
            $id = $_GET["id"];
            $sql = "DELETE FROM $tablo WHERE `id` = $id";
        
            $sonuc = mysqli_query($bag, $sql);
            if ($sonuc) {
                echo "<div class='alert alert-success' role='alert'>
                $id numaralı ürün silindi!
              </div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>
                $id numaralı ürün silinemedi!
                </div>";
            }
            break;

            case 'ekip':
                echo "<a href='yonetim.php#ekip'>Ekip Yönetim</a>";
                $tablo = $_GET['tablo'];
                $id = $_GET["id"];
                $sql = "DELETE FROM $tablo WHERE `id` = $id";
            
                $sonuc = mysqli_query($bag, $sql);
                if ($sonuc) {
                    echo "<div class='alert alert-success' role='alert'>
                    $id numaralı personel silindi!
                  </div>";
                } else {
                    echo "<div class='alert alert-danger' role='alert'>
                    $id numaralı personel silinemedi!
                    </div>";
                }
                break;

                case 'servislerimiz':
                    echo "<a href='yonetim.php#servislerimiz'>Servislerimiz Yönetim</a>";
                    $tablo = $_GET['tablo'];
                    $id = $_GET["id"];
                    $sql = "DELETE FROM $tablo WHERE `id` = $id";
                
                    $sonuc = mysqli_query($bag, $sql);
                    if ($sonuc) {
                        echo "<div class='alert alert-success' role='alert'>
                        $id numaralı ürün silindi!
                      </div>";
                    } else {
                        echo "<div class='alert alert-danger' role='alert'>
                        $id numaralı ürün silinemedi!
                        </div>";
                    }
                    break;
        
        default:
            break;
    }
    ?>

</body>

</html>