<?php

    class Employee {

        public $name = null;                // Attribute to store the employee's name
        public $phone = null;               // Attribute to store the employee's phone number
        public $childrenCount = null;       // Attribute to store the number of children the employee has
        public $jobTitle = null;            // Attribute to store the employee's job title
        public $salary = null;              // Attribute to store the employee's salary
        
        // Magic setter method for dynamic property assignment
        function __set($attribute, $value) {
            $this->$attribute = $value;  // Dynamically assigns a value to the specified attribute
        }

        // Magic getter method for dynamic property retrieval
        function __get($attribute) {
            return $this->$attribute;    // Dynamically retrieves the value of the specified attribute
        }
    }

    // Create an instance of the Employee class and dynamically set its attributes
    $y = new Employee();
    $y->__set('name', 'James');
    $y->__set('phone', 1235555643);
    $y->__set('childrenCount', 2);
    $y->__set('jobTitle', 'Software Engineer');
    $y->__set('salary', 15000);
    
    // Access and display the dynamically set attributes
    echo $y->__get('name') . ' is listed in the employee database along with his phone number: ' 
         . $y->__get('phone') . ', children count: ' . $y->__get('childrenCount') 
         . ', job title: ' . $y->__get('jobTitle') . ', salary: $' . $y->__get('salary');
    echo '<br /> <br />';

    // Create another instance of the Employee class and dynamically set its attributes
    $x = new Employee();
    $x->__set('name', 'Maria');
    $x->__set('phone', 5553452266);
    $x->__set('childrenCount', 0);
    $x->__set('jobTitle', 'Data Analyst');
    $x->__set('salary', 11000);
    
    // Access and display the dynamically set attributes
    echo $x->__get('name') . ' is listed in the employee database along with her phone number: ' 
         . $x->__get('phone') . ', children count: ' . $x->__get('childrenCount') 
         . ', job title: ' . $x->__get('jobTitle') . ', salary: $' . $x->__get('salary');

?>