<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikasi {

  public function url_encode($data)
  {   
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');   
  }   
     
  public function url_decode($data)
  {   
     return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));   
  }


  public function timetok($m) 
  {   
  $waktu = date('Y-m-d H:i:s');
  $date = date_create($waktu);
  date_add($date, date_interval_create_from_date_string($m.'minutes'));
  return date_format($date, 'Y-m-d H:i:s');
  }

  public function lockhash($data)
  {
    return password_hash($data, PASSWORD_DEFAULT);
  }

  //open database
  public function openhash($data,$hash)
  {
    return password_verify($data,$hash);
  }

}