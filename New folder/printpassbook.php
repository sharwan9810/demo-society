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
        table{
            visibility: visible;
            position: absolute;
            top: 0%;
            left: 0%;
            transform: translate(0%,0%);
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
<?php
error_reporting(E_ERROR | E_PARSE);
if (isset($_POST['image_id'])) {
    $imageId = $_POST['image_id'];
    $query = "SELECT image FROM images WHERE id = $imageId";
    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo '<img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" />';
    } else {
        echo "Image with ID $imageId not found.";
    }
}

?>

<form method="post" action="printpassbook.php">
    <div class="fetch-button">
        <label for="fetch">
            Enter Reference Number
        </label>
        <input type="text" class="form-control" placeholder="Enter Reference Number" name="token">
        <button value="Submit" id="button" name="submit" class="btn btn-success"  onClick="fetch();">CONTINUE</button>
    </div>
    </form>
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

        $token = $_POST['token'];

        $sql = "SELECT * FROM basicdata WHERE token = $token";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo "<h2>Passbook Front Page of: $aadharnumber</h2>";
                echo "First Name: " . $row['fname'] . "<br>";
                echo "Last Name: " . $row['lname'] . "<br>";
                echo "Gender: " . $row['gender'] . "<br>";
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
    <section class="passbook">
    <div class="page-passbook">
        <div class="table">
            <table class="table table-sm ">

            <tr style="text-align: center;">
            <td></td>
            <td></td>
            <td><img src="lo.png" alt="" style="width: 120px; height: auto;"></td>
            <td></td>

            <td></td>
        </tr>
            <tr style="text-align: center;">
            <td></td>
            <td></td>

            <td style="font-weight: 600; font-size: 19px;     font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
">Demo Society OD Account</td>
            <td></td>

            <td></td>
        </tr>
            <tr>
            
                <td>Branch Name</td>
                <td>:</td>
                <td>Main Branch&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>Phone</td>
                <td>:</td>
                <td>011 22784837</td>
            </tr><br>
            <tr>
                <td>Branch Address</td>
                <td>:</td>
                <td>1/8, Block 1, Trilok Puri, East Delhi, Delhi-110091</td>
            </tr><br>
            <tr>
                <td>Branch Email ID</td>
                <td>:</td>
                <td>demosociety@gmail.com</td>
            </tr><br>
            <tr>
                <td>Branch Unique Code</td>
                <td>:</td>
                <td>1A666868</td>
            </tr><br>
            <tr>
                <td>Customer Account Number</td>
                <td>:</td>
                <td><?php echo $row['accountno']?></td>
            </tr><br>
            <tr>
                <td>Customer Name</td>
                <td>:</td>
                <td><?php echo $row['fname']?></td>
            </tr><br>
            <tr>
                <td>Address</td>
                <td>:</td>
                <td><?php echo $row['paddress'] ?></td>
            </tr><br>
            <tr>
                <td>Nominee Name</td>
                <td>:</td>
                <td><?php echo $row['nomineename']?></td>
            </tr>
            </table>
        </div>
    </div>
    <div class="print">
    <input type="button" class="btn btn-primary" onclick="window.print()" value="Print" />
    </div>
</div>


</body>
</html>