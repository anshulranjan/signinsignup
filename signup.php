<?php
$name=$_GET['name'];
$id=$_GET['email'];
$uname=$_GET['username'];
$pass=$_GET['pass'];

$con=mysqli_connect("localhost","root","anshul") or die(mysqli_error($con));
mysqli_select_db($con,"ai") or die(mysqli_error($con));
$r1=mysqli_query($con,"Select * from users") or die(mysqli_error());
while($row=mysqli_fetch_assoc($r1))
{
    if($row['uname']==$uname)
    {
        ?>
        <script>
        alert("Username already exist.");
        window.location.href='signup.html';
        </script>
        <?php
    }
}
$query="Insert into users Values('".$name."','".$id."','".$uname."','".$pass."')";
$result=mysqli_query($con,$query) or die(mysqli_error());
?>
<script>
        alert("Successfully Registered");
        window.location.href='signin.html';
        </script>
<?php
mysqli_close($con);
?>