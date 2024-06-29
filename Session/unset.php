<?php
 
 session_start();
 
 $students = [
    [
        "name" => "Aarav Sharma",
        "age" => 14,
        "grade" => 9,
        "city" => "Delhi",
        "school" => "Delhi Public School",
        "father_name" => "Rohit Sharma",
        "mother_name" => "Anita Sharma",
        "address" => "123, Street Name, Delhi",
        "phone" => "9876543210",
        "email" => "aarav.sharma@example.com"
    ],
    [
        "name" => "Aanya Gupta",
        "age" => 13,
        "grade" => 8,
        "city" => "Mumbai",
        "school" => "Mumbai International School",
        "father_name" => "Rajesh Gupta",
        "mother_name" => "Sunita Gupta",
        "address" => "456, Street Name, Mumbai",
        "phone" => "9876543211",
        "email" => "aanya.gupta@example.com"
    ],
    [
        "name" => "Vihaan Kumar",
        "age" => 12,
        "grade" => 7,
        "city" => "Bangalore",
        "school" => "Bangalore High School",
        "father_name" => "Amit Kumar",
        "mother_name" => "Priya Kumar",
        "address" => "789, Street Name, Bangalore",
        "phone" => "9876543212",
        "email" => "vihaan.kumar@example.com"
    ],
    [
        "name" => "Ishita Patel",
        "age" => 15,
        "grade" => 10,
        "city" => "Ahmedabad",
        "school" => "Ahmedabad Public School",
        "father_name" => "Suresh Patel",
        "mother_name" => "Kavita Patel",
        "address" => "321, Street Name, Ahmedabad",
        "phone" => "9876543213",
        "email" => "ishita.patel@example.com"
    ],
    [
        "name" => "Vivaan Singh",
        "age" => 11,
        "grade" => 6,
        "city" => "Chennai",
        "school" => "Chennai International School",
        "father_name" => "Vikram Singh",
        "mother_name" => "Anjali Singh",
        "address" => "654, Street Name, Chennai",
        "phone" => "9876543214",
        "email" => "vivaan.singh@example.com"
    ]
];

$_SESSION["student"] = $students;

 session_unset();

 echo "<pre>";
 print_r($_SESSION);
 echo "</pre>";

?>
