<?php

 include_once "../Model/GetblockID.php";

class GetBlockIDs  extends  GetBlockID
{
  public function BlocksID($userID)
  {
    return $this-> BlockID($userID);
  }
}
