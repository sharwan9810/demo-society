
<?php include_once('generateshcedulefunction.php'); ?>

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
        .loan-details{
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
error_reporting(E_ERROR | E_PARSE);
if(isset($_POST['amount'])){
    $_POST['amount'] = str_replace(',' ,'' ,$_POST['amount']);
    $emi = PMT($_POST['interest'], $_POST['tenure'], $_POST['amount']);
    $balance = $_POST['amount'];
    $payment_date = $_POST['date'];
}
?>


<div class="container">
    <h2>Loan EMI Calculator and Schedule Generator</h2>

    <div class="loan">
    <div class="heading">
    <h1>
        LOAN EMI
    </h1>
    <div class="form">
        <form action="" method="post">
            <div class="field">
                <label for="amount">
                    Loan Amount
                </label><br>
                <input type="text" class="form-control" name="amount" value="<?php echo number_format(@$_POST['amount'],0); ?>" required>
            </div><br>
            <div class="field">
                <label for="interest">
                    Interest(%)
                </label><br>
                <input type="number" class="form-control" name="interest" value="<?php echo @$_POST['interest']; ?>" required>
            </div><br>
            <div class="field">
                <label for="tenure">
                    Loan Tenure(Years)
                </label><br>
                <input type="number" class="form-control" name="tenure" value="<?php echo @$_POST['tenure']; ?>" required>
            </div><br>
            <div class="field">
                <label for="date">
                    Loan Start Date
                </label><br>
                <input type="date" class="form-control" name="date" value="<?php echo @$_POST['date']; ?>" required>
            </div><br>
            <input type="submit" value="Submit" class="btn btn-primary">
           <a href="createloan.php"> <input type="button" value="Apply Loan Now" class="btn btn-info"></a>
        </form>
    </div>
</div>
<br><br><br><br>

</div>



<div class="loan-details">
    <h3>Loan Schedule</h3>
    <div>
        Monthly Payment Information for Loan amount to <?php echo showValue($emi); ?>
    </div>
    <table class="table table-sm table-bordered">
        <thead>
            <tr>
                <th>S No.</th>
                <th>Payment Date</th>
                <th>Monthly EMI</th>
                <th>Interest Paid</th>
                <th>Principal Paid</th>
                <th>Balance</th>

            </tr>
        </thead>
        <tbody>
            <?php for($i=1;$i<=$_POST['tenure']*12;$i++){?>

                <?php
                    $interest = (($_POST['interest']/100)*$balance)/12;
                    $principal = $emi - $interest;
                    $balance = $balance - $principal;
                    $payment_date = date('d-m-Y', strtotime("+1 month", strtotime($payment_date)));
                    ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $payment_date ?></td>
                <td><?php echo showValue($emi);?></td>
                <td><?php echo showValue($interest);?></td>
                <td><?php echo showValue($principal);?></td>
                <td><?php echo showValue($balance);?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
 
</div>
<button class="btn btn-primary" onclick="window.print()">Print this page</button>
</div>

</body>
</html>