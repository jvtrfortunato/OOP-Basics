<?php

    class Employee {

        public $name = null;              // Attribute to store the employee's name  
        public $phone = null;             // Attribute to store the employee's phone number
        public $childrenCount = null;     // Attribute to store the number of children the employee has

        // Setter method
        function setName($name) {
            $this->name = $name; // Assigns the provided name to the name attribute
        }

        function setChldrenCount($childrenCount) {
            $this->childrenCount = $childrenCount;
        }

        function setPhone($phone) {
            $this->phone = $phone;
        }

        // Getter method
        function getName() {
            return $this->name; // Returns the value of the name attribute
        }

        function getChildrenCount() {
            return $this->childrenCount;
        }

        function getPhone() {
            return $this->phone;
        }
        
        // Method to display the employee's record, including their name and number of children
        function displayEmployeeRecord() {
            return "$this->name has $this->childrenCount children";
        }

        // Method to update the number of children the employee has
        function updateEmployeeChildrenCount($childrenCount) {
            $this->childrenCount = $childrenCount; // Directly updates the childrenCount attribute
        }
    }

    // Create an instance of the Employee class
    $y = new Employee();

    // Set the employee's name, phone, and children count using setter methods
    $y->setName('James');
    $y->setPhone(1235555643);
    $y->setChldrenCount(2);

    // Display the employee's record using the displayEmployeeRecord method
    echo $y->displayEmployeeRecord();
    echo '<br />';

    // Access and display individual attributes using getter methods
    echo $y->getName() . ' has ' . $y->getChildrenCount() . ' children';
    echo '<br />';

    // Create another instance of the Employee class
    $x = new Employee();

    // Set the employee's name and children count using setter methods
    $x->setName('Maria');
    $x->setChldrenCount(0);

    // Access and display individual attributes using getter methods
    echo $x->getName() . ' has ' . $x->getChildrenCount() . ' children';
    
?>