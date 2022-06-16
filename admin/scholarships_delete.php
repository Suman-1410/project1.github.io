<?php
$conn=mysqli_connect("localhost","root","","project");

$id = $_GET['id'];

$deletequery = " delete from au_sholarships where id=$id ";

$query = mysqli_query($conn, $deletequery);

if ($query) {
	header('location:view_ss.php');
}else{
	?>
	<script type="text/javascript">
		alert("Data not updated");
	</script>
	<?php
}

?>