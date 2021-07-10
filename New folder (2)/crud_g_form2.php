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
<script src="ajax/ajax2.js"></script>
</head>

<body>

<!--table-->
<div class="container">
  <p id="success"></p>
  <div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-6">
          <h2>Manage <b>Users</b></h2>
        </div>
        <div class="col-sm-6"> <a href="logout.php" type="button" class="btn btn-danger" id="logout_btn" style="text-align: right; background: gray" ><i class="material-icons">&#xe9ba;</i>Logout</a> <a href="home.php" type="button" class="btn btn-danger" id="back_btn" style="text-align: right; background: gray" ><i class="material-icons">&#xe88a;</i>back</a> <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xe7fe;</i> <span>Add New User</span></a> <a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons">&#xef66;</i> <span>Delete</span></a> </div>
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
          <th>tin</th>
          <th>rdo</th>
          <th>name</th>
          <th>zip</th>
          <th>phone</th>
          <th>taxpayer</th>
          <th>PCIC</th>
          <th>pName</th>
          <th>pLocation</th>
          <th>pNumber</th>
          <th>DAwarded</th>
          <th>DCompleted</th>
          <th>DA_CP</th>
          <th>DC_CP</th>
          <th>DA_PBC</th>
          <th>DC_PBC</th>
          <th>DA_VAT</th>
          <th>DC_VAT</th>
          <th>DA_CWT</th>
          <th>DC_CWT</th>
          <th>DA_TAPT</th>
          <th>Relation</th>
          <th>DC_TAPT</th>
          <th>DA_CFP</th>
          <th>DC_CFP</th>
          <th>ACTION</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $result = mysqli_query( $conn, "SELECT * FROM contract" );
        $i = 1;
        while ( $row = mysqli_fetch_array( $result ) ) {
            ?>
        <tr id="<?php echo $row["id"]; ?>">
          <td><span class="custom-checkbox">
            <input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["id"]; ?>">
            <label for="checkbox2"></label>
            </span></td>
          <td><?php echo $i; ?></td>
          <td><?php echo $row["tin"]; ?></td>
          <td><?php echo $row["rdo"]; ?></td>
          <td><?php echo $row["name"]; ?></td>
          <td><?php echo $row["zip"]; ?></td>
          <td><?php echo $row["phone"]; ?></td>
          <td><?php echo $row["taxpayer"]; ?></td>
          <td><?php echo $row["PCIC"]; ?></td>
          <td><?php echo $row["pName"]; ?></td>
          <td><?php echo $row["pLocation"]; ?></td>
          <td><?php echo $row["pNumber"]; ?></td>
          <td><?php echo $row["DAwarded"]; ?></td>
          <td><?php echo $row["DCompleted"]; ?></td>
          <td><?php echo $row["DA_CP"]; ?></td>
          <td><?php echo $row["DC_CP"]; ?></td>
          <td><?php echo $row["DA_PBC"]; ?></td>
          <td><?php echo $row["DC_PBC"]; ?></td>
          <td><?php echo $row["DA_VAT"]; ?></td>
          <td><?php echo $row["DC_VAT"]; ?></td>
          <td><?php echo $row["DA_CWT"]; ?></td>
          <td><?php echo $row["DC_CWT"]; ?></td>
          <td><?php echo $row["DA_TAPT"]; ?></td>
          <td><?php echo $row["DC_TAPT"]; ?></td>
          <td><?php echo $row["DA_CFP"]; ?></td>
          <td><?php echo $row["DC_CFP"]; ?></td>
          <td><a href="#editEmployeeModal" class="edit" data-toggle="modal"> <i class="material-icons update" data-toggle="tooltip"
							data-id="<?php echo $row["id"]; ?>"
							data-name="<?php echo $row["tin"]; ?>"
							data-slot="<?php echo $row["rdo"]; ?>"
							data-age="<?php echo $row["name"]; ?>"
							data-sex="<?php echo $row["zip"]; ?>"
							data-status="<?php echo $row["phone"]; ?>"
							data-religion="<?php echo $row["religion"]; ?>"
							data-dob="<?php echo $row["taxpayer"]; ?>"
							data-pob="<?php echo $row["PCIC"]; ?>"
							data-resadd="<?php echo $row["pLocation"]; ?>"
							data-prov="<?php echo $row["pNumber"]; ?>"
							data-mun="<?php echo $row["DAwarded"]; ?>"
							data-brgy="<?php echo $row["DCompleted"]; ?>"
							data-cel="<?php echo $row["DA_CP"]; ?>"
							data-email="<?php echo $row["DC_CP"]; ?>"
							data-fat="<?php echo $row["DA_PBC"]; ?>"
							data-oc1="<?php echo $row["DC_PBC"]; ?>"
							data-inc1="<?php echo $row["DA_VAT"]; ?>"
							data-mot="<?php echo $row["DC_VAT"]; ?>"
							data-oc2="<?php echo $row["DA_CWT"]; ?>"
							data-inc2="<?php echo $row["DC_CWT"]; ?>"
							data-gua="<?php echo $row["DA_TAPT"]; ?>"
							data-rel="<?php echo $row["DC_TAPT"]; ?>"
							data-inc3="<?php echo $row["DA_CFP"]; ?>"
							data-cel1="<?php echo $row["DC_CFP"]; ?>"
							title="Edit">&#xE254;</i> </a> <a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip"
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
          <h4 class="modal-title">Add User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>tin</label>
            <input type="text" id="tin" name="tin" class="form-control" required>
          </div>
          <div class="form-group">
            <label>rdo</label>
            <input type="text" id="rdo" name="rdo" class="form-control" required>
          </div>
          <div class="form-group">
            <label>name</label>
            <input type="text" id="name" name="name" class="form-control" required>
          </div>
          <div class="form-group">
            <label>zip</label>
            <input type="text" id="zip" name="zip" class="form-control" required>
          </div>
          <div class="form-group">
            <label>phone</label>
            <input type="tel" id="phone" name="phone" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
          </div>
          <div class="form-group">
            <label>taxpayer</label>
            <input type="text" id="taxpayer" name="taxpayer" class="form-control" required>
          </div>
          <div class="form-group">
            <label>PSIC</label>
            <input type="date" id="PCIC" name="PCIC" class="form-control" required>
          </div>
          <div class="form-group">
            <label>pName</label>
            <input type="text" id="pName" name="pName" class="form-control" required>
          </div>
          <div class="form-group">
            <label>pLocation</label>
            <input type="text" id="pLocation" name="pLocation" class="form-control" required>
          </div>
          <div class="form-group">
            <label>pNumber</label>
            <input type="tel" id="pNumber" name="pNumber" class="form-control"  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
          </div>
          <div class="form-group">
            <label>DAwarded</label>
            <input type="date" id="DAwarded" name="DAwarded" class="form-control" required>
          </div>
          <div class="form-group">
            <label>DCompleted</label>
            <input type="date" id="DCompleted" name="DCompleted" class="form-control" required>
          </div>
          <div class="form-group">
            <label>DA_CP</label>
            <input type="date" id="DA_CP" name="DA_CP" class="form-control" required>
          </div>
          <div class="form-group">
            <label>DC_CP</label>
            <input type="date" id="DC_CP" name="DC_CP" class="form-control" required>
          </div>
          <div class="form-group">
            <label>DA_PBC</label>
            <input type="date" id="DA_PBC" name="DA_PBC" class="form-control" required>
          </div>
          <div class="form-group">
            <label>DC_PBC</label>
            <input type="date" id="DC_PBC" name="DC_PBC" class="form-control">
          </div>
          <div class="form-group">
            <label>DA_VAT</label>
            <input type="date" id="DA_VAT" name="DA_VAT" class="form-control" required>
          </div>
          <div class="form-group">
            <label>DC_VAT</label>
            <input type="date" id="DC_VAT" name="DC_VAT" class="form-control">
          </div>
          <div class="form-group">
            <label>DA_CWT</label>
            <input type="date" id="DA_CWT" name="DA_CWT" class="form-control" required>
          </div>
          <div class="form-group">
            <label>DC_CWT</label>
            <input type="date" id="DC_CWT" name="DC_CWT" class="form-control" required>
          </div>
          <div class="form-group">
            <label>DA_TAPT</label>
            <input type="date" id="DA_TAPT" name="DA_TAPT" class="form-control">
          </div>
          <div class="form-group">
            <label>DC_TAPT</label>
            <input type="date" id="DC_TAPT" name="DC_TAPT" class="form-control">
          </div>
          <div class="form-group">
            <label>DA_CFP</label>
            <input type="date" id="DA_CFP" name="DA_CFP" class="form-control">
          </div>
          <div class="form-group">
            <label>DC_CFP</label>
            <input type="date" id="DC_CFP" name="DC_CFP" class="form-control" required>
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
            <label>tin</label>
            <input type="text" id="tin_u" name="tin" class="form-control" required>
          </div>
          <div class="form-group">
            <label>rdo</label>
            <input type="text" id="rdo_u" name="rdo" class="form-control" required>
          </div>
          <div class="form-group">
            <label>name</label>
            <input type="text" id="name_u" name="name" class="form-control" required>
          </div>
          <div class="form-group">
            <label>zip</label>
            <input type="text" id="zip_u" name="zip" class="form-control" required>
          </div>
          <div class="form-group">
            <label>phone</label>
            <input type="tel" id="phone_u" name="phone" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
          </div>
          <div class="form-group">
            <label>taxpayer</label>
            <input type="text" id="taxpayer_u" name="taxpayer" class="form-control" required>
          </div>
          <div class="form-group">
            <label>PSIC</label>
            <input type="date" id="PCIC_u" name="PCIC" class="form-control" required>
          </div>
          <div class="form-group">
            <label>pName</label>
            <input type="text" id="pName_u" name="pName" class="form-control" required>
          </div>
          <div class="form-group">
            <label>pLocation</label>
            <input type="text" id="pLocation_u" name="pLocation" class="form-control" required>
          </div>
          <div class="form-group">
            <label>pNumber</label>
            <input type="tel" id="pNumber_u" name="pNumber" class="form-control"  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
          </div>
          <div class="form-group">
            <label>DAwarded</label>
            <input type="date" id="DAwarded_u" name="DAwarded" class="form-control" required>
          </div>
          <div class="form-group">
            <label>DCompleted</label>
            <input type="date" id="DCompleted_u" name="DCompleted" class="form-control" required>
          </div>
          <div class="form-group">
            <label>DA_CP</label>
            <input type="date" id="DA_CP_u" name="DA_CP" class="form-control" required>
          </div>
          <div class="form-group">
            <label>DC_CP</label>
            <input type="date" id="DC_CP_u" name="DC_CP" class="form-control" required>
          </div>
          <div class="form-group">
            <label>DA_PBC</label>
            <input type="date" id="DA_PBC_u" name="DA_PBC" class="form-control" required>
          </div>
          <div class="form-group">
            <label>DC_PBC</label>
            <input type="date" id="DC_PBC_u" name="DC_PBC" class="form-control">
          </div>
          <div class="form-group">
            <label>DA_VAT</label>
            <input type="date" id="DA_VAT_u" name="DA_VAT" class="form-control" required>
          </div>
          <div class="form-group">
            <label>DC_VAT</label>
            <input type="date" id="DC_VAT_u" name="DC_VAT" class="form-control">
          </div>
          <div class="form-group">
            <label>DA_CWT</label>
            <input type="date" id="DA_CWT_u" name="DA_CWT" class="form-control" required>
          </div>
          <div class="form-group">
            <label>DC_CWT</label>
            <input type="date" id="DC_CWT_u" name="DC_CWT" class="form-control" required>
          </div>
          <div class="form-group">
            <label>DA_TAPT</label>
            <input type="date" id="DA_TAPT_u" name="DA_TAPT" class="form-control">
          </div>
          <div class="form-group">
            <label>DC_TAPT</label>
            <input type="date" id="DC_TAPT_u" name="DC_TAPT" class="form-control">
          </div>
          <div class="form-group">
            <label>DA_CFP</label>
            <input type="date" id="DA_CFP_u" name="DA_CFP" class="form-control">
          </div>
          <div class="form-group">
            <label>DC_CFP</label>
            <input type="date" id="DC_CFP_u" name="DC_CFP" class="form-control" required>
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
