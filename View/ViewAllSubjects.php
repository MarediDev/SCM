<?php

include_once "../Model/ViewAllSubject.php";

class ViewSubjects extends ViewSubject
{
  public function  Allsubjects($userID)
  {
    return $this-> Allsubject($userID);
  }
}
