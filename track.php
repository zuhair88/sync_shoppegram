<?php 
include "config.php";
$SecretKey = "jkfh9843hfisdbvw34ibyvg483fhv7y948yrhfihf03w4";

$page = $_SERVER['PHP_SELF'];
$sec = "5";
?>

<link href="popup.css" rel="stylesheet">
<link href="bulk.css" rel="stylesheet">
<link href="formmodule.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xls/0.7.4-a/xls.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.5/jszip.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/popper.js/1.15.0/esm/popper.min.js" type="module"></script>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">


<title>Sync</title>
</head>


<body>

    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <!--<a>Checkout Completed</a>-->
        </div>
    </nav>
<div style="text-align: center;">
 

<div class="form-control">

    <p>Checkout Completed</p>
    <div class="fa-search">
        <input type="search" class="form-control" placeholder="Search..." />
        <span class="fa fa-search"> <i class="fa fa-search" aria-hidden="true"></i></span>

        <!--<i class="material-icons">search</i>-->
    </div>
    <br />
  
    <div style="text-align: center;"></div>
    <table id="csvRoot">
        <tr>
            <th>SKU</th>
            <th>Nama Pembeli</th>
            <th>Telefon</th>
            <th>Alamat</th>
            <th>Kaedah Pembayaran</th>
            <th>Jumlah Bayaran</th>
        </tr>
        <?php 

        $sql = "SELECT * FROM OrderC WHERE SecretID = '" . $SecretKey . "'";
        $result = $connect->query($sql);

             while($row = mysqli_fetch_assoc($result)) { 
        ?>
            <tr>
                <td align="center"><?php echo $row['ProductSKU']; ?></td>
                <td align="center"><?php echo $row['CustrFName'] . " " . $row['CustLName']; ?></td>
                <td align="center"><?php echo $row['CustPNo']; ?></td>
                <td align="center"><?php echo $row['ShipAddress1'] . " " . $row['ShipAddrZip'] . " " . $row['ShipAddrCity'] . " " . $row['ShipAddrState']; ?></td>
                <td align="center"><?php echo $row['PaymentType']; ?></td>
                <td align="center"><?php echo "RM " . $row['TotalPrice']; ?></td>
             </tr>
        <?php } ?>
      
    </table>

</div>
<p id="disp">

</p>
<!--<script src="tracking.js" type="text/javascript"></script>-->
<link href="test.css" rel="stylesheet">
<script src="PostData.js" type="text/javascript"></script>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>