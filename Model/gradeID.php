 <?php

include_once "../DatabaseConnection/DBconnection.php";

class GradeID extends Databaseconnect
{
  protected function GradID($UserID)
  {
    $sql = "SELECT * from grade WHERE User_ID = ? ;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute(array($UserID));
    if ($result = $stmt->fetch())
    {
      return $result;
    }else
    {
        header("Location: ../Interface/SelectGrade.php?error=NoGrade");
    }

  }
}
