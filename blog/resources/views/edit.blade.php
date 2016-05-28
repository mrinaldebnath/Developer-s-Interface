<!DOCTYPE html>
<!-- saved from url=(0058)http://localhost:63342/templatemo_475_holiday/2search.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
       Add Your Offers
    </title>
    <link rel="stylesheet" href="./3Add_files/style.css">
    <script type="text/javascript" src="./3Add_files/main.js"></script><style type="text/css"></style><style type="text/css"></style><style type="text/css"></style>
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
                           
                            <li><a href="addlist">addlist</a></li>
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
                        <h2>Edit Your Offer...</h2>


                      {!!Form::open(array('route'=>['course2.update',$any_variable2->id],'class'=>'form-horizental','method'=>'PUT'))!!}
                            <br><br>
                            <br><br>
                            <select  name="tag">
                            <option value="Developer">Developer</option>
                            <option value="Offerer">Offerer</option>
 
                            </select>

                            <br><br>
                         

                           <input type="email" name="email" size="30" placeholder="Your email" value="{{$any_variable2->email}}"> <br><br>
                            

                            
                            <select  name="division" value="{{$any_variable2->division}}">
                            <option value="Dhaka">Dhaka</option>
                            <option value="Rajshahi">Rajshahi</option>
                             <option value="Khulna">Khulna</option>
                            <option value="Barisal">Barisal</option>
                             <option value="Sylhet">Sylhet</option>
                            <option value="Rangpur">Rangpur</option>
                              <option value="Chittagonj">Chittagonj</option>
 
 
                            </select>

                            <br><br>
                             <input type="text" name="district" size="25" placeholder="district" value="{{$any_variable2->district}}"><br><br>
                            <input type="text" name="thana" size="25" placeholder="Thana " value="{{$any_variable2->thana}}"><br><br>
                           <input type="text" name="description" size="25" placeholder="Description" value="{{$any_variable2->description}}"> <br><br>
                            <input type="text" name="contact" size="25" placeholder="Contact no" value="{{$any_variable2->contact}}"><br><br>
                            <input type="text" name="price" size="25" placeholder="Price" value="{{$any_variable2->price}}"><br><br>
                            <input type="file" name="pic" id="fileToUpload">
                            <input type="submit" name="reg" size="25" placeholder="Sign Up!"><br><br>

                       {!!Form::close()!!}
                    </td>
                </tr>
            </tbody></table>
        </div>
        

</div></body></html>