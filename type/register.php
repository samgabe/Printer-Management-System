<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>" required>
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>" required>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1" required>
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2" required>
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>
     <form class="needs-validation" novalidate method="post" action="make-prequests.php" enctype="multipart/form-data">
        <div class="row">

          <div class="col-md-6 mb-3">
            <label>Requested by</label>
            <input type="text" class="form-control" name="requestee" placeholder="Enter your official name"  required>            
          </div>

          <div class="col-md-6 mb-3">
            <label>Branch Name</label>
            <select class="custom-select d-block w-100" name="branch" required>
              <options>Choose...</option>
              <option>Kenyatta Avenue Branch 1</option>
              <option>Kawangware Branch</option>
              <option>Ongata Rongai Branch</option>
              <option>Nakuru Branch</option>
              <option>Embu Branch </option>
              <option>Kenyatta Avenue Branch 2</option>
              <option>Thika Branch</option>
              <option>Ruaka Branch</option>
              <option>Meru Branch</option>
              <option>Nyeri Branch</option>
              <option>Kitengela Branch</option>
              <option>Thika Road Branch</option>
              <option>Mwea Branch</option>
              <option>Mombasa Branch</option>
              <option>Eldoret Branch</option>
              <option>Donholm Branch</option>
              <option>Kariobangi Branch</option>
              <option>Narok Branch</option>
              <option>Nanyuki Branch</option>

            </select>
           </div>
        </div>

        <div class="mb-3">
          <label>Printer Type</label>
          <input type="text" class="form-control" name="printer" placeholder="Type the name of the Printer">
          
        </div>

        <div class="mb-3">
          <label>Request Date</label>
          <input type="date" class="form-control" name="request-date" required>
          
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label>Requested Quantity</label>
            <input type="text" class="form-control" name="quantity" placeholder="Enter No of printers requested"  required>
            
          </div>

          <div class="col-md-6 mb-3">
            <label>Price</label>
            <input type="text" class="form-control" name="price" placeholder="Enter total price in KES"  required>
            
          </div>
        </div>

          <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-signup" name="prequest" type="submit">Submit Request</button>
      </form>