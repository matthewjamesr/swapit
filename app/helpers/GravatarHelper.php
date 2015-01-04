<?php

class GravatarHelper {

  public static function get($email)
  {
    $email = $email;
    $email = trim($email);
    $email = strtolower($email);
    $email = md5($email);

    return $email;
  }

}

?>
