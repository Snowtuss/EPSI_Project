<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Hash{
    public $ciphering;
  
// Use OpenSSl encryption method
    public $iv_length;
    public $encryption_iv   ;
    public function __construct() {
        $ciphering = "AES-128-CTR";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $this->encryption_iv = '1234567891011121';
    }
public function hashFunc($string){
$ciphering = "AES-128-CTR";
$options = 0;
  
// Use random_bytes() function which gives
// randomly 16 digit values

  
// Alternatively, we can use any 16 digit
// characters or numeric for iv
$encryption_key = "somehorshitgoingonhereson";
  
// Encryption of string process starts
$encryption = openssl_encrypt($string, $ciphering,
$encryption_key, $options, $this->encryption_iv);

  
// Display the encrypted string
return $encryption;

}

public function unhashFunc($string){
 $ciphering = "AES-128-CTR";
  
// Use OpenSSl encryption method
//$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
// Decryption of string process starts
// Used random_bytes() which gives randomly
// 16 digit values
//$decryption_iv = random_bytes($iv_length);
  
// Store the decryption key
$decryption_key = "somehorshitgoingonhereson";
  
// Descrypt the string
$decryption = openssl_decrypt ($string, $ciphering,
            $decryption_key, $options, $this->encryption_iv);
  
// Display the decrypted string
return $decryption;
  
}

}

//$resulthash = $hashTest->hashFunc("hello");
//echo $resulthash;

//$resultunhash = $hashTest->unhashFunc($resulthash);
//echo $resultunhash;

?>