<?php 
include "../config.php";
$secretKey = $_GET['secretKey'];

 $json = file_get_contents('php://input');
    $data = json_decode($json);

    $jsondata = $json;

    $orderID = $data->order->id;
    $referenceNo = $data->order->reference_number;
    $product = $data->order->items[0]->product->name;
    $sku = $data->order->items[0]->product->sku;
    $quantity =$data->order->items[0]->quantity;
    $totalPrice = $data->order->total;
    $paymentType = $data->order->gateway_name;
    
    $customerFName = $data->order->customer->first_name;
    $customerLName = $data->order->customer->last_name;
    $customerPhone = $data->order->customer->phone;
    $customerEmail = $data->order->customer->email;
    
    $addFname = $data->order->shipping_address->first_name;
    $addLname = $data->order->shipping_address->last_name;
    $addPhone = $data->order->shipping_address->phone;
    $add1 = $data->order->shipping_address->address1;
    $add2 = $data->order->shipping_address->address2;
    $addZip = $data->order->shipping_address->zip;
    $addCity = $data->order->shipping_address->city;
    $addState = $data->order->shipping_address->state;

$stmt = $connect->prepare("INSERT INTO OrderC (SecretID, OrderID, ReferenceNo, ProductName, ProductSKU, ProductQuantity,TotalPrice,PaymentType, CustrFName, CustLName, CustPNo, CustEmail, ShipAddrFname, ShipAddrLname, ShipAddrPhone, ShipAddress1, ShipAddress2, ShipAddrZip, ShipAddrCity, ShipAddrState) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param('sssssiisssssssssssss',$secretKey,$orderID,$referenceNo,$product,$sku,$quantity,$totalPrice,$paymentType,$customerFName,$customerLName,$customerPhone,$customerEmail,$addFname,$addLname,$addPhone,$add1,$add2,$addZip,$addCity,$addState);
$stmt->execute();

$stmt->close();
$connect->close();
?>