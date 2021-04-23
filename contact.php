<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/main.css" />
    <title>Contact Us Form</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h2 class="text-container py-2 center">Contact Us</h2>
                        <hr>   
                        <?php
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = "Please Fill In The Blank";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                            if(isset($_GET['success']))
                            {
                                $Msg = "Your MSG has Been SEnt";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        ?> 
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="post">
                        <input type="text" name="Uname" placeholder="User Name" class="form-control mb-2">
                        <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                        <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                        <textarea name="msg" class="form-control mb-2" placeholder="Write The Message"></textarea>
                        <button class="btn btn-success" name="btn-send">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

