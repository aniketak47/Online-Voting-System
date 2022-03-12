<html>
    <head>
        <title>Online voting system - Registratrion</title>
        <link rel="stylesheet" href="../css/stylesheet.css">

        <style>
            body{
                /* background-color:red; */
                background-image: url("https://cdn.pixabay.com/photo/2017/04/05/04/44/background-2203989_1280.jpg");
                background-size: cover;
                background-position: top;
            }

            h1{
                font-size: 60px;
                font-weight: 600;
                line-height: 42px;
                text-align: center;
                font-family: sans-serif;
                margin-top:0px;
                margin-bottom:10px;
                /* color: #f08080; */
                color:#599dad;
            }

            h2{
                font-size: 30px;
                text-decoration: underline;
                color:#599dad;
            }



            form{
                height: 400px;
                width: 600px;
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
                margin-top:80px;
            }


            .header{
                height: 5%;
                display: flex;
                align-items: center;
                overflow: hidden;
                position: relative;
            }

            .navbar{
                text-align: right;
                padding-right: 5px;
                flex: 1;
            }

            .navbar a{
                padding:6px 10px;
                text-decoration: none;
                color: white;
                margin-left: 10px;
                font-size: 20px;
                font-weight: bold;
            }

        </style>

    </head>
    <body>
    <div class="header">
			<div class="navbar">
				<a href="../">HOME</a>
				<a href="#">CONTACT US</a>
			</div>
		</div>



        <center>
            <div id="headerSection">
            <h1>Online Voting System</h1>  
            </div>
            <hr>

            <h2>Register Here</h2>
                <form action="../api/register.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Name" required>&nbsp
                    <input type="number" name="mob" placeholder="Mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Password" required>&nbsp
                    <input type="password" name="cpass" placeholder="Confirm Password" required><br><br>
                    <input style="width: 31%" type="text" name="add" placeholder="Address" required><br><br>
                    <div id="upload" style="width: 30%">
                        Upload Image: <input type="file" id="profile" name="image" required>
                    </div><br>
                    <div id="upload" style="width: 30%">
                        Select Your Role:
                        <select name="role">
                            <option value="1">Voter</option>
                            <option value="2">Group</option>
                        </select><br>                   
                    </div><br>
                    <button id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>
                    Already User? <a href="../login1.php">Login here</a>
                </form>
            </center>
    </body>
</html>