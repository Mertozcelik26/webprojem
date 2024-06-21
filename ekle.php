<?php
include ("codes/baglan.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetim - Ekle</title>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
</head>

<body>
<?php
    switch ($_GET["tablo"]) {
        case 'urunler':
            echo "<a href='yonetim.php#urunler'>Ürünler Yönetim</a>";
            $tablo = $_GET['tablo'];
            $ad = $_POST["ad"];
            $model = $_POST["model"];
            $sql = "insert into $tablo values(NULL,'$ad','$model', NULL)";
            $sonuc = mysqli_query($bag, $sql);
            if ($sonuc) {
                echo "<div class='alert alert-success' role='alert'>
                Ürün eklendi!
              </div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>
                Ürün eklenemedi!
                </div>";
            }
            break;
        
            case 'ekip':
                echo "<a href='yonetim.php#ekip'>Çalışma Ekibimiz</a>";
                $tablo = $_GET['tablo'];
                $ad = $_POST["ad"];
                $soyad = $_POST["soyad"];
                $sql = "insert into $tablo values(NULL,'$ad','$soyad', NULL)";
                $sonuc = mysqli_query($bag, $sql);
                if ($sonuc) {
                    echo "<div class='alert alert-success' role='alert'>
                    Personel eklendi!
                  </div>";
                } else {
                    echo "<div class='alert alert-danger' role='alert'>
                    Personel eklenemedi!
                    </div>";
                }
                break;

                case 'servislerimiz':
                    echo "<a href='yonetim.php#servislerimiz'>Servislerimiz</a>";
                    $tablo = $_GET['tablo'];
                    $baslik = $_POST["baslik"];
                    $tanim = $_POST["tanim"];
                    $sql = "insert into $tablo values(NULL,'$baslik','$tanim', NULL)";
                    $sonuc = mysqli_query($bag, $sql);
                    if ($sonuc) {
                        echo "<div class='alert alert-success' role='alert'>
                        Servis eklendi!
                      </div>";
                    } else {
                        echo "<div class='alert alert-danger' role='alert'>
                        Servis eklenemedi!
                        </div>";
                    }
                    break;
        default:
            break;
    }
    ?>



</body>

</html>