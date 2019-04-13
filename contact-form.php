<? php 

if(isset($_POST['Submit'])){

	$name = $_POST['Name'];
	$subject = $_POST['Subject'];
	$mailFrom = $_POST['Email'];
	$phone = $_POST['Phone'];
	$message = $_POST['Message'];

	$mailto = "chinnu@chaituchinnu.tk";
	$headers = "From: ".$mailFrom;
	$txt = "Dear Chinnu,you have received an email from ".$name.".\n\n".$message;

	mail($mailto, $subject, $txt, $headers);
	headers("Location: index.html");
}

?>