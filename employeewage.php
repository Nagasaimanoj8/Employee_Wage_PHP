<?php
class Employeewage{
public  $empHrs;
public  $total_emp_Wage_Per_Month=0;
public $Num_of_Working_day=0;
public $total_Emp_WorkingHrs=0;
public $Employee_Wage_PerHour=20;
public $MAX_Employee_Working_Days_in_Month=20;
public $Max_Emoloyee_Working_Hours=100;
public $company;
//echo "$random_number \t";
public function __construct($company,$Employee_Wage_PerHour,$MAX_Employee_Working_Days_in_Month,$Max_Emoloyee_Working_Hours)
{
    $this->company= $company;
    $this->Employee_Wage_PerHour= $Employee_Wage_PerHour;
    $this->MAX_Employee_Working_Days_in_Month= $MAX_Employee_Working_Days_in_Month;
    $this->Max_Emoloyee_Working_Hours= $Max_Emoloyee_Working_Hours;
}
public function claculatemonthlywage(){
    while($this->Num_of_Working_day<=$this->MAX_Employee_Working_Days_in_Month && $this->total_Emp_WorkingHrs<=$this->Max_Emoloyee_Working_Hours)
{
    $random_number=rand(0,2);
switch($random_number){
    case 1:
        echo "EMPLOYEE IS PRESENT WORK FOR FULL TIME \n" ;
        $this->empHrs=8;
    break;
    case 2:
        echo "EMPLOYEE IS PRESENT AND WORK FOR PART TIME \n";
         $this->empHrs=4;
    break;
    default:
        echo "EMPLOYEE IS ABSENT \n";
        $this->empHrs=0;
    break;
}
$this->Num_of_Working_day++;
$this->total_Emp_WorkingHrs+=$this->empHrs;
$this->daily_empWage=$this->Employee_Wage_PerHour*$this->empHrs;
echo "$this->daily_empWage \n";
$this->total_emp_Wage_Per_Month+=$this->daily_empWage;
}
echo "$this->company Wages For a Month is:"."$this->total_emp_Wage_Per_Month \n";
}
}
$empwage=new Employeewage("Sony",30,20,150);
$empwage->claculatemonthlywage();
$empwage=new Employeewage("Apple",20,10,100);
$empwage->claculatemonthlywage();
$empwage=new Employeewage("Dell",10,25,200);
$empwage->claculatemonthlywage();
?>