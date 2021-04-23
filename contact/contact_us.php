
<?php 
$result = "";
$error  = "";
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $comments = $_POST['comments'];
    $to = "paragpatil91199@gmail.com";
   // $headers = "From: $name<$email>";
    $headers = "From: $name<$email>" . "\r\n" .
"CC: bleedingedge@amazflix.xyz";
    //echo $message = "Name: $name \n\nEmail: $email \n\n Subject: $subject \n\n Message: $comments";
    if(mail($to,$subject, $comments, $headers))
    {
        $result="Thanks\t" .$_POST['name']. " for contacting us.";
    }
    else
    {
        $error = "Something went worng. Please try again.";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact Form</title>
<link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

<link rel="stylesheet" href="styles.css">

</head>

<body style="background-image:url('image/imgg.jpg');background-size:cover">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 m-auto">
                <div class="contact-form">
                    <h1>Contact Form</h1>
                    <h2 class="text-center text-white"><?=$result; ?></h2>
                    <h2 class="text-center text-danger"><?=$error; ?></h2>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="text" class="form-control" id="Name" name="name" placeholder="Enter Full Name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="Email" name="email" placeholder="Enter Your Email" required>
                            </div>
                        </div>
                    </div>            
                    <div class="form-group">
                        <label for="inputSubject">Subject</label>
                        <input type="text" class="form-control" id="Subject"​ name="subject" placeholder="Enter Subject" required>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Message</label>
                        <textarea class="form-control" id="comments" name="comments" rows="5" placeholder="Enter Message..." required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
                    </div>            
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>                            