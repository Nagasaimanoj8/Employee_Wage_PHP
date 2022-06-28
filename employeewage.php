<?php
echo "WELCOME TO EMPLOYEE WAGE PROGRAM \n";
$isPresent=1;
$isAbsent=2;
$Employee_Wage_PerHour=20;
$random_number=rand(0,2);
//echo "$random_number \t";
if($random_number==$isPresent)
{
    echo "EMPLOYEE IS PRESENT WORK FOR FULL TIME \n" ;
    $empHrs=8;
}
elseif($random_number==$isAbsent)
{
    echo "EMPLOYEE IS PRESENT AND WORK FOR PART TIME \n";
    $empHrs=4;
}
else
{
    echo "EMPLOYEE IS ABSENT \n";
    $empHrs=0;
}
$empWage=$Employee_Wage_PerHour*$empHrs;
echo "$empWage";
?>