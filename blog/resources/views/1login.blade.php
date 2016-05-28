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
                        <form action="/auth/login" method="POST">
                            <br><br>
														
                            <select name="tag">
                            <option value="Developer">Developer</option>
                            <option value="Offerer">Offerer</option>
 
                            </select>
          
							<br><br>
                            <input type="text" name="name" size="25" placeholder="Username"><br><br>
                            <input type="password" name="password" size="25" placeholder="password"> <br><br>
                            <input type="submit" name="login" value="Login">
                        </form>
                    </td>
                    <td width="40%" valign="" top="">
                        <h2>Sign Up Below...</h2>


                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                    </td>
                </tr>
            </tbody></table>
        </div>
        

</body></html>