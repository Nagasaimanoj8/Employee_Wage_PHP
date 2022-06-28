<?php
echo "WELCOME TO EMPLOYEE WAGE PROGRAM \n";
$isPresent=1;
$isAbsent=2;
$Employee_Wage_PerHour=20;
$empHrs=0;
$random_number=rand(0,2);
//echo "$random_number \t";
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
echo "$empWage";
?>