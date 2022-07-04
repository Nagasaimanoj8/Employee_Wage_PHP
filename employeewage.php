<?php
class EmployeeWage
{
    public $isfulltime=1;
     public $isparttime=2;   
    public $empHrs;
   
    public function employeewagecalculation()
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
    return $this->empHrs;
}
}
class EmpWagebuilder extends EmployeeWage{
    public $company;
    public $Employee_Wage_PerHour;
    public $MAX_Employee_Working_Days_in_Month;
    public $Max_Emoloyee_Working_Hours;
    public function __construct($company,$Employee_Wage_PerHour,$MAX_Employee_Working_Days_in_Month,$Max_Emoloyee_Working_Hours)
    {
            $this->company = $company;
            $this->wagePerHour = $Employee_Wage_PerHour;
            $this->workingDaysPerMonth = $MAX_Employee_Working_Days_in_Month;
            $this->maxWorkingHours = $Max_Emoloyee_Working_Hours;    
    }
    public function calculateMonthlyWage(){
        $Num_of_Working_day= 0;
        $total_Emp_WorkingHrs = 0;
        $total_emp_Wage_Per_Month = 0;
        $obj = new EmployeeWage();
        while($Num_of_Working_day <= $this->MAX_Employee_Working_Days_in_Month && $total_Emp_WorkingHrs <= $this->Max_Emoloyee_Working_Hours){
            $empHrs = $obj->employeewagecalculation();
            $total_Emp_WorkingHrs += $empHrs;
            $Num_of_Working_day++;
            $dailyEmpWage = $this->Employee_Wage_PerHour * $empHrs;
            $total_emp_Wage_Per_Month += $dailyEmpWage;
        }
        echo $this->company . " "  . "Monthly Employee Wage :" . $total_emp_Wage_Per_Month . "\n";
    }

}
 //Object
    $company1 = new EmpWageBuilder("Jio", 50, 20, 120);
    $company2 = new EmpWageBuilder("Airtel", 50, 25, 150);
    $company3 = new EmpWageBuilder("Dell", 40, 22, 140);
    $companyArray = [$company1, $company2, $company3];
    for($i = 0; $i < count($companyArray); $i++){
    echo $companyArray[$i]->calculateMonthlyWage();
} 
?>