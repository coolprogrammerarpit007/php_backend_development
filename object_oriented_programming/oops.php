<?php


    // Object Oriented Programming

    // class Employee{
    //     private $first_name;
    //     private $last_name;
    //     private $age;

    //     public function __construct($first_name,$last_name,$age)
    //     {
    //         $this->first_name = $first_name;
    //         $this->last_name = $last_name;
    //         $this->age = $age;
    //     }

    //     public function get_name(){
    //         return "Employee Name is: {$this->first_name} {$this->last_name}" ."<br>";
    //     }

    //     public function get_age(){
    //         return "Employee Age is: {$this->age} years." ."<br>";
    //     }
    // }

    // $employee_1 = new Employee("Ramesh","Sharma",22);
    // $employee_2 = new Employee("Mohit","Singh",27);

    // echo $employee_1->get_name();
    // echo $employee_2->get_name();
    // echo $employee_2->get_age();


    class Person{
        protected $name;
        protected $age;

        public function __construct($name,$age){
            $this->name = $name;
            $this->age = $age;
        }
        
        public function get_user_info(){
            return "Person Name is: {$this->name} and he is {$this->age} years old!"."<br>";
        }

        protected function employee_joining_and_probiation_date($joining_date,$probation_date){
            return "Joining Date of Employee is: {$joining_date} and Probation Date of Employee is: {$probation_date}". "<br>";
        }
    }

    class Employee extends Person{
        private $salary;
        private $designation;

        public function __construct($name,$age,$salary,$designation)
        {
            parent::__construct($name,$age);
            $this->salary = $salary;
            $this->designation = $designation;
        }

        public function get_employee_salary(){
            return "Employee Per Month Salary is: {$this->salary}" . "<br>";
        }

        public function get_employee_designation(){
            return "Designation of Employee is: {$this->designation}" . "<br>";
        }

        public function employee_private_details($joining_date,$probation_date)
        {
            return $this->employee_joining_and_probiation_date($joining_date,$probation_date);
        }
    }

    $employee_1 = new Employee("Nitin Khanna",24,32000,"IT and Software Development");

    // echo $employee_1->get_user_info();
    // echo $employee_1->get_employee_salary();
    // echo $employee_1->get_employee_designation();
    // echo $employee_1->employee_private_details("01/01/2024","01/07/2024");

    // final keyword is used to prevent class inheritance or method overriding
    // class constants can be used when you want to declare some constant data within a class.
    // these constant variable can be used with className :: constant variable name.
    // To acess const variable within the class we need to use self :: class variable name.


    class Company{
        const company_message = "We are delighted to have you onboard!";
    }

    // echo Company::company_message;


    abstract class ParentClass{
        protected $name;

        public function __construct($name)
        {
            $this->name = $name;
        }
        abstract protected function prefixName();
    }



    class ChildClass extends ParentClass{
        public function __construct($name)
        {
            parent::__construct($name);
        }

        public function prefixName(){
            if($this->name === "John Doe"){
                $prefix = "Mr. ";
            }
            else{
                $prefix = "Mrs. ";
            }

         return "Nice, to Meet you {$prefix} {$this->name}";
        }
    }

    $person1 = new ChildClass("Jane Doe");
    // echo $person1->prefixName();

    // The child class may define optional parameters in abstract method implementation in the child class.

    // Traits in PHP
    // PHP only support single Inheritance, a child class can inherit from single parent
    // So, when a class needs to inherit multiple behaviour, Traits solve this problem.
    // Traits are declared with traits keyword, to use trait in class need to use "use" keyword.

    trait message1{
        public function greeting(){
            return "Nice to meet you, good morning!";
        }
    }

    class MyClass{
        use message1;
    }

    $object = new MyClass();
    // echo $object->greeting();

    // PHP Static Methods:- static methods are those methods which can be called directly- without creating an instance of the class first.
    // A class can have both the static and non-static methods in a class.
    // To aacess a static method within class need to use self::methodname
    // To call a static method from method within other class, static mehod need to be public too.
    // to call a static method within class itself need to use parent keyword.
    // Same can be done for the static properties.

    class GreetingFriend{
        public static function greet(){
            echo "Hello, How are you my friend!";
        }
    }


    // GreetingFriend::greet();