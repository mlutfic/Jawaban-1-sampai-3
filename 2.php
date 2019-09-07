<?php  
$pass="pasoowdT8";
$uppercase = preg_match('@[A-Z]@', $pass);
$lowercase = preg_match('@[a-z]@', $pass);
$number    = preg_match('@[0-9]@', $pass);

if(!$uppercase || !$lowercase || !$number || strlen($pass)<8){
    echo "password harus lebih dari 8 karakter, mengandung huruf BESAR, huruf kecil dan angka";
}else{
    echo "password memenuhi kriteria";
}//https://pusathosting.com/kb/php:codesnip:regex-cek-string-password
?>