<?php

 include_once "../Model/TClass.php";

class TeacherClasses extends TeacherClass
{
  public function teachersClass($A,$B,$C,$D,$E,$school,$userID,$province,$district,$circu,$GradeChoice)
  {
    return $this->TeacherClas($A,$B,$C,$D,$E,$school,$userID,$province,$district,$circut,$GradeChoice);
  }
}
