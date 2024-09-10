<?php
if(!function_exists("encrypt"))
{
   function encrypt( $value):string
   {
    $cipher=config("session.encryption_mod");
    $key=config("session.encryption_key");
    $ivlen=openssl_cipher_iv_length($cipher);
    $iv=openssl_random_pseudo_bytes($ivlen);
    $cipher_text_raw=openssl_encrypt($value,$cipher,$key,OPENSSL_RAW_DATA,$iv) ;
    $hmac=hash_hmac("sha256",$cipher_text_raw,$key,true);
    $cipher_text=base64_encode($iv.$hmac.$cipher_text_raw);
     return $cipher_text;
   }
}



if(!function_exists("decrypt"))
{
   function decrypt( $cipher_text):string
   {
    $cipher=config("session.encryption_mod");
    $key=config("session.encryption_key");
    $ivlen=openssl_cipher_iv_length($cipher);

    $convret=base64_decode($cipher_text);
    $iv=substr($convret,0,$ivlen);
    $hmac=substr($convret,$ivlen,32);
    $cipher_text_raw=substr($convret,$ivlen+32);

    $orignal=openssl_decrypt($cipher_text_raw,$cipher,$key,OPENSSL_RAW_DATA,$iv);
    $calchmac=hash_hmac("sha256",$cipher_text_raw,$key,true);
    if(hash_equals($hmac,$calchmac))
    {
        return $orignal;
    }
    return '';
}
}