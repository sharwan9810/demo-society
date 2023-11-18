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

<div class="container">
    <h2>Ceate New Membership</h2>
    
    <form>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" readonly value="Application Date">
    </div>
    <div class="col">
      <input type="text" class="form-control" readonly value="<?php echo date("d/m/Y") ?>" >
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" readonly value="Membership Commencement date">
    </div>
    <div class="col">
      <input type="text" class="form-control" readonly value="<?php echo date("d/m/Y") ?>">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" readonly value="Reference Number">
    </div>
    <div class="col">
      <input type="number" name="token" readonly class="form-control" readonly value="<?php echo rand(1590000,1599999) ?>">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="fname" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="lname" placeholder="Last name">
    </div>
  </div>
  <br>
  <div class="row">
  <div class="form-group col-md-4">
      <select id="inputState" class="form-control" name="gender">
        <option selected>Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Others">Others</option>
      </select>
    </div>
    <div class="col">
      <input type="date" class="form-control" placeholder="Date of Birth" name="dob">
    </div>
  </div>
  <br>  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="fathername" placeholder="Father name">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="spouse" placeholder="Marital Status">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <input type="text" name="caddress" class="form-control" placeholder="Correspondance Address">
    </div>
    <div class="col">
      <input type="text" name="paddress" class="form-control" placeholder="Permanent Address">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <input type="text" name="pannumber" class="form-control" placeholder="Enter PAN Number">
    </div>
    <div class="col">
      <input type="text" name="aadharnumber" class="form-control" placeholder="Enter Aadhar Number">
    </div>
  </div>
  <br>
  <div class="row">
  <div class="form-group col-md-4">
      <select id="inputState" class="form-control" name="occupation">
        <option selected>Occupation</option>
        <option value="Self Employed">Self Employed</option>
        <option value="Student">Student</option>
        <option value="Govt Employee">Govt Employee</option>
        <option value="PVT Employee">PVT Employee</option>
        <option value="Housewife">Housewife</option>
        <option value="Others Individuals">Others Individuals</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <select id="inputState" class="form-control" name="religion">
        <option selected>Religion</option>
        <option value="Muslim">Muslim</option>
        <option value="Hindu">Hindu</option>
        <option value="Sikhs">Sikhs</option>
        <option value="Jain">Jain</option>
        <option value="Boddhist">Bodhhist</option>
        <option value="Others">Others</option>
      </select>
    </div>
  </div>
  <br>
  <div class="row">
  <div class="form-group col-md-4">
      <select id="inputState" class="form-control" name="religion">
        <option selected>Property Status</option>
        <option value="Owned">Owned</option>
        <option value="Rented">Rented</option>
        <option value="Company Provided">Company Provided</option>
        <option value="Not Specified">Not Specified</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <select id="inputState" class="form-control" name="religion">
        <option selected>Social Category</option>
        <option value="SC">SC</option>
        <option value="ST">ST</option>
        <option value="OBC">OBC</option>
        <option value="General">General</option>
        <option value="Minority">Minority</option>
        <option value="Others">Others</option>
      </select>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <input type="text" name="annualincome" class="form-control" placeholder="Annual Income">
    </div>
    <div class="col">
      <input type="email" name="emailid" class="form-control" placeholder="Email ID">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <input type="number" name="phonenumber" class="form-control" placeholder="Phone Number">
    </div>
    <div class="col">
      <input type="number" name="alternatephone" class="form-control" placeholder="Alternate Phone Number">
    </div>
  </div>
  <br>
<hr>
<div class="row">
    <div class="col">
      <input type="text" name="nomineename" class="form-control" placeholder="Nominee Name">
    </div>
    <div class="col">
      <input type="number" name="nomineeage" class="form-control" placeholder="Nominee Age">
    </div>
  </div>
  <br>
  <div class="row">
  <div class="form-group col-md-4">
      <select id="inputState" class="form-control" name="religion">
        <option selected>Nominee Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <select id="inputState" class="form-control" name="religion">
        <option selected>Relation with Nominee</option>
        <option value="Mother">Mother</option>
        <option value="Father">Father</option>
        <option value="Son">Son</option>
        <option value="Daughter">Daughter</option>
        <option value="Husband">Husband</option>
        <option value="Wife">Wife</option>
        <option value="Nephew">Nephew</option>
        <option value="Niece">Niece</option>
        <option value="Not Specified">Not Specified</option>
      </select>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <input type="text" name="nomineeaddress" class="form-control" placeholder="Nominee Address">
    </div>
    <div class="col">
      <input type="text" name="guardianinminor" class="form-control" placeholder="Nominee Guardian if Minor">
    </div>
  </div><br>
  <button type="button" name="submit" class="btn btn-primary">Submit</button>
<button type="reset" href="index.php" class="btn btn-secondary">Cancel</button>
<br><hr>
<footer style="text-align: center;">&copy;2023 Society Name All Rights Reserved</footer>

</form>
</div>


</body>
</html>