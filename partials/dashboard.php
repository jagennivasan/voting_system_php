<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location:../');
}
$data= $_SESSION['data'];
if($_SESSION['status']==1){
    $status ="<b class='text-success'>voted</b>";
}else{
    $status="<b> class='text-danger'>Not voted</b>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body class="bg-secondary text-light">
    <div class="container my-5 ">
        <a href="../" ><button class="btn btn-dark text-light px-3">back</button></a>
        <a href="logout.php" ><button class="btn btn-dark text-light px-3">logout</button></a>
        <h2 class="my-3 ">Voting System </h2>
        <div class="row my-5 ">
            <div class="col-md-7">
                <?php
                if(isset( $_SESSION['groups'])){

                   $groups= $_SESSION['groups'];
                   for ($i=0; $i <count($groups) ; $i++) {
                    ?> 
                    <div class="row"> 
                <div class="col-md-4">
                    <img class="img-thumbnail" src="../uploads/<?php echo $groups[$i]['photo']?>" alt="Group image" >
                </div>
                <div class="col-md-8">
                    <strong class="text-dark h5 ">Group name:</strong>
                    <?php echo $groups[$i]['name']?>
                    <br>
                    <strong class="text-dark h5 ">Votes:</strong>
                    <?php echo $groups[$i]['votes']?><br>
                </div>
            </div>
         
            <form action="../actions/voting.php" method="post">
                <input type="hidden" name="groupvotes" value="<?php echo $groups[$i]['votes']?>">
                <input type="hidden" name="groupid" value="<?php echo $groups[$i]['id']?>">
           <?php
           if($_SESSION['status']==1){
            ?>
            <button class="btn bg-success my-3 text-white px-3">voted</button>
            <?php
           }else{
            ?>
            <button class="btn btn-danger my-3 text-white px-3" type="submit">vote</button>

            <?php
           }
        
           
           ?>
           
           
            </form>
            <hr>
              <?php     }
                }else{
                    ?>
                    <div class="container">
                        <p>No groups to display</p>
                    </div>
                    <?php
                }
             ?>
            
            </div>
            <div class="col-md-5">
                    <img src="../uploads/<?php echo $data['photo'];?>" alt="user image" class="rounded" height="100px" width="150px">
                    <br>
                    <br>
                    <strong class="text-dark h5 ">Name:</strong>
                    <?php echo $data['name'];?><br><br>
                    <strong class="text-dark h5 ">Mobile:</strong>
                    <?php echo $data['mobile'];?><br><br>
                    <strong class="text-dark h5 ">Status:</strong>
                    <?php echo $status;?><br><br>
                    

           </div>
        </div>
    </div>
</body>
</html>