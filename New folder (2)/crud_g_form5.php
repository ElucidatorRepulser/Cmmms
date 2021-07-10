<?php
include 'backend/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Manage - Application For Scholarship Of Laguna</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/crud_user.css?v=<?php echo time(); ?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<script src="ajax/ajax5.js"></script>
</head>

<body>

<!--table-->
<div class="container">
  <p id="success"></p>
  <div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-6">
          <h2>Manage <b>Records</b></h2>
        </div>
        <div class="col-sm-6"> <a href="logout.php" type="button" class="btn btn-danger" id="logout_btn" style="text-align: right; background: gray" ><i class="material-icons">&#xe9ba;</i>Logout</a> <a href="g_form1.php" type="button" class="btn btn-danger" id="back_btn" style="text-align: right; background: gray" ><i class="material-icons">&#xe85d;</i>back</a> <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xe7fe;</i> <span>Add Records</span></a> <a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons">&#xef66;</i> <span>Delete</span></a> </div>
      </div>
    </div>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th> <span class="custom-checkbox">
            <input type="checkbox" id="selectAll">
            <label for="selectAll"></label>
            </span> </th>
          <th>ID</th>
          <th>First Name</th>
          <th>Middle Name</th>
          <th>Last Name</th>
          <th>Date Of Birth</th>
          <th>City</th>
          <th>Province</th>
          <th>Gender</th>
          <th>Civil Status</th>
          <th>Citizenship</th>
          <th>Mobile Number</th>
          <th>Email</th>
          <th>School Sector</th>
          <th>Highest Attained Grade/ Year Level</th>
          <th>Present Address</th>
          <th>Permanent Address</th>
          <th>Zip Code</th>
          <th>School Address</th>
          <th>Type of Disability</th>
          <th>IP Affiliation</th>
          <th>Occupation</th>
          <th>Employer Address</th>
          <th>Name of Employer</th>
          <th>Hightest Educational Attainment</th>
          <th>Total Parents Taxable Income</th>
          <th>No. of Siblings in the Family</th>
          <th>ACTION</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $result = mysqli_query( $conn, "SELECT * FROM iskoched" );
        $i = 1;
        while ( $row = mysqli_fetch_array( $result ) ) {
            ?>
        <tr id="<?php echo $row["id"]; ?>">
          <td><span class="custom-checkbox">
            <input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["id"]; ?>">
            <label for="checkbox2"></label>
            </span></td>
          <td><?php echo $i; ?></td>
          <td><?php echo $row["fname"]; ?></td>
          <td><?php echo $row["mname"]; ?></td>
          <td><?php echo $row["lname"]; ?></td>
          <td><?php echo $row["dob"]; ?></td>
          <td><?php echo $row["city"]; ?></td>
          <td><?php echo $row["prov"]; ?></td>
          <td><?php echo $row["gender"]; ?></td>
          <td><?php echo $row["cs"]; ?></td>
          <td><?php echo $row["czs"]; ?></td>
          <td><?php echo $row["mpho"]; ?></td>
          <td><?php echo $row["email"]; ?></td>
          <td><?php echo $row["schoolsec"]; ?></td>
          <td><?php echo $row["hag"]; ?></td>
          <td><?php echo $row["pa"]; ?></td>
          <td><?php echo $row["padd"]; ?></td>
          <td><?php echo $row["zc"]; ?></td>
          <td><?php echo $row["sa"]; ?></td>
          <td><?php echo $row["tod"]; ?></td>
          <td><?php echo $row["ipa"]; ?></td>
          <td><?php echo $row["occ"]; ?></td>
          <td><?php echo $row["ea"]; ?></td>
          <td><?php echo $row["noe"]; ?></td>
          <td><?php echo $row["hea"]; ?></td>
          <td><?php echo $row["tp"]; ?></td>
          <td><?php echo $row["sif"]; ?></td>
          <td><a href="#editEmployeeModal" class="edit" data-toggle="modal"> 
			  <i class="material-icons update" data-toggle="tooltip"
							data-id="<?php echo $row["id"]; ?>"
							data-fname="<?php echo $row["fname"]; ?>"
							data-mname="<?php echo $row["mname"]; ?>"
							data-lname="<?php echo $row["lname"]; ?>"
							data-dob="<?php echo $row["dob"]; ?>"
							data-city="<?php echo $row["city"]; ?>"
							data-prov="<?php echo $row["prov"]; ?>"
							data-gender="<?php echo $row["gender"]; ?>"
							data-cs="<?php echo $row["cs"]; ?>"
							data-czs="<?php echo $row["czs"]; ?>"
							data-mpho="<?php echo $row["mpho"]; ?>"
							data-email="<?php echo $row["email"]; ?>"
							data-schoolsec="<?php echo $row["schoolsec"]; ?>"
							data-hag="<?php echo $row["hag"]; ?>"
							data-pa="<?php echo $row["pa"]; ?>"
							data-padd="<?php echo $row["padd"]; ?>"
							data-zc="<?php echo $row["zc"]; ?>"
							data-sa="<?php echo $row["sa"]; ?>"
							data-tod="<?php echo $row["tod"]; ?>"
							data-ipa="<?php echo $row["ipa"]; ?>"
							data-occ="<?php echo $row["occ"]; ?>"
							data-ea="<?php echo $row["ea"]; ?>"
							data-noe="<?php echo $row["noe"]; ?>"
							data-hea="<?php echo $row["hea"]; ?>"
							data-tp="<?php echo $row["tp"]; ?>"
							data-sif="<?php echo $row["sif"]; ?>"
							title="Edit">&#xE254;</i>
			  </a>
			  <a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip"
						 title="Delete">&#xE872;</i></a></td>
        </tr>
        <?php
        $i++;
        }
        ?>
      </tbody>
    </table>
	  
  </div>
</div>
<!-- Add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="user_form">
        <div class="modal-header">
          <h4 class="modal-title">Add Records</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
        <div class="form-group">
          <label>First Name</label>
          <input type="text" id="fname" name="fname" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Middle Name</label>
          <input type="text" id="mname" name="mname" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Last Name</label>
          <input type="text" id="lname" name="lname" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Date of Birth</label>
          <input type="date" id="dob" name="dob" class="form-control" required>
        </div>
        <div class="form-group">
          <label>City</label>
          <input type="text" id="city" name="city" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Province</label>
          <input type="text" id="prov" name="prov" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Sex</label>
          <select name="gender" id="gender"class="form-control"required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </div>
        <div class="form-group">
          <div class="form-group">
            <label>Civil Status</label>
            <select name="cs" id="cs" class="form-control" required>
              <option value="Single">Single</option>
              <option value="Married">Married</option>
              <option value="Annulled">Annulled</option>
              <option value="Widowed">Widowed</option>
              <option value="Separated">Separated</option>
              <option value="Others">Others</option>
            </select>
          </div>
          <div class="form-group">
            <label>Citizenship</label>
            <input type="text" id="czs" name="czs" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Mobile Number</label>
            <input type="text" id="mpho" name="mpho" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" id="email" name="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label>School Sector</label>
            <input type="text" id="schoolsec" name="schoolsec" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Highest Attained Grade/Year Level</label>
            <input type="text" id="hag" name="hag" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Present Address</label>
            <input type="text" id="pa" name="pa" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Permanent Address</label>
            <input type="text" id="padd" name="padd" class="form-control">
          </div>
          <div class="form-group">
            <label>Zip Code</label>
            <input type="number" id="zc" name="zc" class="form-control" required>
          </div>
          <div class="form-group">
            <label>School Address</label>
            <input type="text" id="sa" name="sa" class="form-control">
          </div>
          <div class="form-group">
            <label>Type of Disability</label>
            <input type="text" id="tod" name="tod" class="form-control" required>
          </div>
          <div class="form-group">
            <label>IP Affiliation</label>
            <input type="number" id="ipa" name="ipa" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Occupation</label>
            <input type="text" id="occ" name="occ" class="form-control">
          </div>
          <div class="form-group">
            <label>Employer Address</label>
            <input type="text" id="ea" name="ea" class="form-control">
          </div>
          <div class="form-group">
            <label>Name of Employer</label>
            <input type="text" id="noe" name="noe" class="form-control">
          </div>
          <div class="form-group">
            <label>Highest Educational Attainment</label>
            <input type="text" id="hea" name="hea" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Total Parents Taxable Income</label>
            <input type="number" id="tp" name="tp" class="form-control" required>
          </div>
          <div class="form-group">
            <label>No. of Siblings in the Family</label>
            <input type="number" id="sif" name="sif" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" value="1" name="type">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <button type="button" class="btn btn-success" id="btn-add">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="update_form">
        <div class="modal-header">
          <h4 class="modal-title">Edit User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="id_u" name="id" class="form-control" required>
          <div class="form-group">
            <label>First Name</label>
            <input type="text" id="fname_u" name="fname" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Middle Name</label>
            <input type="text" id="mname_u" name="mname" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" id="lname_u" name="lname" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Date of Birth</label>
            <input type="date" id="dob_u" name="dob" class="form-control" required>
          </div>
          <div class="form-group">
            <label>City</label>
            <input type="text" id="city_u" name="city" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Province</label>
            <input type="text" id="prov_u" name="prov" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Sex</label>
            <select name="gender" id="gender_u"class="form-control"required>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
          <div class="form-group">
            <label>Civil Status</label>
            <select name="cs" id="cs_u" class="form-control" required>
              <option value="Single">Single</option>
              <option value="Married">Married</option>
              <option value="Annulled">Annulled</option>
              <option value="Widowed">Widowed</option>
              <option value="Separated">Separated</option>
              <option value="Others">Others</option>
            </select>
          </div>
          <div class="form-group">
            <label>Citizenship</label>
            <input type="text" id="czs_u" name="czs" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Mobile Number</label>
            <input type="text" id="mpho_u" name="mpho" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" id="email_u" name="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label>School Sector</label>
            <input type="text" id="schoolsec_u" name="schoolsec" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Highest Attained Grade/Year Level</label>
            <input type="text" id="hag_u" name="hag" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Present Address</label>
            <input type="text" id="pa_u" name="pa" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Permanent Address</label>
            <input type="text" id="padd_u" name="padd" class="form-control">
          </div>
          <div class="form-group">
            <label>Zip Code</label>
            <input type="number" id="zc_u" name="zc" class="form-control" required>
          </div>
          <div class="form-group">
            <label>School Address</label>
            <input type="text" id="sa_u" name="sa" class="form-control">
          </div>
          <div class="form-group">
            <label>Type of Disability</label>
            <input type="text" id="tod_u" name="tod" class="form-control" required>
          </div>
          <div class="form-group">
            <label>IP Affiliation</label>
            <input type="number" id="ipa_u" name="ipa" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Occupation</label>
            <input type="text" id="occ_u" name="occ" class="form-control">
          </div>
          <div class="form-group">
            <label>Employer Address</label>
            <input type="text" id="ea_u" name="ea" class="form-control">
          </div>
          <div class="form-group">
            <label>Name of Employer</label>
            <input type="text" id="noe_u" name="noe" class="form-control">
          </div>
          <div class="form-group">
            <label>Highest Educational Attainment</label>
            <input type="text" id="hea_u" name="hea" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Total Parents Taxable Income</label>
            <input type="number" id="tp_u" name="tp" class="form-control" required>
          </div>
          <div class="form-group">
            <label>No. of Siblings in the Family</label>
            <input type="number" id="sif_U" name="sif" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" value="2" name="type">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <button type="button" class="btn btn-info" id="update">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h4 class="modal-title">Delete User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="id_d" name="id" class="form-control">
          <p>Are you sure you want to delete these Records?</p>
          <p class="text-warning"><small>This action cannot be undone.</small></p>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <button type="button" class="btn btn-danger" id="delete">Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
