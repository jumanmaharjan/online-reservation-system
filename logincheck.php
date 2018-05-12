<?PHP
echo " were here";

if(isset($_POST['email'])) {

		$user=$_POST['email'];
		$password=$_POST['password'];

		include ('base.php');
		$base=new base;

		if($base-> admin($user,$password)=='success') {
			include 'main.php';
		}
		else {
			echo "Wrong password";
		}
}

?>