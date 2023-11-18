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
            <li><a class="dropdown-item" href="membershipsearch.php">Fixed Deposit</a></li>
            <li><a class="dropdown-item" href="transactionsearch.php">Recurring Deposit</a></li>
            <li><a class="dropdown-item" href="loanrec.php">Send EMail Statement</a></li>
            <li><a class="dropdown-item" href="loansanc.php">Send SMS to Member</a></li>
            <li><a class="dropdown-item" href="finalizedloans.php">OD Account Statement</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="editdeposit.php">Change Nominee</a></li>
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
<?php

include 'connectionenrollment.php';

if(isset($_GET['transactionno'])){
    $transactionno = $_GET['transactionno'];

    $query = "SELECT * from newloan where transactionno = $transactionno";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die('Query Failed'.mysqli_error());
    }else{
        $row = mysqli_fetch_assoc($result);
    }
}

?>

<div class="container">
    <h2>Edit Wrong Entry</h2>
    <form action="editdeposit.php" method="post">
        <label for="accountno">
            Enter Transaction Number
        </label>
        <input type="text" class="form-control" name="transactionno">
        <button class="btn btn-primary" name="getdata" value="submit">CONTINUE</button>
    </form>
    <?php
    error_reporting(0);
    include_once 'connectionenrollment.php';
    if(isset($_POST['getdata'])){

        $transactionno = $_POST['transactionno'];

        $sql = "SELECT * FROM newloan WHERE transactionno = $transactionno";
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
        
        <form action="editdeposit.php" method="post">
            <table class="table table-striped">
            <tr>
                    <td> <label for="transactionno">
                Transaction Number:
            </label></td>
                    <td><input type="text" class="form-control" name="transactionno" readonly value="<?php echo "$row[transactionno]"?>"><br></td>
                </tr>
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
                    <td><label for="date">
                Date of Transaction:
            </label></td>
                    <td><input type="text" class="form-control" name="date"readonly  value="<?php echo "$row[date]"?>"><br></td>
</tr>
                <tr>
                    <td><label for="phonenumber">
                Mobile Number:
            </label></td>
                    <td><input type="text" class="form-control" name="phonenumber"readonly  value="<?php echo "$row[phonenumber]"?>"><br></td>
</tr>
                <tr>
                    <td><label for="type">
                Deposit Transaction Type:
            </label></td>
                <table class="into">
                       <th>Share Money</th>
                       <td><input type="number" value="<?php echo $row['sharemoney'] ?>" class="form-control" name="sharemoney"></td>
                       <th>Compluslory Deposit</th>
                       <td><input type="number" value="<?php echo $row['cdcr'] ?>" class="form-control" name="cdcr"></td><br>
                       <th>Optional Deposit</th>
                       <td><input type="number" value="<?php echo $row['odcr'] ?>" class="form-control" name="odcr"></td><th>Loan Deposit</th>
                       <td><input type="number" class="form-control" value="<?php echo $row['lddr'] ?>" name="lddr"></td>
                
                </tr>
                <table class="table table-striped">
                <tr>
                    <td><label for="type">
                Withdrawal Transaction Type:
            </label></td>
                <table class="into">
                <th>CD Withdrawal</th>
            <td><input type="number" value="<?php echo $row['cddr'] ?>" class="form-control" name="cddr"></td><br>
            <th>OD Withdrawal</th>
            <td><input type="number" value="<?php echo $row['oddr'] ?>" class="form-control" name="oddr"></td>
            <th>Loan Sanction</th>
            <td><input type="number" class="form-control" value="<?php echo $row['ldcr'] ?>" name="ldcr"></td>
                </table>
                </tr>
                <tr>
                    <td><button name="submit" class="btn btn-success">Update</button></td>
                    <td><button name="reset" type="reset" class="btn btn-danger">Cancel</button></td>
                </tr>
            </table>
            <?php 
    require('connectionenrollment.php');

    if(isset($_POST['submit'])){
        $transactionno = $_POST['transactionno'];
        $sharemoney = $_POST['sharemoney'];
        $cdcr = $_POST['cdcr'];
        $odcr = $_POST['odcr'];
        $ldcr = $_POST['ldcr'];
        $cddr = $_POST['cddr'];
        $oddr = $_POST['oddr'];
        $lddr = $_POST['lddr'];

        $sql = "UPDATE `newloan`
                SET `sharemoney` = '$sharemoney',
                    `cdcr` = '$cdcr',
                    `odcr` = '$odcr',
                    `ldcr` = '$ldcr',
                    `cddr` = '$cddr',
                    `oddr` = '$oddr',
                    `lddr` = '$lddr' 
                WHERE transactionno = $transactionno";
        
        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo "<script>alert('Record Updated Successfully, Now You Can Download Updated Statement')</script>";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>

        </form>
    </div>
    </div>
</div>

</body>
</html>