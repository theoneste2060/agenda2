<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.rtl.min.css">
    <title>Document</title>
    
</head>
<body>
    <div class="container">
        <section>
            <div class="row" style="height:20vh"></div>
            <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 card pt-3" >
                <center><h3>Create account</h3></center>

                <?php
                include 'config.php';
                    if (isset($_POST['btn'])) {
                        $usernamwe=$_POST['username'];
                        $password=$_POST['password'];
                        $sql = mysqli_query($conn,"INSERT INTO `users`(`username`, `password`) VALUES ('$usernamwe','$password')");

                        if ($sql) {
                            echo "user added success";
                        } else {
                            echo "not success added";
                        }
                        
                    }
                ?>
                <form method="post">
                    <div class="form-group">
                        <label class="form-label text-info">Username:</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label text-info">Password:</label>
                        <input type="text" name="password" class="form-control">
                    </div>
                    <div class="form-group pt-3 pb-5">
                      <center> <input type="submit"name ="btn" value="Create" 
                      class="btn bg-primary round-pill"></center>
                      
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
            </div>
            
        </section>
    </div>
</body>
</html>