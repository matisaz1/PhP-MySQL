<?php
$age = 14;

switch ($age){
    case ($age >= 0 && $age < 18):
        echo "You are a minor (0-18 years old) <br>";
        break;
    case ($age >= 18 && $age <= 25);
        echo "You are a young adult! <br>";
        break;
    case ($age > 25):
        echo "You are a adult <br>";
        break;
    default:
        echo "Invalid age input! <br>";
        break;
}

$day = "Monday";

switch ($day){
    case 'Monday':
        echo "It's Monday! Start of the week";
        break;
    case 'Tuesday';
        echo "It's Tuesday! Keep pushing through";
        break;
    case 'Wednesday';
        echo "It's Wednesday! Midweek already!";
        break;
    case 'Thursday';
        echo "It's Thursday! Almost there!";
        break;
    case 'Friday';
        echo "Its Friday! Weekend is just around the corner";
        break;
    case 'Saturday';
        echo "Its Saturday! Enjoy your weekend!";
        break;
    case 'Sunday';
        echo "It's Sunday! Rest and recharge!";
        break;
    default:
    echo "Invalid day";
    break;
    
}

?>