<?php
$score =30;
if ($score >=90){
    $grade ="A";
    echo "<br">;
    echo"splendid";
}elseif ($score>=80){
    $grade="B";
    echo "<br>";
    echo"Great work"
}
elseif ($score>=70){
    $grade="C";
    echo "<br>";
    echo"Good job";
}
elseif ($score>=60){
    $grade="D";
    echo "br";
    echo"try harder";
}else {
    $grade ="F";
    echo "<br>";
    echo "failed";
}