<?php

// connect to database
$db = mysqli_connect('localhost', 'root', 'LAP254678', 'printersys');

//code for testing form.
 if (isset($_POST['texpenses'])) {
  # code...
  $requestees = $_POST['requestees'];
  $branch = $_POST['branch'];
  $tonner = $_POST['tonner'];
  $request_date = date('y-m-d h:i:s');
  $technician = $_POST['technician'];
  $cost = $_POST['cost'];

  $sql = "INSERT INTO tmaintenance (requestees,branch,tonner,request_date,technician,cost) VALUES ('$requestees','$branch','$tonner','$request_date','$technician',$cost)";
   mysqli_query($db, $sql);
  if ($sql) {
    # code...
    echo "<script>alert('Request Successful.');</script>";
  }
  else
  {
    echo "<script>alert('Error in Request.');</script>";
    mysqli_close($db);
  }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Test form</title>
</head>
<body>


	      <form method="post" action="" enctype="multipart/form-data">
        
          <div class="row">

          <div class="col-md-6 mb-3">
            <label>Requested by</label>
            <input type="text" class="form-control" name="requestees" placeholder="Enter your official name"  required>  
            <div class="invalid-feedback">
                  Valid Official name is required.
            </div>          
          </div>

          <div class="col-md-6 mb-3">
            <label>Branch Name</label>
            <select class="custom-select d-block w-100" name="branch" required>
              <option value="">Choose...</option>
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
            <div class="invalid-feedback">
                 Please select a valid option.
            </div> 
           </div>
        </div>

        <div class="mb-3">
          <label>Printer Type</label>
          <input type="text" class="form-control" name="printer" placeholder="Type the name of the Printer" required>
          <div class="invalid-feedback">
                  Valid Printer name is required.
          </div> 
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label>Technician's Name</label>
            <input type="text" class="form-control" name="technician" placeholder="Enter the name of the technician"  required>
            <div class="invalid-feedback">
                  Valid name of technician is required.
            </div> 
          </div>

          <div class="col-md-6 mb-3">
            <label>Cost</label>
            <input type="text" class="form-control" name="cost" placeholder="Enter total cost in KES"  required>
            <div class="invalid-feedback">
                  Valid price cost is required.
            </div> 
          </div>
        </div>

          <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-signup" name="texpenses" type="submit">Submit Data</button>
      </form>

</body>
</html>