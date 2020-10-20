<?php 

clearSQLTable();
displayTimesFromSQL();


function clearSQLTable()
{
    $con = new mysqli("127.0.0.1", "root", "thrivemap123", "thrivemap");

    $sqlclear = "DELETE FROM challenge";
    $clear = $con->query($sqlclear);
    $con->close();
}

function displayTimesFromSQL()
{
    $con = new mysqli("127.0.0.1", "root", "thrivemap123", "thrivemap");

//creating a query in SQL that selects all of the elements in the table and ording my newest first and putting that query in the results object in php
    $sql2 = "select * from challenge ORDER BY clickings desc";  
    $result = $con->query($sql2);

//echoing the data in result onto the page in order 
    if ($result->num_rows > 0) 
    {
    // outputing the data of each row from the results object
        while($row = $result->fetch_assoc()) 
        {
        //taking each row in the table and putting it in a str variable to be formated in the correct hour:minute:second format
            $str = $row["clickings"];
            echo date('h:i:s A', strtotime($str)) . "<br>";
        }
    } 
    else 
    {
        echo "0 results";
    }  
}

?>
