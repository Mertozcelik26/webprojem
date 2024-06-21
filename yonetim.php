
<?php
include("codes/baglan.php");
include("codes/fx.php");
        $sql = "SELECT * FROM urunler";
        $urundata = sorgu($sql, $bag);
        $sql = "SELECT * FROM ekip";
        $ekipdata = sorgu($sql, $bag);
        $sql = "SELECT * FROM servislerimiz";
        $servisdata = sorgu($sql, $bag);

        

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetim - Ürünler</title>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css" />
</head>
<body>
    <div class="container mt-4">
    <div class="card mb-4" id="urunler" style="width: 100%;">
  <div class="card-body">
    <h5 class="card-title">Ürünler</h5>
<form action="ekle.php?tablo=urunler" method="POST">
  <div class="form-group">
    <label for="nameInput">AD</label>
    <input type="text" class="form-control" name="ad" id="nameInput"placeholder="Ad">
  </div>
  <div class="form-group">
    <label for="modelInput">Model</label>
    <input type="text" class="form-control" name="model" id="modelInput" placeholder="Model">
  </div>
  <button type="submit" class="btn btn-primary mt-2">Ekle</button>
</form>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ad</th>
                <th>Model</th>
                <th></th>
            </tr>
        </thead>
        <tbody><?php
        foreach($urundata as $urun){
            ?>
        <tr>
            <td><?= $urun["id"] ?></td>
            <td><?= $urun["ad"] ?></td>
            <td><?= $urun["model"] ?></td>
            <td><a href="sil.php?tablo=urunler&id=<?= $urun["id"] ?>" class="btn btn-danger"> Sil </a> </td>
        </tr>

        </tbody>
        <?php }
          ?>
    </table>
        </div>
        </div>
        <div class="card mb-4" id="ekip" style="width: 100%;">
  <div class="card-body">
    <h5 class="card-title">Ekip</h5>
<form action="ekle.php?tablo=ekip" method="POST">
  <div class="form-group">
    <label for="nameInput">AD</label>
    <input type="text" class="form-control" name="ad" id="nameInput"placeholder="Ad">
  </div>
  <div class="form-group">
    <label for="modelInput">Model</label>
    <input type="text" class="form-control" name="soyad" id="modelInput" placeholder="Model">
  </div>
  <button type="submit" class="btn btn-primary">Ekle</button>
</form>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ad</th>
                <th>Soyad</th>
                <th></th>
            </tr>
        </thead>
        <tbody><?php
        foreach($ekipdata as $ekip){
            ?>
        <tr>
            <td><?= $ekip["id"] ?></td>
            <td><?= $ekip["ad"] ?></td>
            <td><?= $ekip["soyad"] ?></td>
            <td><a href="sil.php?tablo=ekip&id=<?= $ekip["id"] ?>" class="btn btn-danger"> Sil </a> </td>
        </tr>

        </tbody>
        <?php }
          ?>
    </table>
  </div>
  </div>

  <div class="card mb-4" id="servislerimiz" style="width: 100%;">
  <div class="card-body">
    <h5 class="card-title">Servis</h5>
<form action="ekle.php?tablo=servislerimiz" method="POST">
  <div class="form-group">
    <label for="nameInput">AD</label>
    <input type="text" class="form-control" name="baslik" id="nameInput"placeholder="Ad">
  </div>
  <div class="form-group">
    <label for="modelInput">Model</label>
    <input type="text" class="form-control" name="tanim" id="modelInput" placeholder="Model">
  </div>
  <button type="submit" class="btn btn-primary">Ekle</button>
</form>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ad</th>
                <th>Model</th>
                <th></th>
            </tr>
        </thead>
        <tbody><?php
        foreach($servisdata as $servis){
            ?>
        <tr>
            <td><?= $servis["id"] ?></td>
            <td><?= $servis["baslik"] ?></td>
            <td><?= $servis["tanim"] ?></td>
            <td><a href="sil.php?tablo=servislerimiz&id=<?= $servis["id"] ?>" class="btn btn-danger"> Sil </a> </td>
        </tr>

        </tbody>
        <?php }
          ?>
    </table>
  </div>
  </div>
    

</body>
</html>