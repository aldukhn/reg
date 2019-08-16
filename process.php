<?php
require_once('config.php');
?>
<?php
if(isset($_POST)){
	$name 		= $_POST['name'];
	$dob 		= $_POST['dob'];
	$email 			= $_POST['email'];
    $phone	= $_POST['phone'];
    $imageurl	= $_POST['imageurl'];
    $acadmicyear	= $_POST['acadmicyear'];
    $cource	= $_POST['cource'];
	$pass 		= sha1($_POST['pass']);
		$sql = "INSERT INTO sdata (name, dob, email, phone, imageurl, acadmicyear, cource, pass) VALUES(?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$name, $dob, $email, $phone, $imageurl,$acadmicyear ,$cource ,$pass ]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}