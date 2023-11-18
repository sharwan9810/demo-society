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
<style>
    h2{
        text-align: center;
    }

    @media print{
        body{
            visibility: hidden;
        }
        table, h2, img{
            visibility: visible;
        }
    }
</style>
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

<table class=" table table-striped table-bordered">
            <div class="base">
                <center>
                    <form action="odstetement.php" method="post">
                    <input type="number" name="accountno" class="form-select">
        <button value="submit" class="btn btn-primary">CONTINUE</button><br>
                    </form>
<?php
        error_reporting(E_ERROR | E_PARSE);

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
<h2>Member Account Statement for Account: <?php echo $row['accountno'] ?></h2>
    </center>
</div>
        <tr>
        <th>Date of Transaction</th>
        <th>Transaction Number</th>
        <th>Share Money</th>
        <th colspan="3">Compulsory Deposit</th>
        <th colspan="3">Optional Deposit</th>
        <th colspan="3">Loan Deposit</th>
        <th colspan="2">Interest</th>
        </tr>
        <tr style="font-weight: 600; font-size: 18px;">
                <td>Total</td>
                <td></td>
                <td><?php
error_reporting(0);
$accountno = $_POST['accountno'];

$sql = "SELECT  SUM(sharemoney) from newloan where accountno = $accountno";
$result = $conn->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
echo $row['SUM(sharemoney)'];
}
?></td>

                <td><?php

$accountno = $_POST['accountno'];

$sql = "SELECT  SUM(cdcr) from newloan where accountno = $accountno";
$result = $conn->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
echo $row['SUM(cdcr)'];
}
?></td><td><?php

$accountno = $_POST['accountno'];

$sql = "SELECT  SUM(cddr) from newloan where accountno = $accountno";
$result = $conn->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
echo $row['SUM(cddr)'];
}
?></td>


<td></td>

                <td><?php

$accountno = $_POST['accountno'];

$sql = "SELECT  SUM(odcr) from newloan where accountno = $accountno";
$result = $conn->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
echo $row['SUM(odcr)'];
}
?></td><td><?php

$accountno = $_POST['accountno'];

$sql = "SELECT  SUM(oddr) from newloan where accountno = $accountno";
$result = $conn->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
echo $row['SUM(oddr)'];
}
?></td>
<td></td>

                <td><?php

$accountno = $_POST['accountno'];

$sql = "SELECT  SUM(ldcr) from newloan where accountno = $accountno";
$result = $conn->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
echo $row['SUM(ldcr)'];
}
?></td><td><?php

$accountno = $_POST['accountno'];

$sql = "SELECT  SUM(lddr) from newloan where accountno = $accountno";
$result = $conn->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
echo $row['SUM(lddr)'];
}
?></td>
<td></td>

        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Credit</td>
            <td>Debit</td>
            <td>Balance</td>

            <td>Credit</td>
            <td>Debit</td>
            <td>Balance</td>

            <td>Credit</td>
            <td>Debit</td>
            <td>Balance</td>

            <td>Credit</td>
            <td>Debit</td>



        </tr>
<?php
error_reporting(E_ERROR | E_PARSE);
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

        $sql = "SELECT * FROM newloan WHERE accountno = $accountno ";
        $result = mysqli_query($conn, $sql);

  


        if ($result -> num_rows > 0){
            while ($row = $result -> fetch_assoc()){
                echo"<tr><td>". $row['date'] ."</td><td>". $row['transactionno']. "</td><td>". $row['sharemoney'] ."</td><td>". $row['cdcr']."</td><td>". $row['cddr'] . "</td><td>". $row['SUM(cdcr * 2 / 100)'].  "</td><td>". $row['odcr']."</td><td>". $row['oddr'] .  "</td><td>". $row['odcr-oddr'] ."</td><td>".  $row['ldcr']. "</td><td>".$row['lddr'] . "</td><td>".  $row['loan']."</td><td>".  $row[$percentage]."</td></tr>";
            }
            echo "</table>";
        }else{
            echo "no record found";
        }
    
        $percentage = "SELECT SUM(cdcr * 1.25 / 100) from newloan where accountno = $accountno";
        $result = $conn->query($percentage);
        while($row = mysqli_fetch_array($result)){
            // echo $row['SUM(cdcr * 1.25 / 100)'];
    
        }
        // mysqli_close($conn);
    }
    ?>
    <div>
        
        <table class="table">
            <tr>
                <td>Total Deposit: <?php
        error_reporting(E_ERROR | E_PARSE);


$accountno = $_POST['accountno'];

$query1 = "SELECT  SUM(sharemoney+cdcr+odcr) from newloan where accountno = $accountno";
$result = $conn->query($query1);
//display data on web page
while($row = mysqli_fetch_array($result)){
echo $row['SUM(sharemoney+cdcr+odcr)'];
}
?></td><td>Total Withdrawals: <?php

$accountno = $_POST['accountno'];

$query2 = "SELECT  SUM(cddr+oddr) from newloan where accountno = $accountno";
$result = $conn->query($query2);
//display data on web page
while($row = mysqli_fetch_array($result)){
echo $row['SUM(cddr+oddr)'];
}
?>&nbsp;&nbsp;</td>


<td>Total Interest: <?php

$accountno = $_POST['accountno'];

$percentage = "SELECT SUM((sharemoney+cdcr+odcr)-(cddr+oddr))*1.25/100 from newloan where accountno = $accountno";
        $result = $conn->query($percentage);
        while($row = mysqli_fetch_array($result)){
            echo $row['SUM((sharemoney+cdcr+odcr)-(cddr+oddr))*1.25/100'];
    
        }

?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

<td>Total Balance: <?php

$accountno = $_POST['accountno'];

$percentage = "SELECT SUM(sharemoney+cdcr+odcr) + SUM((sharemoney+cdcr+odcr)-(cddr+oddr))*1.25/100 from newloan where accountno = $accountno";
        $result = $conn->query($percentage);
        while($row = mysqli_fetch_array($result)){
            echo $row['SUM(sharemoney+cdcr+odcr) + SUM((sharemoney+cdcr+odcr)-(cddr+oddr))*1.25/100'];
    
        }

?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

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

$sql = "SELECT  SUM(ldcr-lddr) from newloan where accountno = $accountno";
$result = $conn->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
echo $row['SUM(ldcr-lddr)'];
}
?>
</td>
<td>
    Liability To be Refunded: <?php

$accountno = $_POST['accountno'];

$sql = "SELECT (SUM(lddr)-SUM(ldcr)) from newloan where accountno = $accountno";
$result = $conn->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
echo $row['(SUM(lddr)-SUM(ldcr))'];
}
?>
</td>
            </tr>
        </table>
    </div>

    </div>
    <p>***This is system generated statement hence requires no signature.</p>
    <p>***If you find any discrepency in the statement please notify the branch as soon as possible.</p>

    <div class="container">
    <button class="button btn btn-primary" onclick="window.print()">Print</button>
</div>
    </table>     

        </form>
    </div>
    </div>
    </div>
    </div>

</body>
</html>