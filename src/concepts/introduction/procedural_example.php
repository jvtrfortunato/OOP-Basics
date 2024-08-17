# Procedural Paradigm
# Call for procedures for data manipulation

<?php
    
    $a = 10;
    $b = 7;
    $operator = 'sum';

    function calculate($a, $b, $operator){
        if($operator == 'sum'){
            return $a + $b;
        }

        return false;
    }

    echo calculate($a, $b, $operator);

?>