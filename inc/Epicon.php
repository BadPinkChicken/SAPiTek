<?php
  /*
  ** SAPiTek
  ** Salnik Api ePiTech
  ** BadPinkChicken
  */

  class EpiCon // Connection
  {
    public $login;
    public $password;
    public $remember;

    function __construct($login, $pass, $remember = 0)
    {
      $this->login = $login;
      $this->password = $pass;
      $this->remember = $remember;
    }
  }

?>
