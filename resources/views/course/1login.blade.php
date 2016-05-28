<!DOCTYPE html>
<!-- saved from url=(0079)file:///C:/Users/prottoy/Desktop/template/templatemo_475_holiday/loginPage.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
       sign up
    </title>
    <link rel="stylesheet" href="{{ URL::asset('./jogajogbd_files/style.css')}}">
    <script type="text/javascript" src="{{ URL::asset('./jogajogbd_files/main.js')}}"></script><style type="text/css"></style>





</head>
<body>
    <div class="headerMenu">
        <div id="wrapper">
            <div class="logo">
    

            <div class="search_box">
                <form action="http://localhost/socialNetwork/search.php" method="GET" id="search">

                </form>                
            </div>            
            <div id="menu"> 
                     
                <a href="http://localhost/socialNetwork/#">SIgn Up</a>                 
                
            </div>
            
        </div>
    </div>


        <div style="width: 800px; margin: 0px auto 0px auto; align=" center"="" "="">
            <table>
                <tbody><tr>
                    <td width="60%" valign="top">
                        <h2>Already a Member? Sign in below!</h2>
                       {!!Form::open(array('route' =>'course.store'))!!}
                            <br><br>
														<select>
                       }
                       }
  <option value="Developer">Developer</option>
  <option value="Offerer">Offerer</option>
 
</select>
          
							<br><br>
                            <input type="text" name="user_login" size="25" placeholder="Username"><br><br>
                            <input type="password" name="password_login" size="25" placeholder="password"> <br><br>
                            <input type="submit" name="login" value="Login">
                        </form>
                    </td>
                    <td width="40%" valign="" top="">
                        <h2>Sign Up Below...</h2>


                        <form action="add" method="POST">
							<br><br>
							<select>
  <option value="Developer">Developer</option>
  <option value="Offerer">Offerer</option>
 
</select>
                            <br><br>
                            <input type="text" name="fname" size="25" placeholder="First Name"> <br><br>
                            <input type="text" name="lname" size="25" placeholder="Last Name"><br><br>
                            <input type="text" name="username" size="25" placeholder="User Name"><br><br>
                            <input type="text" name="email" size="25" placeholder="Email Address"><br><br>
                            <input type="text" name="email2" size="25" placeholder="Enter Your Email Address Again"><br><br>
                            <input type="password" name="password" size="25" placeholder="Password"><br><br>
                            <input type="password" name="password2" size="25" placeholder="Enter password again"><br><br>
                            <input type="submit" name="reg" size="25" placeholder="Sign Up!"><br><br>

                      



                       {!!Form::close()!!}
                    </td>
                </tr>
            </tbody></table>
        </div>
        

</body></html>