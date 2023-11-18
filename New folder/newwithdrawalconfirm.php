<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>
    if(window.history.replaceState){
        window.history.replaceState( null, null, window.location.href);
    }
</script>
<style>
    img{
        display: flex;
        align-items: center;
        justify-content: center
    }
</style>
<body>
    <img src="lo.png" width="300px" height="auto" alt="LOGO">
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "enrollment";

        $conn = mysqli_connect($host, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $aadharnumber = $_POST['aadharnumber'];

        $sql = "SELECT * FROM basicdata WHERE aadharnumber = $aadharnumber";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo "<h2>Aadhar Number of Customer: $aadharnumber</h2>";
                echo "First Name: " . $row['fname'] . "<br>";
                echo "Aadhar Number: " . $row['aadharnumber'] . "<br>";
                echo "Mobile Number: " . $row['phonenumber'] . "<br>";

                // Add more fields as needed
            } else {
                echo "No records found for the specified ID.";
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
    ?>





<?php
if(isset($_POST['submit'])){
    $transactionno = $_POST['transactionno'];
  $fname = $_POST['fname'];
  $aadharnumber = $_POST['aadharnumber'];
  $phonenumber = $_POST['phonenumber'];
  $sharemoney = $_POST['sharemoney'];
  $cdcr = $_POST['cdcr'];
  $odcr = $_POST['odcr'];
  $ldcr = $_POST['ldcr'];
  $cddr = $_POST['cddr'];
  $oddr = $_POST['oddr'];
  $lddr = $_POST['lddr'];


  
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "enrollment";
  
  $conn = mysqli_connect($host, $username, $password, $database);
  
  $sql = "INSERT INTO newloan (transactionno, fname, aadharnumber, phonenumber, sharemoney, cdcr, odcr, ldcr, cddr, lddr, oddr) VALUES ('$transactionno','$fname', '$aadharnumber', '$phonenumber', '0', '0', '0', '0', '$cddr', '$lddr', '$oddr')";
  $result=mysqli_query($conn,$sql);
if($result){
  echo "Transaction Successfull.";
}else{
  die(mysqli_error($conn));
}
}
?>







<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "enrollment";

        $conn = mysqli_connect($host, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $aadharnumber = $_POST['aadharnumber'];

        $sql = "SELECT * FROM withdrawal ORDER BY id DESC" ;
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo "Transaction Number: " . $row['transactionno'] . "<br>";
                echo "Transaction Date: " . $row['date'] . "<br>";

            } else {
                echo "No records found for the specified ID.";
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        // mysqli_close($conn);
    }
    ?>


<button onclick="window.print()">Print this page</button>