<?php
include_once "../Model/TeacherAccountCreation.php";

class TeacherAccounts extends TeacherAccount
{
  private $FirstName;
  private $Surname;
  private $IDnumber;
  private $Gender;
  private $Rank;
  private $Password;

  public static $Date;
  public static $Time;
  public static $status;

    public function __Construct($FirstName,$Surname,$Date,$Time,$IDnumber,$Gender,$Rank,$status,$Password)
    {
       $this->FirstName = $FirstName;
       $this->Surname = $Surname;
       $this->IDnumber = $IDnumber;
       $this->Gender = $Gender;
       $this->Rank = $Rank;
       $this->Password = $Password;

    }

   public function UserAccounts()
   {
    $this->userAccount($this->FirstName,$this->Surname,self::$Date,self::$Time,$this->IDnumber,$this->Gender,$this->Rank,self::$status,$this->Password);
   }



}
