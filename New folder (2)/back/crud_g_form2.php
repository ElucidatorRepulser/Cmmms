<?php
include 'database.php';

if ( count( $_POST ) > 0 ) {
    if ( $_POST[ 'type' ] == 1 ) {
        $tin = $_POST[ 'tin' ];
        $rdo = $_POST[ 'rdo' ];
        $name = $_POST[ 'name' ];
        $zip = $_POST[ 'zip' ];
        $phone = $_POST[ 'phone' ];
        $taxpayer = $_POST[ 'taxpayer' ];
        $PCIC = $_POST[ 'PCIC' ];
        $pName = $_POST[ 'pName' ];
        $pLocation = $_POST[ 'pLocation' ];
        $pNumber = $_POST[ 'pNumber' ];
        $DAwarded = $_POST[ 'DAwarded' ];
        $DCompleted = $_POST[ 'DCompleted' ];
        $DA_CP = $_POST[ 'DA_CP' ];
        $DC_CP = $_POST[ 'DC_CP' ];
        $DA_PBC = $_POST[ 'DA_PBC' ];
        $DC_PBC = $_POST[ 'DC_PBC' ];
        $DA_VAT = $_POST[ 'DA_VAT' ];
        $DC_VAT = $_POST[ 'DC_VAT' ];
        $DA_CWT = $_POST[ 'DA_CWT' ];
        $DC_CWT = $_POST[ 'DC_CWT' ];
        $DA_TAPT = $_POST[ 'DA_TAPT' ];
        $DC_TAPT = $_POST[ 'DC_TAPT' ];
        $DA_CFP = $_POST[ 'DA_CFP' ];
        $DC_CFP = $_POST[ 'DC_CFP' ];
        $sql = "INSERT INTO `contract` (`tin`,`rdo`,`name`,`zip`,`phone`,`taxpayer`,`PCIC`,`pName`,`pLocation`,`pNumber`,`DAwarded`,`DCompleted`,`DA_CP`,`DC_CP`,`DA_PBC`,`DC_PBC`,`DA_VAT`,`DC_VAT`,`DA_CWT`,`DC_CWT`,`DA_TAPT`,`DC_TAPT`,`DA_CFP`,`DC_CFP`)
	VALUES ('$tin','$rdo','$name','$zip','$phone','$taxpayer','$PCIC','$pName','$pLocation','$pNumber','$DAwarded','$DCompleted','$DA_CP','$DC_CP','$DA_PBC','$DC_PBC','$DA_VAT','$DC_VAT','$DA_CWT','$DC_CWT','$DA_TAPT','$DC_TAPT','$DA_CFP','$DC_CFP')";
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
        $tin = $_POST[ 'tin' ];
        $rdo = $_POST[ 'rdo' ];
        $name = $_POST[ 'name' ];
        $zip = $_POST[ 'zip' ];
        $phone = $_POST[ 'phone' ];
        $taxpayer = $_POST[ 'taxpayer' ];
        $PCIC = $_POST[ 'PCIC' ];
        $pName = $_POST[ 'pName' ];
        $pLocation = $_POST[ 'pLocation' ];
        $pNumber = $_POST[ 'pNumber' ];
        $DAwarded = $_POST[ 'DAwarded' ];
        $DCompleted = $_POST[ 'DCompleted' ];
        $DA_CP = $_POST[ 'DA_CP' ];
        $DC_CP = $_POST[ 'DC_CP' ];
        $DA_PBC = $_POST[ 'DA_PBC' ];
        $DC_PBC = $_POST[ 'DC_PBC' ];
        $DA_VAT = $_POST[ 'DA_VAT' ];
        $DC_VAT = $_POST[ 'DC_VAT' ];
        $DA_CWT = $_POST[ 'DA_CWT' ];
        $DC_CWT = $_POST[ 'DC_CWT' ];
        $DA_TAPT = $_POST[ 'DA_TAPT' ];
        $DC_TAPT = $_POST[ 'DC_TAPT' ];
        $DA_CFP = $_POST[ 'DA_CFP' ];
        $DC_CFP = $_POST[ 'DC_CFP' ];

        $sql = "UPDATE `contract` SET `tin`='$tin',`rdo`='$rdo',`name`='$name',`zip`='$zip',`phone`='$phone',`taxpayer`='$taxpayer',`PCIC`='$PCIC',`pName`='$pName',`pLocation`='$pLocation',`pNumber`='$pNumber',`DAwarded`='$DAwarded',`DCompleted`='$DCompleted',`DA_CP`='$DA_CP',`DC_CP`='$DC_CP',`DA_PBC`='$DA_PBC',`DC_PBC`='$DC_PBC',`DA_VAT`='$DA_VAT',`DC_VAT`='$DC_VAT',`DA_CWT`='$DA_CWT',`DC_CWT`='$DC_CWT',`DA_TAPT`='$DA_TAPT',`DC_TAPT`='$DC_TAPT',`DA_CFP`='$DA_CFP',`DC_CFP`='$DC_CFP'	WHERE id=$id";
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
        $sql = "DELETE FROM `contract` WHERE id=$id ";
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
        $sql = "DELETE FROM contract WHERE id in ($id)";
        if ( mysqli_query( $conn, $sql ) ) {
            echo $id;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error( $conn );
        }
        mysqli_close( $conn );
    }
}

?>
// JavaScript Document