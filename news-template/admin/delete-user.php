<?php
if($_SESSION["user_role"]==0){
    header("Location: http://localhost/news-template/admin/post.php");
}

$conn=mysqli_connect("localhost","root","","news-site") or die("connection failed");
$userid=$_GET['id'];
$sql="DELETE FROM user WHERE user_id={$userid}";
if(mysqli_query($conn,$sql)){
    header("Location: http://localhost/news-template/admin/users.php");

}else{
    echo "Can't delete this record";
}

mysqli_close($conn);




?>