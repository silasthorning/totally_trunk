<?php 
	$localhost= 'localhost';
	$databasebruger ='root';
	$databasepassword = '';
	$databasenavn = 'totally_trunk';
	
	$conn=mysqli_connect($localhost,$databasebruger,$databasepassword,$databasenavn);
	
	mysqli_set_charset($conn, 'utf8');
?>
<?php
	session_start();
	
	$mitbrugernavn = $_POST['brugernavn'];
	$mitkodeord = $_POST['kodeord'];
	
	$sql = "SELECT * FROM brugere WHERE bruger_navn='$mitbrugernavn' AND bruger_kodeord='$mitkodeord'";
	$result = mysqli_query($conn, $sql) or die(mysqli_error());
	
	$hent = mysqli_fetch_assoc($result);
	$count = mysqli_num_rows($result);
	
	if($count==1)
	{
		
	$_SESSION['u-id'] = $hent['bruger_id'];
	$_SESSION['u-name'] = $hent['bruger_navn'];
	echo "<script>window.location.href = '../index.php?admin';</script>";
	}
	else
	{
		echo "<script>alert('Brugernavn eller password er forkert');</script>";
		echo "<script>window.location.href = '../index.php?login';</script>";
	}
?>