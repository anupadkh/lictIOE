<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <title>ICTC Reservation </title>
    
    <link href="{{ url('/') }}/css/bootstrap.css" rel="stylesheet" />
    <link href="{{ url('/') }}/css/coming-ssoon.css" rel="stylesheet" />    
    
    <!--     Fonts     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
  
</head>

<body>
<nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">  
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="{{ route('login') }}"> 
                    <i class="fa fa-login"></i>
                    Login
                </a>
            </li>
             <li>
                <a href="{{ route('register') }}"> 
                    <i class="fa fa-signup"></i>
                    Register
                </a>
            </li>
       </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
<div class="main" style="background-image: url('images/default.jpg')">

<!--    Change the image source '/images/default.jpg' with your favourite image.     -->
    
    <div class="cover black" data-color="black"></div>
     
<!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->

    <div class="container">
        <h1 class="logo cursive">
            ICTC Reservation System
        </h1>
<!--  H1 can have 2 designs: "logo" and "logo cursive"           -->
        
        <div class="content">
            <h4 class="motto">Reserve the halls of ICT</h4>
            <div class="subscribe">
                <h5 class="info-text">
                    Price list
                </h5>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm6-6 col-sm-offset-3 ">
                        <table class="table table-responsive primary" style="color: white;">
                            <thead>
                                <th>Item</th>
                                <th>Details</th>
                                <th>Price</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Conference Room</td>
                                    <td>
                                        <span>First floor</span>
                                    </td>
                                    <td>
                                        <span>Rs.10,500 (Per Day)</span><br>
                                        <span>Rs. 1,500 (Per Hour)</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Meeting Room </td>
                                    <td>
                                        <span>First floor</span>
                                    </td>
                                    <td>
                                        <span>Rs.5,000 (Per Day)</span><br>
                                        <span>Rs. 1,000 (Per Hour)</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Lecture 1 </td>
                                    <td>
                                        <span>First floor</span>
                                    </td>
                                    <td>
                                        <span>Rs.10,500 (Per Day)</span><br>
                                        <span>Rs. 1,500 (Per Hour)</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Lecture 2 </td>
                                    <td>
                                        <span>First floor</span>
                                    </td>
                                    <td>
                                        <span>Rs.10,500 (Per Day)</span><br>
                                        <span>Rs. 1,500 (Per Hour)</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Lecture 3 </td>
                                    <td>
                                        <span>First floor</span>
                                    </td>
                                    <td>
                                        <span>Rs.10,500 (Per Day)</span><br>
                                        <span>Rs. 1,500 (Per Hour)</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Lecture 4 </td>
                                    <td>
                                        <span>First floor</span>
                                    </td>
                                    <td>
                                        <span>Rs.10,500 (Per Day)</span><br>
                                        <span>Rs. 1,500 (Per Hour)</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Computer 1</td>
                                    <td>
                                        <span>Second floor</span>
                                    </td>
                                    <td>
                                        <span>Rs.18,000 (Per Day)</span><br>
                                        <span>Rs. 600 (Per Computer)</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Computer 2</td>
                                    <td>
                                        <span>Second floor</span>
                                    </td>
                                    <td>
                                        <span>Rs.18,000 (Per Day)</span><br>
                                        <span>Rs. 600 (Per Computer)</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Computer 3</td>
                                    <td>
                                        <span>Second floor</span>
                                    </td>
                                    <td>
                                        <span>Rs.18,000 (Per Day)</span><br>
                                        <span>Rs. 600 (Per Computer)</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Computer 4</td>
                                    <td>
                                        <span>Second floor</span>
                                    </td>
                                    <td>
                                        <span>Rs.18,000 (Per Day)</span><br>
                                        <span>Rs. 600 (Per Computer)</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Computer 5</td>
                                    <td>
                                        <span>Third floor</span>
                                    </td>
                                    <td>
                                        <span>Rs.18,000 (Per Day)</span><br>
                                        <span>Rs. 600 (Per Computer)</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Computer 6</td>
                                    <td>
                                        <span>Third floor</span>
                                    </td>
                                    <td>
                                        <span>Rs.18,000 (Per Day)</span><br>
                                        <span>Rs. 600 (Per Computer)</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Language Lab</td>
                                    <td>
                                        <span>Third floor</span>
                                    </td>
                                    <td>
                                        <span>Rs.18,000 (Per Day)</span><br>
                                        <span>Rs. 600 (Per Computer)</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Lecture 5</td>
                                    <td>
                                        <span>Third floor</span>
                                    </td>
                                    <td>
                                        <span>Rs.18,000 (Per Day)</span><br>
                                        <span>Rs. 600 (Per Computer)</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Seminar 1</td>
                                    <td>
                                        <span>Fourth floor</span>
                                    </td>
                                    <td>
                                        <span>Rs.7,500 (Per Day)</span><br>
                                        <span>Rs. 1,200 (Per Hour)</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Seminar 2</td>
                                    <td>
                                        <span>Fourth floor</span>
                                    </td>
                                    <td>
                                        <span>Rs.7,500 (Per Day)</span><br>
                                        <span>Rs. 1,200 (Per Hour)</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Cafeteria</td>
                                    <td>
                                        <span></span>
                                    </td>
                                    <td>
                                        <span>Rs.5,600 (Per Day)</span><br>
                                        <span>Rs. 800 (Per Hour)</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Generator</td>
                                    <td>
                                        <span></span>
                                    </td>
                                    <td>
                                        <span>30 Liter per hour( Price according to market price)</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>LED Display Board</td>
                                    <td>
                                        <span></span>
                                    </td>
                                    <td>
                                        <span>Rs. 2000 per 24 hours </span>
                                    </td>
                                </tr>



                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
      <div class="container">
             Made by <a href="http://www.ioe.edu.np">Institute Of Engineering</a>.
      </div>
    </div>
 </div>
 </body>
   <script src="{{ url('/') }}/js/jquery-1.10.2.js" type="text/javascript"></script>
   <script src="{{ url('/') }}/js/bootstrap.min.js" type="text/javascript"></script>

</html>