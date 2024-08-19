<?php

    class Employee {

        public $name = null;                
        public $phone = null;             
        public $childrenCount = null;
        public $jobTitle = null;
        public $salary = null;     
        
        //getters setters (overloading)
        function __set($attribute, $value) {
            $this->$attribute  = $value;
        }

        function __get($attribute) {
            return $this->$attribute;
        }
        
        function displayEmployeeRecord() {
            return "$this->name has $this->childrenCount children";
        }

        function updateEmployeeChildrenCount($childrenCount) {
            $this->childrenCount = $childrenCount; 
        }
    }

    $y = new Employee();
    $y->__set('name', 'James');
    $y->__set('phone', 1235555643);
    $y->__set('childrenCount', 2);
    $y->__set('jobTitle', 'Software Engineer');
    $y->__set('salary', 15000);
    echo $y->__get('name') . ' is listed in the employee database along with his phone number:' . $y->__get('phone') . ', children count:' . $y->__get('childrenCount') . ', job title:' . $y->__get('jobTitle') . ', salary:$' . $y->__get('salary');
    echo '<br /> <br />';

    $x = new Employee();
    $x->__set('name', 'Maria');
    $x->__set('phone', 5553452266);
    $x->__set('childrenCount', 0);
    $x->__set('jobTitle', 'Data Analyst');
    $x->__set('salary', 11000);
    echo $x->__get('name') . ' is listed in the employee database along with his phone number:' . $x->__get('phone') . ', children count:' . $x->__get('childrenCount') . ', job title:' . $x->__get('jobTitle') . ', salary:$' . $x->__get('salary');
    
?>