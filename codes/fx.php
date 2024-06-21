<?php

function sorgu($sql, $bag)
{
    $dizi = array();
    $sorgu = mysqli_query($bag, $sql);
    if ($sorgu) {
        while ($row = mysqli_fetch_assoc($sorgu)) { // mysqli_fetch_array($result,$baglanti1)  
            array_push($dizi, $row);
        }
    } else {
        echo "sorgu yapılamadı";
    }

    return $dizi;
}



function bootstrapTablo1($data, $sutunlar)
{
    echo '<table class="table"><thead><tr>';
    foreach ($sutunlar as $deger) {
        echo '<th scope="col">' . $deger . '</th>';
    }
    echo "</tr></thead><tbody>";

    foreach ($data as $satir) {
        echo "<tr>";
        foreach ($sutunlar as $sutun) {
            $deger = $satir[$sutun];
            echo "<td>$deger</td>";
        }
        echo "</tr>";
    }
    echo " </tbody></table>";

}


function bootstrapTablo2($data, $sutunlar,$resim)
{
    echo '<table class="table"><thead><tr>';
    echo '<th scope="col"></th>';
    foreach ($sutunlar as $deger) {
        echo '<th scope="col">' . ucfirst($deger) . '</th>';
    }
    echo "</tr></thead><tbody>";

    foreach ($data as $satir) {
        echo "<tr>";

        $resimDosyasi="assets/img/".$satir[$resim];

        echo "<td width=15%><img src=\"$resimDosyasi\" height='150px' width='150px'></td>";

        foreach ($sutunlar as $sutun) {
            $deger = $satir[$sutun];
            echo "<td>$deger</td>";
        }
        echo "</tr>";
    }
    echo " </tbody></table>";

}
function satirYaz($row)
{
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}

function merhaba()
{
    echo "Merhaba";
}

function merhabaYaz($a)
{
    echo $a;
}

function diziYaz($arr)
{
    echo "<br>";
    foreach ($arr as $a) {
        echo "Merhaba $a <br>";

    }
}

function topla($s, $t)
{
    return $s + $t;
}


