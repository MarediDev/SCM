<?php

include_once "../Model/SelectSchool.php";

class SelectSchools extends SelectSchool
{
  public function  getschoolNamesMankweng()
  {
    return $this-> getschoolNameMankweng();
  }
  public function  getschoolNamesKgakatlou()
  {
    return $this-> getschoolNameKgakatlou();
  }

}
