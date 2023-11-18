<?php
function PMT($interest, $tenure, $loan_amount){
$interest = (float)$interest;
$tenure = (float)$tenure;
$loan_amount = (float)$loan_amount;
$tenure = $tenure*12;
$interest = $interest / 1200;
$amount = $interest * -$loan_amount * pow((1+$interest), $tenure) / (1-pow((1+$interest), $tenure));
return $amount;

}

function showValue($value){

    echo number_format($value,2);
}
?>