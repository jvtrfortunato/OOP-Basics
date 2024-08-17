<?php

    // Model: Represents an Employee with specific attributes and behaviors.
    class Employee {

        // Attributes: Define the basic properties of the Employee object.
        public $name = 'James';             // Name of the employee
        public $phone = '(212) 555-1234';   // Phone number of the employee
        public $childrenCount = 2;          // Number of children the employee has

        
        // Methods: Define the behaviors or actions that the Employee object can perform.
        
        // Display the employee's record including their name and number of children.
        function displayEmployeeRecord() {
            return "$this->name has $this->childrenCount children";
        }

        // Update the number of children the employee has.
        function updateEmployeeChildrenCount($childrenCount) {
            // Affect an attribute of the object (update the number of children).
            $this->childrenCount = $childrenCount;
        }
    }

    // Create an instance of the Employee class.
    $y = new Employee();

    // Display the record for the first employee instance.
    echo $y->displayEmployeeRecord();
    echo '<br />';

    // Update the number of children for the first employee instance and display the updated record.
    $y->updateEmployeeChildrenCount(3);
    echo $y->displayEmployeeRecord();
    echo '<hr />';

    // Create another instance of the Employee class.
    $x = new Employee();

    // Display the record for the second employee instance.
    echo $x->displayEmployeeRecord();
    echo '<br />';

    // Update the number of children for the first employee instance again and display the updated record.
    $y->updateEmployeeChildrenCount(1);
    echo $y->displayEmployeeRecord();

?>