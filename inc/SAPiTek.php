<?php
  /*
  ** SAPiTek
  ** Salnik Api ePiTech
  ** BadPinkChicken
  */

  require_once("Request.php");

  class SapiTek
  {
    public $EpiCon;
    public $Res;
    public $request;

    function __construct($login, $password, $remember = 0)
    {
      $this->EpiCon = new EpiCon($login, $password, $remember);
      $this->request = new Request($this->EpiCon, NULL);
      $this->request->connect();
    }

    function getElem($elem, $arg = 0)
    {
      $this->request->setReq($elem);
      $this->request->arg = $arg;
      $this->Res = $this->request->getResult();
      return $this->Res;
    }

    function getModules()   {
      return $this->getElem("modules");
    }

    function getProjets()   {
      return $this->getElem("projets");
    }

    function getNotes()   {
      return $this->getElem("notes");
    }

    function getSusies()    {
      return $this->getElem("susies");
    }

    function getActivites()   {
      return $this->getElem("activites");
    }

    function getStages()   {
      return $this->getElem("stages");
    }

    function getTickets()   {
      return $this->getElem("tickets");
    }

    function getHistory() {
      return $this->getElem("history");
    }

    function getInfos() {
      return $this->getElem("infos");
    }

    function getCurrent() {
      return $this->getElem("current");
    }

    function getRDV() {
      return $this->getElem("coming");
    }

    function getMessage() {
      return $this->getElem("message");
    }

    function getAlert() {
      return $this->getElem("alert");
    }
    
    function getPlanning() {
      return $this->getElem("planning");
    }

    function getUserInfos($login){
      $login = array($login);
      return $this->getElem("user", $login);
    }

    function getUserModules($login){
      $login = array($login, "notes");
      return $this->getElem("user", $login);
    }

    function getUserNetsoul($login){
      $login = array($login, "netsoul");
      return $this->getElem("user", $login);
    }
  }

 ?>
