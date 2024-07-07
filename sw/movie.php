<?php
$age=11;
    if ($age < 12) {
        echo "Sorry, children under 12 are not allowed to watch the movie.";
    } elseif ($age >= 12 && $age <= 17) {
        echo "You are allowed to watch the movie only if accompanied by an adult.";
    } else {
        echo "You are allowed to watch the movie without any restrictions.";
    }
?>
