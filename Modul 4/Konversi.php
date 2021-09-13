
<?php
if (isset ($_POST["submit"])){
    $celcius=$_POST['celcius'];
    $konversi=$_POST['konversi'];

if ($konversi == "reamur"){
    $hasil =(4/5)*$celcius;
    echo "Hasil konversi ke reamur : $hasil";
}else if ($konversi =="fahrenheit"){
    $hasil=(9/5)*$celcius+32;
    echo "Hasil konversi ke fahrenheit : $hasil";
}else if ($konversi == "kelvin"){
    $hasil=$celcius+273;
    echo "Hasil konversi ke kelvin : $hasil";
}else{
    echo "Pilih dulu konversinya";
}
}
?>