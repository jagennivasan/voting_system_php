<?php 
session_start();
include ("connect.php");

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$std = $_POST['std'];

$sql = "select * from `userdata` where name='$name'and
mobile='$mobile'and password='$password' and standard='$std'";

$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
$sql= "select name,photo,votes,id from `userdata` where standard='group'";
$resultgroup = mysqli_query($con,$sql);

if(mysqli_num_rows($resultgroup)>0){
    $groups = mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
    $_SESSION['groups']=$groups;
}
$data =mysqli_fetch_array($result);
$_SESSION['id']= $data['id'];
$_SESSION['status']= $data['status'];
$_SESSION['data']= $data;

echo "<script>
window.location='../partials/dashboard.php'
</script>";

}else{
    echo "<script>
    alert('invalid data');
    window.location='../'
    </script>";
}

?>