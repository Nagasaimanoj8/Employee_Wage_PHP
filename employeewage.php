<?php
echo "WELCOME TO EMPLOYEE WAGE PROGRAM \n";
$isPresent=1;
$isAbsent=2;
$Employee_Wage_PerHour=20;
$Empoyee_Working_Days=20;
$empHrs=0;
$totalWage=0;
$random_number=rand(0,2);
$day=1;
//echo "$random_number \t";
for($day=1;$day<=$Empoyee_Working_Days;$day++)
{
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
$empWage=$Employee_Wage_PerHour*$empHrs;
echo "$empWage \n";
$totalWage+=$empWage;
}
echo "Wages For a Month is:"."$totalWage \n";
?>