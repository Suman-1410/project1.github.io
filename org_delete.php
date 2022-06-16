<?php
$conn=mysqli_connect("localhost","root","","project");

$id = $_GET['id'];

$deletequery = " delete from org_ss_submit where id=$id ";

$query = mysqli_query($conn, $deletequery);

if ($query) {
	header('location:org_view.php');
}else{
	?>
	<script type="text/javascript">
		alert("Data not updated");
	</script>
	<?php
}

?>