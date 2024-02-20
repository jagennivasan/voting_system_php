<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body class="bg-dark ">
  <h1 class="text-light text-center ">Voting system</h1>
        <div class="bg-info">
            <h2 class=" text-center">Registration Form</h2>
            <div class="container text-center m-auto w-50">
                <form action="../actions/register.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input name="name" id="name" class="form-control" type="text" placeholder="Enter your name" required="required">
                    </div>
                    <div class="mb-3">
                        <input name="mobile" id="mobile" class="form-control" type="number" placeholder="Enter your mobile" required="required">
                    </div>
                    <div class="mb-3">
                        <input name="password" id="password" class="form-control" type="password" placeholder="Enter your password" required="required">
                    </div> 
                    <div class="mb-3">
                        <input name="cpassword" id="password" class="form-control" type="password" placeholder="confirm password" required="required">
                    </div>
                    
                    <div class="mb-3">
                    <input name="photo"  class="form-control form-control-lg" id="photo" type="file">
                    </div>
                    <div class="mb-3">
                    <select name="std" class="form-select">
                        <option value="group">group</option>
                        <option value="voter">voter</option>
                    </select>
                </div>
                <button type ="submit" class="btn btn-dark mb-4">Register</button>
                <p>Already have an account ? <a class="text-light " href="../">Login here</a></p>
                </form>
            </div>
        </div>
</body>
</html>