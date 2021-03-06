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
        <link href="../jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
        <script src="../jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
        <script src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
        
        <script>
        $(function(){
            $("input[type=submit]").button();
        });
        </script>
        
        <script> 
        $(function(){
          $("#includedContent").load("navbar.php"); 
        });
       </script> 
        
        <style>
            
            #Icon{
             color: #202020;
              background-color: #2d2d2d;
              letter-spacing: .1em;
              text-shadow: -1px -1px 1px #111111, 2px 2px 1px #363636;
            }
            
            
            
            body{
                
                background-color:#E7E5E4;
            
            }
            
        h1 {
      font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
      font-size: 92px;
      padding: 80px 50px;
      text-align: center;
      text-transform: uppercase;
      text-rendering: optimizeLegibility;
    }
    #elegantshadow {
      color: #131313;
  background-color: #e7e5e4;
  letter-spacing: .15em;
  text-shadow: 1px -1px 0 #767676, -1px 2px 1px #737272, -2px 4px 1px #767474, -3px 6px 1px #787777, -4px 8px 1px #7b7a7a, -5px 10px 1px #7f7d7d, -6px 12px 1px #828181, -7px 14px 1px #868585, -8px 16px 1px #8b8a89, -9px 18px 1px #8f8e8d, -10px 20px 1px #949392, -11px 22px 1px #999897, -12px 24px 1px #9e9c9c, -13px 26px 1px #a3a1a1, -14px 28px 1px #a8a6a6, -15px 30px 1px #adabab, -16px 32px 1px #b2b1b0, -17px 34px 1px #b7b6b5, -18px 36px 1px #bcbbba, -19px 38px 1px #c1bfbf, -20px 40px 1px #c6c4c4, -21px 42px 1px #cbc9c8, -22px 44px 1px #cfcdcd, -23px 46px 1px #d4d2d1, -24px 48px 1px #d8d6d5, -25px 50px 1px #dbdad9, -26px 52px 1px #dfdddc, -27px 54px 1px #e2e0df, -28px 56px 1px #e4e3e2;
    }
    
            #row2{

                padding-top:400px;
                
            
            }
            
            label{
                font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
            }
            
            #row6{

                padding-top:90px;
            
            }
            
            
        
        
        </style>
        
        
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
        
        <br>
        <br>
        
        <div class="row" id="row1">
            
            <div class="col-sm-4"></div>
            
            <div class="col-sm-4">
            
            <div id="loginWidget" class="ui-widget">

        <h1 class="ui-widget-header" id='elegantshadow' >Login</h1>
        <h4>Here for fun</h4>
        
        <?php
            if ($error) {
                print "<div class=\"ui-state-error\">$error</div>\n";
            }
        ?>
        
        <form action="login.php" method="POST">
            
            <input type="hidden" name="action" value="do_login">
            
            <div class="stack">
                <label for="username">User name:</label>
                <input type="text" id="username" name="username" class="ui-widget-content ui-corner-all" autofocus value="<?php print $username; ?>">
            </div>
            
            <div class="stack">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="ui-widget-content ui-corner-all">
            </div>
            
            <div class="stack">
                <input type="submit" value="Submit"  class="btn btn-primary">
            </div>
        </form>
    </div>
    
        </div>
        </div>
        
        <div class="row" id="row2">
 
        </div>
        
        
         <div class="row" id="row3">
 
        </div>
        
        <div class="row" id="row4">
 
        </div>
        
    <div class="row" id="row6">
            
        <div id="includedContent"></div>
        
        </div>
        
    </body>
</html>