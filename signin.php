<?php
$uname=$_GET['username'];
$pass=$_GET['pass'];
$con=mysqli_connect("localhost","root","anshul") or die(mysqli_error($con));
mysqli_select_db($con,"ai") or die(mysqli_error($con));
$r1=mysqli_query($con,"Select * from users") or die(mysqli_error());
while($row=mysqli_fetch_assoc($r1))
{
    if($row['uname']==$uname )
    {
        if($row['password']==$pass)
        {
        session_start();
        $_SESSION['name']=$uname;
        ?>
        <script>
        alert("SignIN Successful");
        window.location.href='main.php';
        </script>
        <?php
    }
    }
}
?>
        <script>
        alert("Invalid Username or Password");
        window.location.href='signin.html';
        </script>
        <?php
mysqli_close($con);
?>
