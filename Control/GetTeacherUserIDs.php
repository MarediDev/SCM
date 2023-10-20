<?php

 include_once "../Model/GetTeacherUserID.php";

class TeacherIDs extends TeacherID
{
  public function teachersIDs($ID)
  {
    return $this-> teachersID($ID);
  }
}
