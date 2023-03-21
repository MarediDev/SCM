<?php

 include_once "../Model/UsersSignIn.php";

class UsersSigningIn extends UsersSignIn

{
  private $IDno;
  private $password;

  public function __construct($IDno,$password)
  {
    $this->IDno = $IDno;
    $this->password = $password;
  }

  public function SigningIn()
  {
    $this->SignIn($this->IDno,$this->password);
  }


}
