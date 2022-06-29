<?php
class Employeewage{
public $Max_Emoloyee_Working_Hours=100;
public $Employee_Wage_PerHour=20;
public $MAX_Employee_Working_Days_in_Month=20;
public $total_Emp_WorkingHrs=0;
public $total_emp_Wage_Per_Month=0;
public $Num_of_Working_day=1;
public $empHrs;
//echo "$random_number \t";
public function claculatemonthlywage(){
while($this->Num_of_Working_day<=$this->MAX_Employee_Working_Days_in_Month && $this->total_Emp_WorkingHrs<=$this->Max_Emoloyee_Working_Hours)
{
    $random_number=rand(0,2);
switch($random_number){
    case 1:
        echo "EMPLOYEE IS PRESENT WORK FOR FULL TIME \n" ;
        $empHrs=8;
    break;
    case 2:
        echo "EMPLOYEE IS PRESENT AND WORK FOR PART TIME \n";
         $empHrs=4;
    break;
    default:
        echo "EMPLOYEE IS ABSENT \n";
        $empHrs=0;
    break;
}
$this->Num_of_Working_day++;
$this->total_Emp_WorkingHrs+=$empHrs;
$daily_empWage=$this->Employee_Wage_PerHour*$empHrs;
echo "$daily_empWage \n";
$this->total_emp_Wage_Per_Month+=$daily_empWage;
}
echo "Wages For a Month is:"."$this->total_emp_Wage_Per_Month \n";
}
}
$empwage=new Employeewage();
$empwage->claculatemonthlywage();
?>