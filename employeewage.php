<?php
echo "WELCOME TO EMPLOYEE WAGE PROGRAM \n";
$Employee_Wage_PerHour=20;
$MAX_Employee_Working_Days_in_Month=20;
$empHrs;
$total_emp_Wage_Per_Month=0;
$Num_of_Working_day=1;
//echo "$random_number \t";
while($Num_of_Working_day<=$MAX_Employee_Working_Days_in_Month)
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
    break;
}
$Num_of_Working_day++;
$daily_empWage=$Employee_Wage_PerHour*$empHrs;
echo "$daily_empWage \n";
$total_emp_Wage_Per_Month+=$daily_empWage;
}
echo "Wages For a Month is:"."$total_emp_Wage_Per_Month \n";
?>