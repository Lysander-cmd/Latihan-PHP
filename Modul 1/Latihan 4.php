<?php
   $nama = "Yafiq";
   $TTL = "11 Januari 2004"
   $Hobi = "Listening"
   function tampil_nama() {
       global $nama;
       echo "Nama Saya : ".$nama;
}
   function tampil_TTL(){
      global $TTL;
      echo "TTL saya : ".$TTL;
   }
   function tampil_Hobi(){
      global $Hobi;
      echo "TTL saya : ".$Hobi;
   }
   tampil_nama();
   tampil_TTL();
   tampil_Hobi();
?>