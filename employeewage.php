<?php
class Employeewage{
public  $empHrs;
//echo "$random_number \t";
public function claculatemonthlywage($company,$Employee_Wage_PerHour,$MAX_Employee_Working_Days_in_Month,$Max_Emoloyee_Working_Hours)
{
    $total_emp_Wage_Per_Month=0;
    $Num_of_Working_day=0;
    $total_Emp_WorkingHrs=0;
    while($Num_of_Working_day<=$MAX_Employee_Working_Days_in_Month && $total_Emp_WorkingHrs<=$Max_Emoloyee_Working_Hours)
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
$Num_of_Working_day++;
$total_Emp_WorkingHrs+=$empHrs;
$daily_empWage=$Employee_Wage_PerHour*$empHrs;
echo "$daily_empWage \n";
$total_emp_Wage_Per_Month+=$daily_empWage;
}
echo "$company Wages For a Month is:"."$total_emp_Wage_Per_Month \n";
}
}
$empwage=new Employeewage($company,$Employee_Wage_PerHour,$MAX_Employee_Working_Days_in_Month,$Max_Emoloyee_Working_Hours);
$empwage->claculatemonthlywage("Sony",30,20,150);
$empwage->claculatemonthlywage("Apple",20,10,100);
?>