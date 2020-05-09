<?php


   echo "
   _  _         _                         
   | || |__ _ __| |_              Author : MarsHall       
   | __ / _` (_-< ' \             Team   : Xai Syndicate     
   |_||_\__,_/__/_||_|         _  Github : https://github.com/X-MarsHall       
   / __|___ _ _  ___ _ _ __ _| |_ ___ _ _ 
   | (_ / -_) ' \/ -_) '_/ _` |  _/ _ \ '_|
   \___\___|_||_\___|_| \__,_|\__\___/_|  
   
   ";
   echo "Input : ";
   $var = trim(fgets(STDIN));
   echo "\n";

   $encrypt = sha1($var);
   echo "[+] sha1   ==> " . $encrypt . "\n";
   
   $enc = md5($var);
   echo "[+] md5    ==> " . $enc. "\n";
   
   $en  = base64_encode($var);
   echo "[+] base6  ==> " . $en . "\n";
   
   $bcr = password_hash($var, PASSWORD_DEFAULT);
   echo "[+] bcrypt ==> " . $bcr . "\n";
   
   $sh5 = hash('sha512', $var);
   echo "[+] sha512 ==> " . $sh5 . "\n";
   
   $sh2 = hash('sha256', $var);
   echo "[+] sha256 ==> " . $sh2 . "\n";
   
   $sh3 = hash('sha384', $var);
   echo "[+] sha384 ==> " . $sh3 . "\n";
   
   $sh4 = hash('sha224', $var);
   echo "[+] sha224 ==> " . $sh4 . "\n";

?>