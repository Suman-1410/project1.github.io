<?php
$conn=mysqli_connect("localhost","root","","colleges");

$id = $_GET['id'];

$deletequery = " delete from fiem where id=$id ";

$query = mysqli_query($conn, $deletequery);

if ($query) {
	header('location:fiem.php');
}else{
	?>
	<script type="text/javascript">
		alert("Data not updated");
	</script>
	<?php
}

?>