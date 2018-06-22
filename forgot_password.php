<html>
    <head>
       
        <title>Password recovery | A_NIT</title>
         <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
        <script type="text/javascript" src="bootstrap\js\jquery-3.2.1.min.js">
        </script>
        <script type="text/javascript" src="bootstrap\js\bootstrap.min.js">
            </script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
          <link rel="shortcut icon" href="img/logo3.png"/>
          <link rel="stylesheet" type="text/css" href="index.css">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
        <style type="text/css">
            .background{
                background: url(img/background_14.jpg) no-repeat center center fixed;
                background-size:cover;
            }
        </style>
        
    </head>
    <body class="background" style="overflow-x:hidden;">
        <div class="container kar5">
            <div class="row kar1">
                <center><div> 
                <a href="#">
                    <img src="img\1.png" alt="LOGO">
                </a>
            </div>
                </center>
            </div>
            <br>
            
            <div class="row">
                <div class="col-md-offset-2 col md-8 col-xs-offset-1 col-xs-10 col-lg-offset-3 col-lg-6 col-sm-offset-2 col-sm-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <center>
                        <h3 class="kar2">
                        NIT Warangal
                       </h3>
                        </center>
                </div>
                <div class="panel-body">
                    <center><h4 class="text-warning"> 
                        Password Recovery
                    </h4></center>
                    <form method="post" action="forgot_password.php" enctype="multipart/form-data" autocomplete="on">
                        <div class="form-group">
                            <input type="email" placeholder="Email" name="email" class="form-control" required autocomplete="on">
                            </div>
                        <div class="form-group">
                            <input type="text" placeholder="Student Phone number" name="student_phone_no" class="form-control" required autocomplete="on">
                            </div>
                        <div class="form-group">
                            <input type="text" placeholder="Parent Phone number" name="parent_phone_no" class="form-control" required autocomplete="on">
                            </div>
                        <?php
        include "connect.php";
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $f1=mysqli_real_escape_string($a,$_POST['email']);
            $f2=mysqli_real_escape_string($a,$_POST['student_phone_no']);
            $f3=mysqli_real_escape_string($a,$_POST['parent_phone_no']);
            if (preg_match("/^[0-9]*$/",$f2))
               {
                  if (preg_match("/^[0-9]*$/",$f3))
                        {
                            $sqlf="SELECT email,student_phone_no,parent_phone_no,password FROM my_account WHERE email='$f1' AND student_phone_no='$f2' AND parent_phone_no='$f3'" ;
                    if($result=mysqli_query($a,$sqlf))
                        {
                            $row=mysqli_fetch_row($result);
                                 
                                    if ($row[0]==$f1 && $row[1]==$f2 && $row[2]==$f3)
                                         {
                                            echo '<div class="panel-footer">';
                                            echo '<div class="alert alert-danger">';
                                            echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                            echo 'Your password is  '.$row[3]; 
                                            echo '</div>';
                                            echo '</div>';
                                         } 
            
                
                                 else
                                    {    echo '<div class="panel-footer">';
                                         echo '<div class="alert alert-danger">';
                                         echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                        echo 'No such record is found.Please try agian'; 
                                        echo '</div>';
                                         echo '</div>';
                             
                                    }
            }
         
                else
                        {    echo '<div class="panel-footer">';
                             echo '<div class="alert alert-danger">';
                             echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                             echo 'Server busy.Please try agian'; 
                             echo '</div>';
                             echo '</div>';
                             
                        }
                        
                   }
                         else
                         {
                              echo '<div class="panel-footer">';
                             echo '<div class="alert alert-danger">';
                             echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                             echo 'Parent phone number must contain digits only.Please try agian'; 
                             echo '</div>';
                             echo '</div>';
                         }
                   }
                        else
                         {
                              echo '<div class="panel-footer">';
                             echo '<div class="alert alert-danger">';
                             echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                             echo 'Student phone number must contain digits only.Please try agian'; 
                             echo '</div>';
                             echo '</div>';
                         }
                        
               }          
                
        mysqli_close($a);
        ?>
                        <br>
                        <div class="form-group">
                          
                        <center>
                            <button class="btn btn-primary">
                              Submit
                             </button>
                            </center>
                    </div>
                    </form>
                    
                </div>
               
            </div>
                </div>
                </div>
            </div>
        <br><br>
        
            <?php include "footer.php"?>
                    
    </body>
</html>