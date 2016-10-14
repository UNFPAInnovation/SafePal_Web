<?php
include('connect.php');





	if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

	
		if ($image_size==FALSE) {
		
			echo "That's not an image!";
			
		}else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"../reservation/img/products/" . $_FILES["image"]["name"]);
			
			$location=$_FILES["image"]["name"];
			$pname=$_POST['pname'];
			$desc=$_POST['desc'];
			$price=$_POST['price'];
			$cat=$_POST['cat'];
			$dname=$_POST['dname'];
			$dcontacts=$_POST['dcontacts'];
			$quantity=$_POST['quantity'];
			

			
			$update=mysql_query("INSERT INTO newproducts (imgUrl, product, Description, Price, Category,dname,dcontacts,quantity)
VALUES
('$location','$pname','$desc','$price','$cat','$dname','$dcontacts','$quantity')");
header("location: newproducts.php");
			exit();
		
			}
	}


?>
