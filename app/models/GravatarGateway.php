namespace GravatarGateway;

class Gravatar {

  public function grab($email)
  {
    $email = $email;
    $email = trim($email);
    $email = strtolower($email);
    $email_hash = md5($email);

    return $email_hash;
  }

}
