<?php
ini_set('display_errors', '1'); 

$host = '127.1.0.1';
$user = 'root';
$pass = '';
$db = 'Project_no1';

$conn = new mysqli ($host,$user,$pass,$db);

if($conn){
    Print("<h2>Database Successfully Connected</h2>");
}

else {
    Print("<h2>Not Connected</h2>");
}

echo "\n"."Customer Details = 1"."\n";
echo "\n"."Books Details = 2"."\n";
echo "\n"."Transaction Book Loan Details = 3"."\n";



$select = "SELECT * FROM 1=1 ";

mysqli_query($conn, $select);

while($ans == 'n')
{
    while($ans == 'n')
    {
        $a = readline("\n"."Enter Your Choice: "."\n");
        if($a == 1){
            echo "\n"."You Are In Customer Detail"."\n";

            echo "Add Detail To give 4"."\n";
            echo "View Detail To give 5"."\n";
            $a1 = readline("\n"."Choose Any one: "."\n");

            if($a1 == 4){
                echo "Add Detail Of New Customer"."\n";
                $Fname = readline("Enter First Name: "."\n");
                $Lname = readline("Enter Last Name: "."\n");
                $Dob = readline ("Enter BirthDate: "."\n");
                $Address = readline("Enter Address: "."\n");
                $City = readline("Enter City: "."\n");
                $State = readline("Enter State: "."\n");
                $Zipcode = readline("Enter ZipCode: "."\n");
                $Country = readline("Enter Country: "."\n");
                $Phoneno = readline("Enter Phone no: "."\n");
                $Email = readline("Enter Email: "."\n");
                echo "INSERT INTO Members (FirstName,LastName,BirthDate,Address,City,State,ZipCode,Country,PhoneNumber,Email) VALUES ('$Fname','$Lname','$Dob','$Address','$City','$State','$Zipcode','$Country','$Phoneno','$Email')";
                echo "\n"."Process Done"."\n";
            }

            if($a1 == 5){
                echo $select. "Members"."\n";
            }
                break;
        }

        if($a == 2){
            echo "\n"."You Are In Book Detail"."\n";

            echo "Add Detail To give 6"."\n";
            echo "View Detail To give 7"."\n";

            $a1 = readline("\n"."Choose Any one: "."\n");

            if($a1 == 6){
                echo "Add New Detail in Books"."\n";
                $Title = readline("Enter Title Of The Book: "."\n");
                $ISBN = readline("Enter ISBN: "."\n");
                $Publisher = readline("Who Published: "."\n");
                $Year = readline("Enter the Year: "."\n");
                $Genre = readline("What Type Of Genre: "."\n");
                $Quantity = readline("How Much Quantity: "."\n");

                echo "INSERT INTO Book(Title,ISBN,Publisher,YearPublished,Genre,QuantityAvailable)VALUES('$Title','$ISBN','$Publisher',$Year,'$Genre','$Quantity')";
                echo "\n"."Process Done"."\n";
            }

            if($a1 == 7){
                echo $select."Book"."\n";
            }

            break;
        }

        if($a == 3){
            echo "\n"."You Are In Transaction Detail"."\n";

            echo "Add Transaction To give 8"."\n";
            echo "View Transaction To give 9"."\n";
            $a1 = readline("\n"."Choose Any one: "."\n");

            if($a1 == 8){
                $CustomerID = readline("Enter The CustomerID: "."\n");
                $BookID = readline("Enter The BookID: "."\n");
                $Loandate = readline("Enter Loan Date: "."\n");
                $Returndate = readline("Enter Return Date: "."\n");

                echo "INSERT INTO BookLoan(CustomersID,BookID,LoanDate,ReturnDate)VALUES($CustomerID,$BookID,'$Loandate','$Returndate')";
                echo "\n"."Process Done"."\n";
            }

            if($a1 == 9){
                echo $select."BookLoan"."\n";
            }

            break;
        }

       
    }

    $ans = readline("Are You Finished y/n: ");
}

?>