<?php
$stdb = array(
    'arias' => array( array(
    "name" => "Aarav Sharma",
    "age" => 14,
    "grade" => 9,
    "city" => "Delhi",
    "college" => "ariea",
    "father_name" => "Rohit Sharma",
    "mother_name" => "Anita Sharma",
    "address" => "123, Street Name, Delhi",
    "phone" => "9876543210",
    "email" => "aarav.sharma@example.com"
    ),array(

        "name" => "Vihaan Kumar",
        "age" => 12,
        "grade" => 7,
        "city" => "Bangalore",
        "college" => "ariea",
        "father_name" => "Amit Kumar",
        "mother_name" => "Priya Kumar",
        "address" => "789, Street Name, Bangalore",
        "phone" => "9876543212",
        "email" => "vihaan.kumar@example.com"
    ),array( 
        "name" => "Adya Nair",
        "age" => 14,
        "grade" => 9,
        "city" => "Kochi",
        "college" => "ariea",
        "father_name" => "Ravi Nair",
        "mother_name" => "Lakshmi Nair",
        "address" => "987, Street Name, Kochi",
        "phone" => "9876543215",
        "email" => "adya.nair@example.com"),

    array("name" => "Kabir Joshi",
        "age" => 13,
        "grade" => 8,
        "city" => "Pune",
        "college" => "ariea",
        "father_name" => "Nitin Joshi",
        "mother_name" => "Sneha Joshi",
        "address" => "147, Street Name, Pune",
        "phone" => "9876543216",
        "email" => "kabir.joshi@example.com")
    ),
    
    'vptc' => array(array(
    "name" => "Aanya Gupta",
    "age" => 13,
    "grade" => 8,
    "city" => "Mumbai",
    "college" => "vptc",
    "father_name" => "Rajesh Gupta",
    "mother_name" => "Sunita Gupta",
    "address" => "456, Street Name, Mumbai",
    "phone" => "9876543211",
    "email" => "aanya.gupta@example.com"

    ),
array( "name" => "Ishita Patel",
"age" => 15,
"grade" => 10,
"city" => "Ahmedabad",
"college" => "vptc",
"father_name" => "Suresh Patel",
"mother_name" => "Kavita Patel",
"address" => "321, Street Name, Ahmedabad",
"phone" => "9876543213",
"email" => "ishita.patel@example.com"),

array( "name" => "Myra Das",
"age" => 12,
"grade" => 7,
"city" => "Kolkata",
"college" => "vptc",
"father_name" => "Arjun Das",
"mother_name" => "Pooja Das",
"address" => "258, Street Name, Kolkata",
"phone" => "9876543217",
"email" => "myra.das@example.com"),

array( "name" => "Arjun Reddy",
"age" => 15,
"grade" => 10,
"city" => "Hyderabad",
"college" => "vptc",
"father_name" => "Ramesh Reddy",
"mother_name" => "Radha Reddy",
"address" => "369, Street Name, Hyderabad",
"phone" => "9876543218",
"email" => "arjun.reddy@example.com")));
  
   echo "<pre>";
   Print_r($stdb);
   echo "</pre>";
   
   
echo "<table border=1>";
echo "<tr><th>Name</th>
<th>Age</th>
<th>Grade</th>
<th>City</th>
<th>College</th>
<th>Father Name</th>
<th>Mother Name</th>
<th>Address</th>
<th>Phone</th>
<th>Email</th>";

foreach($stdb as $key => $value){
      for($i=0;$i<count($value);$i++){
       
        echo"<tr>";
        echo "<td>".$value[$i]["name"]."</td>";
        echo "<td>".$value[$i]["age"]."</td>";
        echo "<td>".$value[$i]["grade"]."</td>";
        echo "<td>".$value[$i]["city"]."</td>";
        echo "<td>".$value[$i]["college"]."</td>";
        echo "<td>".$value[$i]["father_name"]."</td>";
        echo "<td>".$value[$i]["mother_name"]."</td>";
        echo "<td>".$value[$i]["address"]."</td>";
        echo "<td>".$value[$i]["phone"]."</td>";
        echo "<td>".$value[$i]["email"]."</td>";
        echo "</tr>";
 
    } 
    /* 
    echo "<pre>";
    print_r($key);
    echo  "</pre>"; */
}
/* for($i=0;$i<=count($stdb[ 'arias']);$i++){

    echo "<tr>";
    echo "<td>" . $stdb['arias'][$i]["name"] . "</td>";
    echo "<td>" . $stdb['arias'][$i]["age"] . "</td>";
    echo "<td>" . $stdb['arias'][$i]["grade"] . "</td>";
    echo "<td>" . $stdb['arias'][$i]["city"] . "</td>";
    echo "<td>" . $stdb['arias'][$i]["college"] . "</td>";
    echo "<td>" . $stdb['arias'][$i]["father_name"] . "</td>";
    echo "<td>" . $stdb['arias'][$i]["mother_name"] . "</td>";
    echo "<td>" . $stdb['arias'][$i]["address"] . "</td>";
    echo "<td>" . $stdb['arias'][$i]["phone"] . "</td>";
    echo "<td>" . $stdb['arias'][$i]["email"] . "</td>";
    echo "</tr>";
} */
 echo "</table>"; 
?>


