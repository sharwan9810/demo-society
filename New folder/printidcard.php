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
        body,.buttons{
            visibility: hidden;
        }
        .container-one{
            visibility: visible;
            position: absolute;
            top: 0%;
            transform: translate(0%);
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
<div class="formin">
    <form method="post" action="printidcard.php">
    <form action="display_image.php" method="GET">
    <div class="fetch-button">
        <label for="fetch">
            Enter Referance Number
        </label>
        <input type="text" class="form-control" placeholder="Enter Referance Number" name="token">
        <button value="Submit" id="button" name="submit" class="btn btn-success"  onClick="fetch();">CONTINUE</button>
    </div><br>
    </form>
    </div>
    <div class="container container-one">
    <div class="intro">
        <h3>Demo Society</h3>
    </div>

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

        $token = $_POST['token'];

        $sql = "SELECT * FROM basicdata WHERE token = $token";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                // echo "<h2>Data for ID: $id</h2>";
                echo "<img style='
                width: 143px;'src='lo.png'>";
                echo "<h1>Customer ID Card</h1>";
                // echo "Last Name: " . $row['lname'] . "<br>";
                // echo "Gender: " . $row['gender'] . "<br>";
                // Add more fields as needed
            } else {
                echo "<Script>alert('Invailid Application Number Entered. Please Recheck the Application Number In Customer Account Allocation Tab.')</Script>";
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
    ?>
<div class="data-table">
    <table class="table table-striped">
    <?php
echo "Date: " . date("d/m/Y") . "<br>";
?>
 
        <thead>Identification Details</thead>
        <tr>
            <td>Application Number</td>
            <td><?php echo $row['token'] . "<br>" ?></td>
            <td>
<?php
// Assuming you have a database connection
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "enrollment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch image by ID from the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST["token"];

    $sql = "SELECT image_url FROM images WHERE token = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $token);
    $stmt->execute();
    $stmt->bind_result($imagePath);
    
    if ($stmt->fetch()) {
        // Display the image from the "uploads" folder
        $uploads = "../upload/uploads/"; // Update the folder name if needed
        $imageFullPath = $uploads . $imagePath;
        if (file_exists($imageFullPath)) {
            echo '<img style="
            height: 1.55in;
            width: 1.25in;
        " class="photo" src="' . $imageFullPath . '" alt="Image">';
        } else {
            echo "Image not found for ID: " . $token;
        }
    } else {
        echo "Image not found for ID: " . $token;
    }

    $stmt->close();
}

$conn->close();
?>
</td>
        </tr>
        <tr>
            <td>Account Number</td>
            <td><?php echo $row['accountno'] . "<br>" ?></td>
        </tr>
</table>
<table class="table table-sm" id="data">
        <tr>
            <td>First Name</td>
            <td><?php echo $row['fname'] . "<br>" ?></td>
            <td>Last Name</td>
            <td><?php echo $row['lname'] . "<br>" ?></td>
        </tr>
</table>
<table class="table table-sm">
        <tr>
            <td>Gender</td>
            <td><?php echo $row['gender'] . "<br>" ?></td>
        </tr>
        <!-- <tr>
            <td>Date of Birth</td>
            <td><?php echo $row['fathername'] . "<br>" ?></td>
        </tr> -->
        <tr>
            <td>Father's Name</td>
            <td><?php echo $row['fathername'] . "<br>" ?></td>
        </tr>

        <tr>
            <td>Permanent Address</td>
            <td><?php echo $row['paddress'] . "<br>" ?></td>
        </tr>
        <tr>
            <td>PAN Number</td>
            <td><?php echo $row['pannumber'] . "<br>" ?></td>
        </tr>
        <tr>
            <td>Aadhar Card Number</td>
            <td><?php echo $row['aadharnumber'] . "<br>" ?></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
            <p class="stat">Signature LTI Of Applicant</p>
            </td>
        </tr>
    </table>
    <table class="table table-sm" id="data">
        <thead>Contact Details</thead>
        <tr>
            <td>Mobile Number</td>
            <td><?php echo $row['phonenumber'] . "<br>" ?></td>
        </tr>
        <tr>
            <td>Email ID</td>
            <td><?php echo $row['emailid'] . "<br>" ?></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
            <p class="stat">Signature LTI Of Applicant</p>
            </td>
        </tr>
    </table>
<div class="buttons">
<button class="btn btn-info" onclick="window.print()">Print</button>
<button id="cmd" class="btn btn-primary">Get PDF</button>
</div>


</div>
</div>

</body>
</html>