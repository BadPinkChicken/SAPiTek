<?php
  /*
  ** SAPiTek
  ** Salnik Api ePiTech
  ** BadPinkChicken
  */

require_once("Epicon.php");

class Request
{
  public $Epicon;
  public $arg;
  public $ch;
  public $url;
  public $req;

  function __construct($Epicon, $req, $arg = NULL)
  {
    $this->Epicon = $Epicon;
    $this->arg = $arg;
    $this->req = $req;
    $this->url = "https://intra.epitech.eu";
    $this->ch = curl_init();
  }

  function __destruct()
  {
    curl_close($this->ch);
  }

  function  setReq($req)
  {
    $this->req = $req;
  }

  function  connect()
  {
    curl_setopt($this->ch, CURLOPT_URL, $this->url);
    curl_setopt($this->ch, CURLOPT_POSTFIELDS, "login=".$this->Epicon->login."&password=".$this->Epicon->password);
    curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
    $content = curl_exec($this->ch);
    return $content;
  }

  function  isBoard($req)
  {
    $poss = array("projets", "modules", "notes", "susies", "activites", "stages", "tickets");
    if (in_array($req, $poss))
      return True;
    return False;
  }

  function isFirstPage($req)
  {
    $poss = array("history", "infos", "current" );
    if (in_array($req, $poss))
      return True;
    return False;
  }

  function isNotif($req)
  {
    $poss = array("coming", "message", "alert" );
    if (in_array($req, $poss))
      return True;
    return False;
  }

  function  getResult($format = "/?format=json")  // To clean & cut
  {
    $board = 0;
    $local_url = $this->url.$format;
    if ($this->isBoard($this->req))
      $board = 1;
    if ($this->isNotif($this->req))
      $local_url = $this->url."/user/notification/".$this->req."/?format=json";
    if ($this->req == "user")
      $local_url = $this->url."/user/".implode("/", $this->arg).$format;

     echo $local_url;

    curl_setopt($this->ch, CURLOPT_URL, $local_url);
    curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($this->ch, CURLOPT_FOLLOWLOCATION, true);
    $content = curl_exec($this->ch);

    if ($board == 1 && strstr($format, "json"))
    {
      $content = json_decode($content,  true);
      return $content["board"][$this->req];
    }
    else if ($this->isFirstPage($this->req))
    {
      $content = json_decode($content,  true);
      return $content[$this->req];
    }
    if ($this->isNotif($this->req) || $this->req == "user")
        $content = json_decode($content,  true);

    return $content;
  }

}
?>
