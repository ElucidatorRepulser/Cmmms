<?php
include 'database.php';

if ( count( $_POST ) > 0 ) {
    if ( $_POST[ 'type' ] == 1 ) {
        $fname = $_POST[ 'fname' ];
        $mname = $_POST[ 'mname' ];
        $lname = $_POST[ 'lname' ];
        $dob = $_POST[ 'dob' ];
        $city = $_POST[ 'city' ];
        $prov = $_POST[ 'prov' ];
        $gender = $_POST[ 'gender' ];
        $cs = $_POST[ 'cs' ];
        $czs = $_POST[ 'czs' ];
        $mpho = $_POST[ 'mpho' ];
        $email = $_POST[ 'email' ];
        $schoolsec = $_POST[ 'schoolsec' ];
        $hag = $_POST[ 'hag' ];
        $pa = $_POST[ 'pa' ];
        $padd = $_POST[ 'padd' ];
        $zc = $_POST[ 'zc' ];
        $sa = $_POST[ 'sa' ];
        $tod = $_POST[ 'tod' ];
        $ipa = $_POST[ 'ipa' ];
        $occ = $_POST[ 'occ' ];
        $ea = $_POST[ 'ea' ];
        $noe = $_POST[ 'noe' ];
        $hea = $_POST[ 'hea' ];
        $tp = $_POST[ 'tp' ];
        $sif = $_POST[ 'sif' ];
        $sql = "INSERT INTO iskoched(fname,mname,lname,dob,city,prov,gender,cs,czs,mpho,email,schoolsec,hag,pa,padd,zc,sa,tod,ipa,occ,ea,noe,hea,tp,sif)VALUES('$fname','$mname','$lname','$dob','$city','$prov','$gender','$cs','$czs','$mpho','$email','$schoolsec','$hag','$pa','$padd','$zc','$sa','$tod','$ipa','$occ','$ea','$noe','$hea','$tp','$sif')";
        if ( mysqli_query( $conn, $sql ) ) {
            echo json_encode( array( "statusCode" => 200 ) );
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error( $conn );
        }
        mysqli_close( $conn );
    }
}
if ( count( $_POST ) > 0 ) {
    if ( $_POST[ 'type' ] == 2 ) {
        $id = $_POST[ 'id' ];
        $fname = $_POST[ 'fname' ];
        $mname = $_POST[ 'mname' ];
        $lname = $_POST[ 'lname' ];
        $dob = $_POST[ 'dob' ];
        $city = $_POST[ 'city' ];
        $prov = $_POST[ 'prov' ];
        $gender = $_POST[ 'gender' ];
        $cs = $_POST[ 'cs' ];
        $czs = $_POST[ 'czs' ];
        $mpho = $_POST[ 'mpho' ];
        $email = $_POST[ 'email' ];
        $schoolsec = $_POST[ 'schoolsec' ];
        $hag = $_POST[ 'hag' ];
        $pa = $_POST[ 'pa' ];
        $padd = $_POST[ 'padd' ];
        $zc = $_POST[ 'zc' ];
        $sa = $_POST[ 'sa' ];
        $tod = $_POST[ 'tod' ];
        $ipa = $_POST[ 'ipa' ];
        $occ = $_POST[ 'occ' ];
        $ea = $_POST[ 'ea' ];
        $noe = $_POST[ 'noe' ];
        $hea = $_POST[ 'hea' ];
        $tp = $_POST[ 'tp' ];
        $sif = $_POST[ 'sif' ];
        $sql = "UPDATE `iskoched` SET `fname`='$fname',`mname`='$mname',`lname`='$lname',`dob`='$dob',`city`='$city',`prov`='$prov',gender`='$gender',`cs`='$cs',`czs`='$czs',`mpho`='$mpho',`email`='$email',`schoolsec`='$schoolsec',`hag`='$hag',`pa`='$pa',`padd`='$padd',`zc`='$zc',`sa`='$sa',`tod`='$tod',`ipa`='$ipa',`occ`='$occ',`ea`='$ea',`noe`='$noe',`hea`='$hea',`tp`='$tp',`sif`='sif' WHERE id=$id";
        if ( mysqli_query( $conn, $sql ) ) {
            echo json_encode( array( "statusCode" => 200 ) );
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error( $conn );
        }
        mysqli_close( $conn );
    }
}
if ( count( $_POST ) > 0 ) {
    if ( $_POST[ 'type' ] == 3 ) {
        $id = $_POST[ 'id' ];
        $sql = "DELETE FROM `iskoched` WHERE id=$id ";
        if ( mysqli_query( $conn, $sql ) ) {
            echo $id;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error( $conn );
        }
        mysqli_close( $conn );
    }
}
if ( count( $_POST ) > 0 ) {
    if ( $_POST[ 'type' ] == 4 ) {
        $id = $_POST[ 'id' ];
        $sql = "DELETE FROM iskoched WHERE id in ($id)";
        if ( mysqli_query( $conn, $sql ) ) {
            echo $id;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error( $conn );
        }
        mysqli_close( $conn );
    }
}

?>
