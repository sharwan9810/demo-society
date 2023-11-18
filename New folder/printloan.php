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
    @media print{
        body{
            visibility: hidden;
        }
        .loans{
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

<div class="container">
    <h2>Print Loan Application</h2>
    <form action="printloan.php" method="POST">
        <input type="text" name="lan" class="form-control" placeholder="Enter Loan Account Number"><br>
        <button name="submit" class="btn btn-primary" type="submit">Submit</button>
    </form>

    <form action="printloan.php" method="POST">
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

        $lan = $_POST['lan'];

        $sql = "SELECT * FROM loans WHERE lan = $lan";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo '<img class="loanlo" style="width: 170px; height: auto;" src="lo.png"><br>';
                echo "First Name: " . $row['fname']. "&nbsp;&nbsp;&nbsp;";
                echo "Mobile Number: " . $row['phonenumber'];
                // Add more fields as needed
            } else {
                echo "<script>alert('Invalid Loan Account Number')</script>";
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
    ?>
    <div class="loans" id="loans">
        <h1 style="text-align: center;">Loan Application</h1>
        <table class="table table-striped table-sm">
            <tr>
                <td>Applicant Name</td>
                <td>:</td>
                <td><?php echo $row['fname'];?></td>
            </tr>
            <tr>
                <td>Applicant Account Number</td>
                <td>:</td>
                <td><?php echo $row['accountno'];?></td>
            </tr>
            <tr>
                <td>Applicant Aadhar Number</td>
                <td>:</td>
                <td><?php echo $row['aadharnumber'];?></td>
            </tr><tr>
                <td>Applicant PAN Number</td>
                <td>:</td>
                <td><?php echo $row['pannumber'];?></td>
            </tr><tr>
                <td>Applicant Correspondance Address</td>
                <td>:</td>
                <td><?php echo $row['caddress'];?></td>
            </tr><tr>
                <td>Applicant Pernament Address</td>
                <td>:</td>
                <td><?php echo $row['paddress'];?></td>
            </tr><tr>
                <td>Applicant Mobile Number</td>
                <td>:</td>
                <td><?php echo $row['phonenumber'];?></td>
            </tr><tr>
                <td>Applicant Email ID</td>
                <td>:</td>
                <td><?php echo $row['emailid'];?></td>
            </tr>
            <tr>
                <td>Loan Amount</td>
                <td>:</td>
                <td><?php echo $row['amount']; ?></td>
            </tr>
            <tr>
                <td>Application Date</td>
                <td>:</td>
                <td><?php echo $row['statusdate']; ?></td>
            </tr>
            <tr>
                <td>Loan Status</td>
                <td>:</td>
                <td><?php echo $row['loanstatus']; ?></td>
            </tr>
            <tr>
                <td>Sanctioned Amount</td>
                <td>:</td>
                <td><?php echo $row['ldcr']; ?></td>
            </tr>
            <tr>
                <td>Payment Made Through</td>
                <td>:</td>
                <td><?php echo $row['method']; ?></td>
            </tr>
        </table>
</div>
        <button class="btn btn-info" onclick="window.print()">Print this page</button>
        <a value="Get Schedule" class="btn btn-primary" href="generateshcedule.php?amount=<?php echo '10000'?>&<?php echo 'interest=10' ?>&<?php echo 'tenure=10' ?>&<?php echo 'date=2023-11-15' ?>">Get Schedule</a>

    </form>
    
</div>

</body>
</html>