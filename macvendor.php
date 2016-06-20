#!/usr/bin/php
<?php
/*
  [+] Author: Adriano Freitas
  [+] GitHub: https://github.com/adrianofreitasaf
  [+] License: GPLv3
  [+] Version: 0.1

  [!] Dependencies: sudo apt-get install curl php5 php5-curl
  [!] Execute permission: chmod +x macvendor.php

  [!] how to use: php macvendor.php <MAC_ADDRESS>

  [+] Alias: echo "alias macvendor='php /path/to/dir/macvendor.php'" | tee -a ~/.bash_aliases
*/

  if(!empty($argv[1]) ){
    $mac_address = $argv[1];

    if (isMAC($mac_address)){
      echo "MAC   : " . $mac_address . "\n";
      getVendor($mac_address);
    }else{
      echo "Invalid MAC address!!\n";
    }


  }else{
    echo "[!] HOW TO USE\n[+] php macvendor.php <MAC_ADDRESS>\n";
  }

  function isMAC($mac_address){
    if(!ereg("^([a-f0-9]{2}\:){5}([a-f0-9]{2}) ?$", $mac_address) )
      return false;
    else
      return true;
  }

  function getVendor($mac_address){
    $url = "http://api.macvendors.com/";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "mac=$mac_address");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    if($response) {
      echo "VENDOR: $response\n";
    } else {
      echo "NOT FOUND\n";
    }
  }
  echo "\n";

?>
