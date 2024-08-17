<?php

    //model
    class Employee {

        //attributes
        public $name = 'James';
        public $phone = '(212) 555-1234';
        public $childrenCount = 2;

        //methods
        function displayEmployeeRecord() {
            return "$this->name has $this->childrenCount children";
        }

        function updateEmployeeChildrenCount($childrenCount) {
            //affect an attribute of the object
            $this->childrenCount = $childrenCount;
        }
    }

    $y = new Employee();
    echo $y->displayEmployeeRecord();
    echo '<br />';
    $y->updateEmployeeChildrenCount(3);
    echo $y->displayEmployeeRecord();
    echo '<hr />';

    $x = new Employee();
    echo $x->displayEmployeeRecord();
    echo '<br />';
    $y->updateEmployeeChildrenCount(1);
    echo $y->displayEmployeeRecord();

?>