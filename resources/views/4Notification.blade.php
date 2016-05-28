<!DOCTYPE html>
<!-- saved from url=(0058)http://localhost:63342/templatemo_475_holiday/2search.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
       Notification
    </title>
    <link rel="stylesheet" href="./4Notification_files/style.css">
    <script type="text/javascript" src="./4Notification_files/main.js"></script><style type="text/css"></style><style type="text/css"></style><style type="text/css"></style>
    



    
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
                        <h2>You Have Notifications...</h2>


                        <form action="http://localhost/socialNetwork/#" method="POST">
                            <br><br>


                        </form>
                    </td>
                </tr>
            </tbody></table>
           
              @foreach($data as $dat)
            
           <div style="text-align:center;">
           
                                        
       --------------------------------------------------------------</br>
                         
                          <c>District :  {{ $dat->district }}</br></c>
                          Thana :  {{ $dat->thana }}</br>
                          Description :   {{ $dat->description }}</br>
                          
                          Email  :    {{ $dat->email }}</br>
                          <br>
                           
                      
                          <br><br><br>
            </div>

          
            @endforeach
        </div>
        

</div></body></html>