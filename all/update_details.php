<?php
	include "../db.php";
		$medicine_id = $_POST['id'];
		$medicine_name = $_POST['medicine_name'];
		$medicine_description = $_POST['medicine_description'];
		$medicine_mrp = $_POST['medicine_mrp'];
		$medicine_inventory = $_POST['medicine_inventory'];
		$update_qry = "UPDATE medicines SET medicine_id = '$medicine_id', medicine_name = '$medicine_name', medicine_description = '$medicine_description', medicine_mrp = '$medicine_mrp', medicine_inventory = '$medicine_inventory' WHERE medicine_id = '$medicine_id'";
		$update_qry_run = mysqli_query($con, $update_qry);
		if($update_qry_run) {			
?>
<script>
alert('Product Updated :)');
window.open('update_product.php?medicine_id=<?php echo $medicine_id;?>','_self');
</script>
<?php
		}
	
?>