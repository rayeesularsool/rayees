<? php 
$con=mysqli_connect("localhost","root","","website");



$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$comment = $_POST["comment"];



$sql="insert into userinfodata values('$name', '$email', '$mobile', '$comment', )";
if(mysqli_query($con,$sql)
{
	echo "saved";

}
else
{
echo mysqli_eror($con);
}
mysqli_close($con);
?>

