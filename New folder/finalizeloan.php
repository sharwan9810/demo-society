<?php

session_start();
$conn = mysqli_connect("localhost", "root", "", "enrollment");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Demo Society</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Master Panel
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="addbranch.php">Create New Branch</a></li>
            <li><a class="dropdown-item" href="managebranch.php">Manage Branch Users</a></li>
            <li><a class="dropdown-item" href="managepusers.php">Manage Personal Portal Users</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="addmarquee.php">Add Marquee</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Customer Creation
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="customercreation.php">Create New Membership</a></li>
            <li><a class="dropdown-item" href="photoupload.php">Member Documents Upload</a></li>
            <li><a class="dropdown-item" href="printform.php">Print Membership Form</a></li>
            <li><a class="dropdown-item" href="printpassbook.php">Print Member Passbook</a></li>
            <li><a class="dropdown-item" href="printidcard.php">Print Member ID Card</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="withdrawalmembership.php">Withdrawal Membership</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Manage Transactions
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="deposit.php">Deposit to Member Account</a></li>
            <li><a class="dropdown-item" href="withdrawal.php">Withdrawal From Member Account</a></li>
            <li><a class="dropdown-item" href="sharemoney.php">View List of Share Holders</a></li>
            <li><a class="dropdown-item" href="members.php">View List of All Members</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="managevouchers.php">Create/ Manage Vouchers/Coupons</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Loan Services
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="createloan.php">Create Loan Application</a></li>
            <li><a class="dropdown-item" href="processloan.php">Process Loan Application</a></li>
            <li><a class="dropdown-item" href="printloan.php">Print Loan Application</a></li>
            <li><a class="dropdown-item" href="generateshcedule.php">Generate Loan EMI Schedule</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="finalizeloan.php">Finalize Loan All Payment Before Time</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Other Services
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="fd.php">Fixed Deposit</a></li>
            <li><a class="dropdown-item" href="rd.php">Recurring Deposit</a></li>
            <li><a class="dropdown-item" href="sendemail.php">Send EMail Statement</a></li>
            <li><a class="dropdown-item" href="sendsms.php">Send SMS to Member</a></li>
            <li><a class="dropdown-item" href="odstetement.php">OD Account Statement</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="changenominee.php">Change Nominee</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Reports
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="membershipsearch.php">View Memberships</a></li>
            <li><a class="dropdown-item" href="transactionsearch.php">All Transactions Reports</a></li>
            <li><a class="dropdown-item" href="loanrec.php">Loan Applications Recieved</a></li>
            <li><a class="dropdown-item" href="loansanc.php">Loan Amount Sanctioned</a></li>
            <li><a class="dropdown-item" href="finalizedloans.php">Finalized Loans</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="editdeposit.php">Edit Wrong Entry</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search Member by Account Number" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
    <h2>Finalize Loan</h2>
    
<table class=" table table-striped">
            <div class="base">
                <center>
                    <form action="finalizeloan.php" method="post">
                    <input type="number" class="form-control" name="accountno" value="<?php echo $row['accountno']?>">
        <button value="submit" class="btn btn-primary">CONTINUE</button><br>
                    </form>
<?php
        error_reporting(0);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "enrollment";

        $conn = mysqli_connect($host, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $accountno = $_POST['accountno'];

        $sql = "SELECT * FROM newloan WHERE accountno = $accountno";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo '<img style="width:130px;"src="lo.png"><br>';
                echo "First Name: " . $row['fname']. "&nbsp;&nbsp;&nbsp;</font>";
                echo "Mobile Number: " . $row['phonenumber']. "&nbsp;&nbsp;&nbsp;</font><br>";
                echo "Account Number: " . $row['accountno'];


            } else {
                echo "<Script>alert('Invailid Account Number')</Script>";
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        // mysqli_close($conn);
    }
    ?>
    </center>
</div>
        
        <table class="table table-bordered">
<td>
    Total Liability: <?php

$accountno = $_POST['accountno'];

$sql = "SELECT  SUM(ldcr) from newloan where accountno = $accountno";
$result = $conn->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
echo $row['SUM(ldcr)'];
}
?>
</td>
<td>Liability Paid: <?php

$accountno = $_POST['accountno'];

$sql = "SELECT  SUM(lddr) from newloan where accountno = $accountno";
$result = $conn->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
echo $row['SUM(lddr)'];
}
?></td>
<td>
    Liability Yet to be Paid: <?php

$accountno = $_POST['accountno'];

$sql = "SELECT  SUM(ldcr-lddr)+SUM(ldcr-lddr)*1.25/100 from newloan where accountno = $accountno";
$result = $conn->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
echo $row['SUM(ldcr-lddr)+SUM(ldcr-lddr)*1.25/100'];
}
?>
</td>
<td>
    Liability To be Refunded: <?php

$accountno = $_POST['accountno'];

$sql = "SELECT (SUM(lddr)-SUM(ldcr))+(SUM(lddr)-SUM(ldcr))*1.25/100 from newloan where accountno = $accountno";
$result = $conn->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
echo $row['(SUM(lddr)-SUM(ldcr))+(SUM(lddr)-SUM(ldcr))*1.25/100'];
}
?>
</td>
            </tr>
        </table>
    </div>
    </table>     
        </form>
    </div>
    </div>
    </div>
    <div class="enter-data">
    <form action="deposit.php" method="post">
        <label for="accountno">
            Enter Account Number
        </label>
        <input type="hidden" value="<?php echo $row['accountno']?>" class="form-control" name="accountno">
        <button class="btn btn-primary" value="submit">CONTINUE</button>
    </form>
    <?php
    error_reporting(0);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "enrollment";

        $conn = mysqli_connect($host, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $accountno = $_POST['accountno'];

        $sql = "SELECT * FROM basicdata WHERE accountno = $accountno";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo "First Name: " . $row['fname']. "&nbsp;&nbsp;&nbsp;";
                echo "Mobile Number: " . $row['phonenumber'];
                // Add more fields as needed
            } else {
                echo "<Script>alert('Invailid Account Number')</Script>";

            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }

    }
    ?>
    <div class="deposit">
        
        <form action="newdconfirm.php" method="post">
            <table class="table table-striped">
                <tr>
                    <td> <label for="name">
                Customer Name:
            </label></td>
                    <td><input type="text" class="form-control" name="fname" readonly value="<?php echo "$row[fname]"?>"><br></td>
                </tr>
                <tr>
                    <td> <label for="accountno">
                Customer Account Number:
            </label></td>
                    <td><input type="text" class="form-control" name="accountno" readonly value="<?php echo "$row[accountno]"?>"><br></td>
                </tr>
                <tr>
                    <td> <label for="aadharnumber">
                Aadhar Number:
            
            </label></td>
            <td><input type="text" class="form-control" name="aadharnumber" readonly value="<?php echo "$row[aadharnumber]"?>"><br></td>
                </tr>
                <tr>
                    <td><label for="phonenumber">
                Mobile Number:
            </label></td>
                    <td><input type="text" class="form-control" name="phonenumber"readonly  value="<?php echo "$row[phonenumber]"?>"><br></td>
</tr>
                
               
                    <input class="form-control" type="hidden"readonly name="transactionno" value="<?php

echo(rand(913258741,999999999));
?>">
                <tr>
                    <td><label for="type">
                Transaction Type:
            </label></td>
                <table class="into">
                       <td><input type="hidden" class="form-control" name="sharemoney"></td>
                       <td><input type="hidden" class="form-control" name="cdcr"></td><br>
                       <td><input type="hidden" class="form-control" name="odcr"></td><th>Loan Deposit</th>
                       <?php
                       $accountno = $_POST['accountno'];

                       $sql = "SELECT  SUM(ldcr-lddr)+SUM(ldcr-lddr)*1.25/100 from newloan where accountno = $accountno";
                       $result = $conn->query($sql);
                       //display data on web page
                       while($row = mysqli_fetch_array($result)){
                        ?>
                       <td><input type="number" class="form-control" name="lddr" readonly value="<?php


echo $row['SUM(ldcr-lddr)+SUM(ldcr-lddr)*1.25/100'];

?>"></td>
<?php
                       }
?>


                       <input type="hidden" name="cddr">
                       <input type="hidden" name="oddr">
                       <input type="hidden" name="ldcr">
                </table>
                </tr>
                <tr>
                    <td><button name="submit" class="btn btn-success">Deposit</button></td>
                    <td><button type="reset" class="btn btn-danger">Cancel Transaction</button></td>
                </tr>
            </table>
            
        </form>
    </div>
    </div>
    </div>
</div>

</body>
</html>