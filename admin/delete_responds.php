<?php
$conn=mysqli_connect("localhost","root","","project");

$id = $_GET['id'];

$deletequery = " delete from responds where id=$id ";

$query = mysqli_query($conn, $deletequery);

if ($query) {
	header('location:respond.php');
}else{
	?>
	<script type="text/javascript">
		alert("Data not updated");
	</script>
	<?php
}

?>