<?php

#List of dhobis
function listDhobis()
{
	# code...
	include 'connect.php';
	$sql = "SELECT * FROM user WHERE user_type = 'Dhobi' ORDER BY id DESC";
	$sql = mysqli_query($con,$sql);

	foreach ($sql as $key => $value) {
		# code...

		$id = $value['id'];
		$photo = $value['photo'];
		$zone = $value['zone'];
		$uname = $value['uname'];

		echo '<div class="product-item">
					<div class="pi-pic">
						<a href="order.php?dhobi='.$id.'"><img src="'.$photo.'" alt="" style="height: 300px;object-fit: cover;"></a>
						<div class="pi-links">
							<a href="order.php?dhobi='.$id.'" class="add-card"><i class="flaticon-bag"></i><span>Hire Dhobi</span></a>
						</div>
					</div>
					<div class="pi-text">
						<h6 class="text-success">'.$zone.'</h6>
						<p>'.$uname.'</p>
					</div>
				</div>';
	}

}

#Dhobi details
function detDhobis($dhobi)
{
	# code...
	include 'connect.php';
	$sql = "SELECT * FROM user us WHERE id = '$dhobi'AND user_type = 'Dhobi'";
	$sql = mysqli_query($con,$sql);

	foreach ($sql as $key => $value) {
		# code...
		$photo = $value['photo'];
		$uname = $value['uname'];
		$natid = $value['natid'];
		$email = $value['email'];
		$phone = $value['uphone'];
		$zone = $value['zone'];

		echo '<h3>'.$uname.'</h3>
				<ul class="product-list">
					<li>
						<div class="pl-thumb"><img src="'.$photo.'" alt="" style="height: 100px;object-fit: cover;"></div>
						<h6 class="text-success">'.$zone.'</h6>
						<p>ID: '.$natid.'</p>
						
						<p>Phone:'.$phone.' </p>
					</li>
					
				</ul>';
	}
}

#Clients order history
function historyClients($id)
{
	# code...
	include 'connect.php';
	$sql = "SELECT * FROM orders WHERE user_id = '$id' ORDER BY id DESC";
	$sql = mysqli_query($con,$sql);

	foreach ($sql as $key => $value) {
		# code...
		$orderno = $value['id'];
		$ordate = $value['order_date'];
		$ordate = date_create($ordate);
		$ordate = date_format($ordate,'d M Y');
		$size = $value['order_size'];
		$dhobi_id = $value['dhobi_id'];
		$press = $value['press'];
		$ironing = $value['ironing'];
		$amount = $value['amount'];
		$status = $value['status'];
		$ironing = intval($ironing);
		$press = intval($press);
		$extras = $ironing + $press;

		echo '<tr>
					<td class="product-col">
						<img src="img/order.png" alt="" style="height: 80px;width: 80px;object-fit: cover;">
						<div class="pc-title">
							<h4>'.$ordate.'</h4>
							<p class="text-success">Size: '.$size.'</p>
							<p>Order ID: '.$orderno.'</p>
						</div>
					</td>
					<td class="total-col" style="text-align: left"><h4 style="font-size: 16px">'.$extras.'/=</h4></td>
					<td class="total-col"><h4 style="font-size: 16px">'.$amount.'/=</h4></td>
					<td class="total-col"><h4  style="font-size: 16px">'.$status.'</h4></td>
			 </tr>';
	}
}

#Dhobi details
function historyClientSum($id)
{
	# code...
	include 'connect.php';
	$sql = "SELECT sum(amount) AS amount FROM orders WHERE user_id = '$id' GROUP BY user_id";
	$sql = mysqli_query($con,$sql);

	foreach ($sql as $key => $value) {
		# code...
		
		$amount = $value['amount'];

		echo '<h6>Total (KES) <span>'.$amount.'/=</span></h6>';
	}
}

#Dhobis order history
function requestDhobis($id)
{
	# code...
	include 'connect.php';
	$sql = "SELECT * FROM orders WHERE dhobi_id = '$id' AND status ='Pending' ORDER BY id DESC";
	$sql = mysqli_query($con,$sql);

	if (mysqli_num_rows($sql)<1) {
		# code...
		echo '<h5 style="color:red;text-align:center">No orders pending </h5>';;
	}

	foreach ($sql as $key => $value) {
		# code...
		$orderno = $value['id'];
		$size = $value['order_size'];
		$zone = $value['zone'];
		$ordate = $value['order_date'];
		$ordate = date_create($ordate);
		$ordate = date_format($ordate,'d M Y');
		$user_id = $value['user_id'];
		$dhobi_id = $value['dhobi_id'];
		$press = $value['press'];
		$ironing = $value['ironing'];
		$amount = $value['amount'];
		$status = $value['status'];
		$ironing = intval($ironing);
		$press = intval($press);
		$extras = $ironing + $press;

		echo '<tr>
					<td class="product-col">
						<img src="img/order.png" alt="" style="height: 80px;width: 80px;object-fit: cover;">
						<div class="pc-title">
							<h4>'.$ordate.'</h4>
							<p class="text-success">KES '.$amount.'/=</p>
							<p>'.$zone.'</p>
							
						</div>
					</td>
					
					<td class="product-col-col" style="text-align: left">
						<a href="../helpers/reject.php?orderid='.$orderno.'" class="text-danger">Decline</a>
					</td>
					<td class="total-col" style="text-align: left">
						<a href="../helpers/confirm.php?orderid='.$orderno.'" class="text-primary">Confirm</a>
					</td>
				</tr>';
	}
}

#Sum requests
function requestClientSum($id)
{
	# code...
	include 'connect.php';
	$sql = "SELECT sum(amount) AS amount FROM orders WHERE dhobi_id = '$id' AND status = 'Pending' GROUP BY user_id";
	$sql = mysqli_query($con,$sql);

	foreach ($sql as $key => $value) {
		# code...
		
		$amount = $value['amount'];

		echo '<h6>Total (KES) <span>'.$amount.'/=</span></h6>';
	}
}


#Dhhobis order history
function requestHistory($id)
{
	# code...
	include 'connect.php';
	$sql = "SELECT * FROM orders WHERE dhobi_id = '$id' ORDER BY id DESC";
	$sql = mysqli_query($con,$sql);

	if (mysqli_num_rows($sql)<1) {
		# code...
		echo '<h5 style="color:red;text-align:center">No order history </h5>';;
	}


	foreach ($sql as $key => $value) {
		# code...
		$orderno = $value['id'];
		$ordate = $value['order_date'];
		$ordate = date_create($ordate);
		$ordate = date_format($ordate,'d M Y');
		$size = $value['order_size'];
		$user_id = $value['user_id'];
		$dhobi_id = $value['dhobi_id'];
		$press = $value['press'];
		$ironing = $value['ironing'];
		$amount = $value['amount'];
		$status = $value['status'];
		$ironing = intval($ironing);
		$press = intval($press);
		$extras = $ironing + $press;

		echo '<tr>
				<td class="product-col">
					<img src="img/order.png" alt="" style="height: 80px;width: 80px;object-fit: cover;">
					<div class="pc-title">
						<h4>'.$ordate.'</h4>
						<p class="text-success">Size: '.$size.'</p>
						<p>Order: '.$orderno.'</p>
					</div>
				</td>
				<td class="total-col" style="text-align: left"><h4 style="font-size: 16px">'.$extras.'/=</h4></td>
				<td class="total-col"><h4 style="font-size: 16px">'.$amount.'/=</h4></td>
				<td class="total-col"><h4  style="font-size: 16px">'.$status.'</h4></td>
			 </tr>';
	}
}

#Sum request histrory
function requestSumHistory($id)
{
	# code...
	include 'connect.php';
	$sql = "SELECT sum(amount) AS amount FROM orders WHERE dhobi_id = '$id' GROUP BY user_id";
	$sql = mysqli_query($con,$sql);

	foreach ($sql as $key => $value) {
		# code...
		
		$amount = $value['amount'];

		echo '<h6>Total (KES) <span>'.$amount.'/=</span></h6>';
	}

}

#Payment module
function Payment($order)
{
	# code...
	include 'connect.php';
	$sql = "SELECT * FROM orders WHERE id = '$order'";
	$sql = mysqli_query($con,$sql);

	foreach ($sql as $key => $value) {
		# code...
		$amount = $value['amount'];

		echo ''.$amount.'';
	}
}

 ;?>