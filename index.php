<?php
session_start();
if(isset($_POST['submit']))
{
	$fname=$_POST['name'];
	$pemail=$_POST['email'];
    $lmessage=$_POST['message'];
	$con=odbc_connect("database","", "");
	$sql="select * from info where name='".$fname."' email='".$pemail."' message='".$lmessage."'";
	$result=odbc_exec($con, $sql);
	$count=odbc_fetch_row($result);
	if($count==1)
		{
			echo "Submission successful <br> Thank You";
			$_SESSION['log']=1;
			header("refresh:2;url=contact.html");
		}
		elseif($count==null)
		{
			echo "Submission Unscessful Try again later";
			header("refresh:2;url=contact.html");
		}

}
else
{
	echo "Submission Unscessful Try again later";
	header("refresh:2;url=contact.html");
}
?>