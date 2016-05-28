<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Holiday - templatemo</title>
    <!--
    Holiday Template
    http://www.templatemo.com/tm-475-holiday
    -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title>Title</title>
</head>
<body>
<section class="tm-white-bg section-padding-bottom">
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
    
    <div class="container">
        <div class="row">
        <div class="tm-section-header section-margin-top">
                <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
                <div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">offers by Developers and Offerers</h2></div>
                <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
            </div>
             @foreach($data as $dat)
            
           <div style="text-align:center;">
           <img src="pic/{{ $dat->id }}"></br>
                                        offerer by {{ $dat->tag }}</br>
       --------------------------------------------------------------</br>
                          <c>Division :  {{ $dat->division }}</br></c>
                          <c>District :  {{ $dat->district }}</br></c>
                          Thana :  {{ $dat->thana }}</br>
                          Description :   {{ $dat->description }}</br>
                          price :    {{ $dat->price }}</br>
                          Contact no :   {{ $dat->contact }}</br>
                          Email  :    {{ $dat->email }}</br>

                          <br><br><br>
            </div>

          
            @endforeach





    </div>
</section>
</body>
</html>