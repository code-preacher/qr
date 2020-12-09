<?php    
$con=new mysqli("localhost","root","","qr_test");

    //set it to writable location, a place for img generated PNG files
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = 'img/';

    include "qrlib.php";    

    $matrixPointSize = min(max(10, 1), 10);

    $errorCorrectionLevel='H';
    $data=str_shuffle("ADECSVGJNLOKPTR");
    $qrimgname=rand(1234,0000);

$filename = $PNG_TEMP_DIR.$qrimgname.'.png';
QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);   

$qrimgnamedb=$qrimgname.'.png';  
mysqli_query($con,"insert into tt(img) values('$qrimgnamedb')");

echo "<h1>QRcode generated</h1><hr>"."<img src='img/$qrimgnamedb'><h4>Image is saved in img folder</h4>";
?>