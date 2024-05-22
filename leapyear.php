<html>
    <body>
        <form action="leapyear.php" method="POST">
            year : <input type="text" name="year" value><br>
            <input type="submit">
        </form>
    </body>
</html>

<?php   
    $year = $_POST["year"];
    if ( $year % 4 == 0 ){
        
        if( $year % 100 != 0){
            echo "leap year";
        
    }
    else{
        echo "Not leap year";
    }
}
    

    ?>