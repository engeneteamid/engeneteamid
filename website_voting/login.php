<!DOCTYPE html>
<html style="height: 100%;">
<head>
  <title>Login</title>
  <style>
  *{
    padding: 0; margin: 0;
}
}
h2{
  color:#50626C;
  text-align: center;
  font-family: arial;
  text-transform: uppercase;
  border: 3px solid #f1f1f1;
  padding: 5px;
  width: 490px;
  margin: auto;
  margin-bottom: 10px;
    margin-top: 20px;
}
form {
    border: 3px solid #f1f1f1;
    font-family: arial;
    width: 500px;
    margin: auto;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
label{
  color:#50626C;
  text-transform: uppercase;
}
button {
    background-color: #6abaf5;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f03434;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 20px;

}
span{
  color:#50626C;
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
    
  </style>
</head>

<body style="height: 100%;">
<div style="height: 100%;">
<div class="login" style="height: 100%;">
                    <?php if(isset($_SESSION['username'])) { ?>
                            <p class="welcome">
                                Halo, Selamat Datang <?php echo $_SESSION['username']; ?>
                                <a href="process/logout_submit.php"> &nbsp; Log Out &nbsp;  </a>
                            </p>

                        <?php } else { ?>

                    <form action="process/login_submit.php" method="post" class="form-inline my-2 my-lg-0" style="margin-top: 10%;">

<h2 style="text-align: center;">Login</h2>

  

  <div class="container" >
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Masuk</button>
   
  </div>

  
</form>


                    <?php } ?>
                </div>

</div>
</body>
</html>
