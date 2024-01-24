<?php


  /* $simple_string = "123";
  echo "Original String: " . $simple_string . "\n";


  $encryption = encryption_function($simple_string);
  echo "Encrypted String: " . $encryption . "\n";




  echo "Decrypted String: " . decryption_function($encryption); */


  function encryption_function($string_value)
  {
	 $output = false;
	 $ciphering = "AES-256-CBC";
     $encryption_iv =  substr(hash('sha256', 'criest'), 0, 8);
     $encryption_key = "sjworld123";
     $encryption = openssl_encrypt($string_value, $ciphering, $encryption_key, 0, $encryption_iv);;
	 $output = base64_encode($encryption);
     return  $output;
  }

  function decryption_function($string_value)
  {

	 $ciphering = "AES-256-CBC";
     $decryption_iv =  substr(hash('sha256', 'criest'), 0, 8);
     $decryption_key ="sjworld123";
     $decryption = openssl_decrypt(base64_decode($string_value), $ciphering,$decryption_key, 0, $decryption_iv);
	 return  $decryption;
  }

  ?>