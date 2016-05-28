<!DOCTYPE html>
<!-- saved from url=(0079)file:///C:/Users/prottoy/Desktop/template/templatemo_475_holiday/loginPage.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
       sign up
    </title>
    <link rel="stylesheet" href="{{ URL::asset('./jogajogbd_files/style.css')}}">
    <script type="text/javascript" src="{{ URL::asset('./jogajogbd_files/main.js')}}"></script><style type="text/css"></style>
     <link href='{{ URL::asset('http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700')}}' rel='stylesheet' type='text/css'>
  <link href="{{ URL::asset('css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">  
  <link href="{{ URL::asset('css/flexslider.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('css/templatemo-style.css')}}" rel="stylesheet">





</head>
<body>
    <div class="tm-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
                    <a href="#" class="tm-site-name">Developer's Interface</a>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-9">
                    <div class="mobile-menu-icon">
                      <i class="fa fa-bars"></i>
                    </div>
                    <nav class="tm-nav">
                        <ul>
                            
                        </ul>
                    </nav>      
                </div>
            </div>
        </div>      
    </div>
    <div class="headerMenu">
        <div id="wrapper">
            <div class="logo">
    

            <div class="search_box">
                <form action="http://localhost/socialNetwork/search.php" method="GET" id="search">

                </form>                
            </div>            
            <div id="menu"> 
                     
                         
                
            </div>
            
        </div>
    </div>


        <div style="width: 800px; margin: 0px auto 0px auto; align=" center"="" "="">
            <table>
                <tbody><tr>
                    <td width="60%" valign="top">
                     
                                              <form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div>
       <br> Email
        <br><input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
       <br> Password
        <br><input type="password" name="password" id="password">
    </div>

    <div>
        <br><input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
       <br> <button type="submit">Login</button>
    </div>
</form>
                    </td>
                    <td width="40%" valign="" top="">
                        <h2>Sign Up Below...</h2>


                    
                        <form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div>
        <br>Name
        <br><input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        <br>Email<br>
        <br><input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        <br>Password<br>
        <br><input type="password" name="password">
    </div>

    <div>
        <br>Confirm Password<br>
        <br><input type="password" name="password_confirmation">
    </div>

    <div>
    
        <br><button type="submit">Register</button>
    </div>
</form>
                    </td>
                </tr>
            </tbody></table>
        </div>
        

</body></html>