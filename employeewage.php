<?php
echo "WELCOME TO EMPLOYEE WAGE PROGRAM \n";
$isPresent=1;
$Employee_Wage_PerHour=20;
$random_number=rand(0,1);
$empHrs;
//echo "$random_number \t";
if($random_number==$isPresent)
{
    echo "EMPLOYEE IS PRESENT \n" ;
    $empHrs=8;
}
else
{
    echo "EMPLOYEE IS ABSENT \n";
    $empHrs=0;
}
$empWage=$Employee_Wage_PerHour*$empHrs;
echo "$empWage";
?>