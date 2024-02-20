<?php
session_start();
include('connect.php');

$votes =$_POST['groupvotes'];
$totalvotes =$votes+1;

$gid=$_POST['groupid'];
$uid =$_SESSION['id'];

$updatevotes= mysqli_query($con,"update `userdata` set votes='$totalvotes'
where id= '$gid'");
$updatestatus = mysqli_query($con,"update `userdata` set status=1 where id='$uid'");

if($updatevotes && $updatestatus){
    $getgroups = mysqli_query($con,"select name,photo,votes,id from 
    `userdata` where standard='group'");
    $groups = mysqli_fetch_all($getgroups,MYSQLI_ASSOC);
    $_SESSION['groups']=$groups;
    $_SESSION['status']= 1;
    echo "<script>
    alert('voted successfull');
    window.location='../partials/dashboard.php'
    </script>";

}else{
    echo "<script>
    alert('Techical error !! vote after sometion ');
    window.location'../partials/dashboard.php';
    </script>";
}
?>