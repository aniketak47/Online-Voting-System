<!DOCTYPE html>
<html lang="en">
<head>
    <title>Online Voting | Login </title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 570px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}

.selectRole{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
    appearance: none;
    cursor: pointer;
    background-image: none;
    overflow: hidden;
}



    
    .navbar a{
        padding:6px 10px;
        text-decoration: none;
        color: white;
        margin-left: 10px;
        font-size: 20px;
        margin:10px;
        padding:10px;
    } 
    
    .navbar{
    text-align: right;
    padding-right: 20px;
    padding-top:20px;
    flex: 1;
    }

::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    margin-top: 70px;
    margin-bottom: 15px;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
/* .social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
} */

.dnthave{
    text-decoration: none;
}

.dnthave:hover{
    text-decoration: underline;
}

</style>


</head>
<body>
        <div class="header">
			<div class="navbar">
				<a href="./">HOME</a>
				<a href="#">CONTACT US</a>
			</div>
		</div>

    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>


    <form action="api/login.php" method="POST">
        <h3>Login Here</h3>

        <label for="number">Number</label>
        <input type="number" name="mob" placeholder="Enter mobile" required>

        <label for="password">Password</label>
        <input type="password" name="pass" placeholder="Enter password" required>

        <label for="voter">Role</label>
        <select name="role" class="selectRole">
            <option value="1" style="color: #1845ad;">Voter</option>
            <option value="2" style="color: #1845ad;">Group</option>
        </select>


        <button>Log In</button>
        <!-- <div class="social">
          <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div> -->


       <!-- /* <button class="btn submits sign-up">Sign Up  -->
        <!--         Sign Up font icon -->
                <!-- <i class="fa fa-user-plus" aria-hidden="true"></i>
        </button> -->
        <a href="routes/register.php" class="dnthave">Don’t have an account? Register</a>

    </form>
</div>

<!-- style="width: 15%; border: 2px solid white" -->
    
</body>
</html>
