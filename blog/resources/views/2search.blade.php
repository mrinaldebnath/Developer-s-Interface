<!DOCTYPE html>
<!-- saved from url=(0057)http://localhost:63342/templatemo_475_holiday/1login.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
        search
    </title>
    <link rel="stylesheet" href="./search_files/style.css">
    <script type="text/javascript" src="./search_files/main.js"></script><style type="text/css"></style><style type="text/css"></style>
     <link href='{{ URL::asset('http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700')}}' rel='stylesheet' type='text/css'>
  <link href="{{ URL::asset('css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">  
  <link href="{{ URL::asset('css/flexslider.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('css/templatemo-style.css')}}" rel="stylesheet">
    



    
</head>
<body>
  <body class="tm-gray-bg">
    <!-- Header -->
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
                            
                            <li><a href="2search">Search</a></li>
                            <li><a href="3Add">Add</a></li>
                            <li><a href="4Notification.html">Notification</a></li>
                            <li><a href="list">offers</a></li>
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

                        <form action="http://localhost/socialNetwork/index.php" method="POST">


                        </form>
                    </td>
                    <td width="40%" valign="" top="">
                        <h2>Search...</h2>


                        {!!Form::open(['route'=>'course1.index','method'=>'GET','class'=>'Class_name'])!!}
						<br><br>
						<label for="Division">Select District</label><br><br>
						 <select  name="division">
                            <option value="Dhaka">Dhaka</option>
                            <option value="Rajshahi">Rajshahi</option>
                             <option value="Khulna">Khulna</option>
                            <option value="Barisal">Barisal</option>
                             <option value="Sylhet">Sylhet</option>
                            <option value="Rangpur">Rangpur</option>
                            <option value="Chittagonj">Chittagonj</option>
 
                            </select>

                            <br><br>
                             <input type="text" name="district" size="25" placeholder="district"><br><br>
                            <input type="text" name="thana" size="25" placeholder="Thana "><br><br>

                            <input type="submit" name="reg" size="25" placeholder="Sign Up!"><br><br>

                       {!!Form::close()!!}
                    </td>
                </tr>
            </tbody></table>
        </div>
        

</div></body></html>