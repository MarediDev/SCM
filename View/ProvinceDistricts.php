<?php

include_once "../Model/ProvinceDistrict.php";

class Districts extends District
{
  public function Limpopion()
  {
    return $this->Limpopo();
  }

  public function Mpumalangas()
  {
    return $this->Mpumalanga();
  }
}
