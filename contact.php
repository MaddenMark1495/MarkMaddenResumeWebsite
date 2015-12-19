<!DOCTYPE html>
<html>
    <head>
        <title>Mark Madden</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="page1.css">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open Sans">
        
        
        <style>
            
            body{
                background-color:#E7E5E4;
            
            }
            
            p{
            
                font-family:"Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
                font-color:#1C2321;
                text-align: center;
            }
            
            h2 {
                          
      font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
         text-align: center;
      
                
            }
        h3 {         
      font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
        text-align: center;
      
                
            }
          h4 {         
      font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
        text-align: center;
      
                
            }
            
            #Icon{
             color: #202020;
              background-color: #2d2d2d;
              letter-spacing: .1em;
              text-shadow: -1px -1px 1px #111111, 2px 2px 1px #363636;
            }
               
            #me{
            
                width:300px;
                height:250px;
                float:center;
            
            }
            button{
                float:center;
                font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
                
            }
            
            #contentBox{
                
                text-align:center;
            
            }
              #row4{

                padding-top:30px;
            
            }
            #googleMap{
                padding-right:30px;
                width:500px;height:380px;
            
            }
            
        </style>
    
        
        
        <script>
        
             function getContent() {
            // Loading feedback
            document.getElementById("contentBox").innerHTML = "Loading...";
            
            
            var xmlHttp = new XMLHttpRequest();
            
            xmlHttp.onload = function() {
                if (xmlHttp.status == 200) {
                    var contentBox = document.getElementById("contentBox");
                    
                    
                    var response = xmlHttp.responseText;
                    
                    
                    console.dir(response);
                    
                    
                    response = JSON.parse(response);
                    
                    
                    console.dir(response);
                    
                    contentBox.innerHTML = response.address1 + "  " + response.address2;
                }
            };
             
            
            xmlHttp.open("GET", "json.php", true);
            xmlHttp.send();
                 
             }
        </script>
        
    <script> 
        $(function(){
          $("#includedContent").load("navbar.php"); 
        });
    </script> 
        
    <script src="http://maps.googleapis.com/maps/api/js"></script>   
        
        <script>
        function initialize() {
          var mapProp = {
            center:new google.maps.LatLng(38.951705,-92.334072),
            zoom:5,
            mapTypeId:google.maps.MapTypeId.ROADMAP
          };
          var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
      </script>
        
    </head>
    <body>
    
        
    <div class="row" id="row0">
            <div class="col-sm-12">
                <nav class="navbar navbar-default navbar-fixed-top">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" id="Icon" href="index.php">MARK MADDEN</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                           <li><a href="http://mcmpw6cs2830.azurewebsites.net/madden/about.php">About</a></li>
                          <li><a href="http://mcmpw6cs2830.azurewebsites.net/madden/resume.php">Resume</a></li>
                        <li><a href="http://mcmpw6cs2830.azurewebsites.net/madden/contact.php">Contact</a></li>
                          <li><a href="https://github.com/MaddenMark1495">Portfolio</a></li>
                        <li><a href="http://mcmpw6cs2830.azurewebsites.net/madden/log-in.php">Log In</a></li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>

                    </div>
           </div>
        

        
    <div class="row" id="row1">
            
            <div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="tele.jpg" alt="Bean" width="1400" height="200" >
        <div class="carousel-caption">
          <h2>Contact me</h2>
          
        </div>
      </div>
        
      </div>
        
        
        
        
        </div>
        
             </div>
    
</div>
        
        <hr>
        
    <div class="row" id="row2">
        
            <div class="col-sm-6">
                
                <h2>Contact Information</h2>
                
                <h3>Mark Madden</h3>
                <p>626 w. 56th st.</p>
                <p>Hinsdale IL 60521</p>
                <p>630-205-9300</p>
                <p>mcmpw6@mail.missouri.edu</p>
                
                <div id="minirow">
                    
                    
               <div id="button1" >
    
                <div class="col-sm-4"> </div>
                    
                  <div class="col-sm-4"> 
                <form method="get" action="markmaddenresume.pdf">
                <button class="btn btn-primary btn-xs"  type="submit">Download Resume</button>
                </form>
                <button id="butt1" type="button" class="btn btn-primary btn-xs" onclick="getContent()">Get School Addresss  </button>
                </div>
                    </div>   
                    
                
        </div>
        
        
        </div>
        
            <div class="col-sm-6">
                
                <img id="me" src="me.jpg" alt="picture of me" class="img-responsive">
           </div>
        
           </div>    
        
        <hr>
        
    <div class="row" id="row3">
        
                <div class="col-sm-6">
                    
                    <h2>School Address:</h2>
                    
                </div>
                    
                     <h4 id="contentBox" ></h4>
                 </div>
                
                <div class="col-sm-6">
                    
                 </div>
                    
            
            </div>
        
        <br>
        <br>
        <br>
    
        <div class="row" id="row4">
            
            <div class="col-sm-6">
                
                <div id="googleMap" ></div>
                    
                 </div>
            
            <div class="col-sm-6">
                    
                 
        <form role="form" action="action_page.php" method="get">
          <div class="form-group">
            <label for="email">First Name:</label>
            <input type="email" class="form-control" id="email">
          </div>
            <div class="form-group">
            <label for="email">Last Name:</label>
            <input type="email" class="form-control" id="email">
          </div>
            
            <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email">
          </div>
            
             <div class="form-group">
              <label for="comment">Comment:</label>
              <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
            <button type="button" class="btn btn-primary btn-xs">Submit</button>
          
         
        </form>
            </div>
            
    </div>
    
    
        
        
        <div class="row" id="row5">
            
             <div id="includedContent"></div>
        
        </div>
    
        
        
        
        
        
        
    
    </body>
     
</html>