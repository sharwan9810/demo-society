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
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $transactionno = $_POST['transactionno'];
  $fname = $_POST['fname'];
  $aadharnumber = $_POST['aadharnumber'];
  $accountno = $_POST['accountno'];
  $phonenumber = $_POST['phonenumber'];
  $sharemoney = $_POST['sharemoney'];
  $cdcr = $_POST['cdcr'];
  $odcr = $_POST['odcr'];
  $lddr = $_POST['lddr'];


  
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "enrollment";
  
  $conn = mysqli_connect($host, $username, $password, $database);
  
  $sql = "INSERT INTO newloan (transactionno, fname, accountno, aadharnumber, phonenumber, sharemoney, cdcr, odcr, lddr) VALUES ('$transactionno','$fname', '$accountno', '$aadharnumber', '$phonenumber', '$sharemoney', '$cdcr', '$odcr', '$lddr')";
  $result=mysqli_query($conn,$sql);
if($result){
  echo "<SCRIPT>alert('Amount Deposited Successfully')</SCRIPT>";
}else{
  die(mysqli_error($conn));
}
}
?>

<?php
if(isset($_POST['submit'])){
    $transactionno = $_POST['transactionno'];
  $fname = $_POST['fname'];
  $accountno = $_POST['accountno'];
  $aadharnumber = $_POST['aadharnumber'];
  $phonenumber = $_POST['phonenumber'];
  $cddr = $_POST['cddr'];
  $oddr = $_POST['oddr'];


  
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "enrollment";
  
  $conn = mysqli_connect($host, $username, $password, $database);
  
  $sql = "INSERT INTO withdrawal (transactionno, fname,accountno, aadharnumber, phonenumber, cddr, oddr) VALUES ('$transactionno','$fname', '$accountno', '$aadharnumber', '$phonenumber', '0', '0')";
  $result=mysqli_query($conn,$sql);
if($result){
  echo "<SCRIPT>alert('Transaction Successfull for Account Number' )  </SCRIPT>";
}else{
  die(mysqli_error($conn));
}
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit Slip</title>
    <style>
        .main{
            width: 100%;
            height: 100%;
            border: 1px solid #000;
        }

        header{
            height: 150px;
        }
        .header header img{
            width: 120px;
            height: auto;
        }

        .header header .name{
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .header header .contact{
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .header header address{
            display: flex;
            align-items: center;
            justify-content: center;
        }

        hr{
            border-top: 2px 3px dotted black;
        }

        .main-body{
            display: flex;
        }

        .main-body-left{
            width: 50%;
        }
        .main-body-right{
            width: 50%;
        }
    </style>
</head>
<body>
    <div class="main">
        
        <div class="header">
            <header>
                <div class="name">
                    
                <img src="../lo.png" alt="LOGO"> <h2>Demo Society</h2>&nbsp;&nbsp;&nbsp;&nbsp;<p>Regd. Number: XXXXX</p>
                </div>
                <address>1/118, Block 1, Trilok Puri, Mayur Vihar, East Delhi-110091</address>
                <div class="contact"><h5>+91 9999999999</h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <h5>demosociety@demo.com</h5></div>
            </header>
            <hr>

        </div>
       
        <div class="main-body">
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
                // echo "<h2>Aadhar Number of Customer: $aadharnumber</h2>";
                // echo "First Name: " . $row['fname'] . "<br>";
                // echo "Aadhar Number: " . $row['aadharnumber'] . "<br>";
                // echo "Mobile Number: " . $row['phonenumber'] . "<br>";

                // Add more fields as needed
            } else {
                echo "No records found for the specified ID.";
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }

      
    }
    ?>

        <div class="main-body-left">
            <table>
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td><?php echo $row['fname']?></td>
                </tr><br>
                <tr>
                    <td>Account Number</td>
                    <td>:</td>
                    <td><?php echo $row['accountno']?></td>
                </tr><br><tr>
                    <td>Contact Number</td>
                    <td>:</td>
                    <td><?php echo $row['phonenumber']?></td>
                </tr><br><tr>
                    <td>Aadhar Number</td>
                    <td>:</td>
                    <td><?php echo $row['aadharnumber']?></td>
                </tr><br>
            </table>
            
        </div>
        


<?php
include '../connection.php';

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

        $sql = "SELECT * FROM newloan order by id desc" ;
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                // echo $row['sharemoney'];
            } 

        // mysqli_close($conn);
    }
}
    ?>

<div class="main-body-right">
        <table>

                <tr>
                    <td>Transaction Number</td>
                    <td>:</td>
                    <td><?php echo $row['transactionno']?></td>
                </tr><br><tr>

                </tr><br><tr>
                    <td>Transaction Date</td>
                    <td>:</td>
                    <td><?php echo $row['date']?></td>
                </tr><br>
                <td>After Balance</td>
                    <td>:</td>
                    <td><?php

$aadharnumber = $_POST['aadharnumber'];

$sql = "SELECT  SUM(cdcr+odcr) from newloan where aadharnumber = $aadharnumber";
$result = $conn->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
echo "Total Balance: ". $row['SUM(cdcr+odcr)'];
}
?></td>
            </table>
        </div>
        </div>
        <hr>
        
        <h4>Particulars of Transactions:</h4>
        <table border="1">
            
<?php
include '../connection.php';

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

        $sql = "SELECT * FROM newloan order by id desc" ;
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                // echo $row['sharemoney'];
            } 

        // mysqli_close($conn);
    }
}
    ?>
            <tr>
                <td>Compulsory Deposit:</td>
                <td><?php echo $row['cdcr'] ?></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <td>Optional Deposit:</td>
                <td><?php echo $row['odcr'];?></td>
            </tr>
            <tr>
                <td>Loan Credit:</td>
                <td><?php echo $row['ldcr']?></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <td>Loan Payment/Debit:</td>
                <td><?php echo $row['lddr'] ?></td>
            </tr>
        </table>
    </div>







    <div class="sum-show">
        <table border="5">
            <tr>
                <td>Total CD Cr: <?php

$aadharnumber = $_POST['aadharnumber'];

$sql = "SELECT  SUM(cdcr) from newloan where aadharnumber = $aadharnumber";
$result = $conn->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
echo $row['SUM(cdcr)'];
}
?></td>
<td>
    Total OD Cr: <?php

$aadharnumber = $_POST['aadharnumber'];

$sql = "SELECT  SUM(odcr) from newloan where aadharnumber = $aadharnumber";
$result = $conn->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
echo $row['SUM(odcr)'];
}
?>
</td>
            </tr>
        </table>
    </div>

</body>
</html>