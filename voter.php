<?php
$voterAge = 21;
$voterPVC = true;
$voterWard = 020;
if($voterAge >= 18 && $voterPVC && $voterWard = 020){
    echo "Voter Eligible to Vote"
};
elseif($voterAge < 18){
    echo "You need to be 18 years or older before you can vote"
};
elseif($voterPVC = false){
    echo "you need a PVC to vote"
};

else{
    echo "This is not your voting ward"
};
?>