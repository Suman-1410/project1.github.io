<?php
$conn=mysqli_connect("localhost","root","","colleges");

$id = $_GET['id'];

$deletequery = " delete from details where id=$id ";

$query = mysqli_query($conn, $deletequery);

if ($query) {
	header('location:svims.php');
}else{
	?>
	<script type="text/javascript">
		alert("Data not updated");
	</script>
	<?php
}

?>