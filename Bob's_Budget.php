<?php
/* This is a project that I completed as part of my PHP course on Codecademy. The objective here was to help create a budget for a fictional worker named Bob. All actual numbers were provided, but as far as code goes, Codecademy provided:

The arrays $annualExpenses and $monthlyExpenses
The variables $grossSalary and $socialSecurity
The array $incomeSegments
  
Everything else was coded by me, with Codecademy providing direction on what to do for Bob's budget (Example: "Before deducting Bob's monthly expenses, determine his monthly income from the current annual income"). 

This project demonstrates my understanding of arrays, functions, variables, and changing them throughout a program.*/
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$weeklyExpenses = [
  	"gas" => 25,
  	"food" => 90,
  	"entertainment" => 47
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];
/* This section figures out what Bob's net income is after taxes. */
$firstTaxSegment = $incomeSegments[0][0] * $incomeSegments[0][1];

$secondTaxSegment = $incomeSegments[1][0] * $incomeSegments[1][1];

$thirdTaxSegment = $incomeSegments[2][0] * $incomeSegments[2][1];

$netIncome = $firstTaxSegment + $secondTaxSegment + $thirdTaxSegment;

$netIncome -= $socialSecurity;
$annualIncome = $netIncome;
echo "Bob's annual income after taxes is $annualIncome";
/* This section figures out what Bob's annual income is after annual expenses. */
$annualIncome -= $annualExpenses["vacations"];
$annualIncome -= $annualExpenses["carRepairs"];

echo "\n";

echo "Bob's annual income after subtracting annual expenses is $annualIncome";

/* This section figures out what Bob's monthly income is */
$monthlyIncome = round(($annualIncome / 12), 2);
echo "\n";
echo "Bob's monthly income is $monthlyIncome";

/*This section figures out what Bob's monthly income is after subtracting taxes*/
$monthlyIncome -= $monthlyExpenses["rent"];
$monthlyIncome -= $monthlyExpenses["utilities"];
$monthlyIncome -= $monthlyExpenses["healthInsurance"];

echo "\n";
echo "Bob's monthly income after subtracting monthly expenses is $monthlyIncome";

/* This section figures out what Bob's weekly income is. */
$weeklyIncome = round(($monthlyIncome / 4.33),2);

echo "\n";
echo "Bob's weekly income is $weeklyIncome";

/* This section figures out what Bob's weekly income is after subtracting weekly expenses */

$weeklyIncome -= $weeklyExpenses["gas"];
$weeklyIncome -= $weeklyExpenses["food"];
$weeklyIncome -= $weeklyExpenses["entertainment"];

echo "\n";
echo "Bob's weekly income after subtracting weekly expenses is $weeklyIncome";

/* This section figures out what Bob can potentially put into savings every year after all of his expenses. */
$yearlySavings = $weeklyIncome * 52;

echo "\n";
echo "Using this budget, Bob can potentially save $yearlySavings every year.";