<?php
class encrypt_tbl_primary_key{
    private $key;
    function __construct() {
        $this->key='fRanK_w$it_2o1E' ;
    }
    function get_encrypted_code($plain_text){
        return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($this->key), $plain_text, MCRYPT_MODE_CBC, md5(md5($this->key))));
    }
    function get_plain_text($encrypted){
       return rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($this->key), base64_decode($encrypted), MCRYPT_MODE_CBC, md5(md5($this->key))), "\0");
    }
}