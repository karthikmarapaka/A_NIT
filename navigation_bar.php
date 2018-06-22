<?php
        session_start();
        
       if(isset($_SESSION['first_name_s']))
        {
       $first_name_n=$_SESSION['first_name_s'];
        }
 else 
 {  $first_name_n="Guest";
  header('location: login.php');
 }    
         //?>
<!DOCTYPE html>
 
<html>
    <head>
        <title>My Account | A_NIT</title>
         <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
        <script type="text/javascript" src="bootstrap\js\jquery-3.2.1.min.js">
        </script>
        <script type="text/javascript" src="bootstrap\js\bootstrap.min.js">
            </script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="index.css">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
       
    </head>
    <body>
<nav class="navbar navbar-default navbar-fixed-top" >
                <div class="navbar-header">
                   <button class="navbar-toggle" data-toggle="collapse" data-target="#iden1">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="btn-group navbar-brand" role="group" aria-label="..." style="margin-left:1.5vw;">
                         <div class="btn-group" role="group" >
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left:1vw; margin-right: 0.1vw; border-right:0.1vw;">
 
      <span class="glyphicon glyphicon-menu-hamburger"></span>
    </button>
    <ul class="dropdown-menu">
      <li class="kar14">
                       <a href="promises.php" class="kar8">
                           <span class="glyphicon glyphicon-list-alt kar13">
                      </span>
                           Promises
                   </a>
                   </li>
                   
                       <li class="kar14">
                       <a href="student_council.php" class="kar8">
                           <span class="glyphicon glyphicon-tower kar13">
                      </span>
                           
                           Student Council
                   </a>
                   </li>
                   <li class="kar14">
                       <a href="projects.php" class="kar8">
                           <span class="glyphicon glyphicon-link kar13">
                      </span>
                           Projects
                   </a>
                   </li>
                   <li class="kar14">
                       <a href="warq.php" class="kar8">
                           <span class="glyphicon glyphicon-globe kar13">
                      </span>
                           WarQ
                   </a>
                   </li>
                   <li class="kar14">
                       <a href="complaint_box.php" class="kar8">
                           <span class="glyphicon glyphicon-briefcase kar13">
                      </span>
                           Complaint Box
                   </a>
                   </li>
                   <li class="kar14">
                       <a href="assess.php" class="kar8">
                           <span class="glyphicon glyphicon-envelope kar13">
                      </span>
                           Assess
                   </a>
                   </li>
                   <li class="kar14">
                       <a href="creative_ideas.php" class="kar8">
                           <span class="glyphicon glyphicon-comment kar13">
                      </span>
                        Creative ideas
                   </a>
                   </li>
                   <li class="kar14">
                       <a href="dirmess.php" class="kar8">
                           <span class="glyphicon glyphicon-lamp kar13">
                      </span>
                          Dir's Message
                   </a>
                   </li>
                   <li class="kar14">
                       <a href="faq.php" class="kar8">
                           <span class="glyphicon glyphicon-question-sign kar13">
                      </span>
                           FAQ
                   </a>
                   </li>
                   
    </ul>
  </div>
</div>
                    <a href="index.php" class="navbar-brand" style="margin-top:1vh; margin-left:-2vw; ;font-size:140%;">
                          Nit Warangal
                    </a>
                </div>
                    <div class="collapse navbar-collapse" id="iden1">
                        <ul class="nav navbar-nav navbar-right">
                            
                            <li class="dropdown">
                               <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $first_name_n; ?>&nbsp;<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                
                                    
                                    <li style="font-size:120%; padding:1vh 1vw;"><a href="my_projects.php"> <span class="glyphicon glyphicon-link kar13">
                      </span>My Projects</a></li>
                                    <li style="font-size:120%; padding:1vh 1vw;"><a href="my_warq.php"><span class="glyphicon glyphicon-globe kar13">
                      </span>My WarQ</a></li>
                                    <li style="font-size:120%; padding:1vh 1vw;"><a href="my_complaint_box"><span class="glyphicon glyphicon-briefcase kar13">
                      </span>My Complaint Box</a></li>
                                    <li style="font-size:120%; padding:1vh 1vw;"><a href="my_creative_ideas.php">
                                            <span class="glyphicon glyphicon-comment">
                                                
                                                     </span>&nbsp;&nbsp;&nbsp;My Creative ideas</a></li>
                                    <li style="font-size:120%; padding:1vh 1vw;"><a href="my_account.php" class="kar9">
                                          <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;&nbsp;My Info             </a></li>
      </ul>
                            </li>
    
                                
                           
                            <li>
                                
                                <a href="change_password.php" class="kar9">
                                    <span class="glyphicon glyphicon-briefcase">
                                    </span>&nbsp;&nbsp;Change password
                                </a>
                                
                            </li>
                            <li style="margin-right:3vw;">
                                <a href="logout.php" class="kar9">
                                    <span class="glyphicon glyphicon-log-out">
                                    </span>&nbsp;&nbsp;Logout
                                </a>
                            </li>
                        </ul>
                    </div>
              </nav>
    </body>
    </html>