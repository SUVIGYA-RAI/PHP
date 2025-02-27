<?php
$unitsConsumed = (int)readline();
$costPerUnit = (int)readline();
$taxPercentage = (int)readline();

function calculateElectricityBill ($unitsConsumed, $costPerUnit, $taxPercentage) {
    $Bill = $unitsConsumed * $costPerUnit;
    $Tax = $Bill *  ($taxPercentage/100);
    $TotalElectricityBill = $Bill + $Tax;
    return $TotalElectricityBill;
}
$TotalElectricityBill = calculateElectricityBill ($unitsConsumed, $costPerUnit, $taxPercentage);
echo "Total Electricity Bill: ", $TotalElectricityBill;
?>