<?php
echo "WELCOME TO EMPLOYEE WAGE PROGRAM \n";
$Employee_Wage_PerHour=20;
$Empoyee_Working_Days=20;
$empHrs=0;
$totalWage=0;
$Working_day=1;
//echo "$random_number \t";
while($Working_day<=$Empoyee_Working_Days)
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
$Working_day++;
$empWage=$Employee_Wage_PerHour*$empHrs;
echo "$empWage \n";
$totalWage+=$empWage;
}
echo "Wages For a Month is:"."$totalWage \n";
?>