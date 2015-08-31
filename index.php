<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
<!--            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
            <link rel="stylesheet" type="text/css" href="style.css">
            <script type="text/javascript" src="jquery-1.4.1.min.js"></script>
<!--            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
            <script type="text/javascript">
                //validate username and password
                function validLogin(){
                   var uname=$('#uname').val();
                   var password=$('#password').val();
                   var dataString = 'uname='+ uname + '&password='+ password;
                   
                   
                   //start calling ajax
                   $.ajax({
                         type: "POST",
                         url: "login.php",
                         data: dataString,
                         cache: false,
                         success: function(result){ // if ajax function results success
                         var result=trim(result);
                         
                         if(result=='correct'){ //if result correct, go home page
                              window.location='home.php';
                         }else{  //if result incorrect, print error message
                              $("#errorMessage").html(result);
                         }
                    }
              });
            }

            function trim(str){
            var str=str.replace(/^\s+|\s+$/,'');
            return str;
            }
            </script>
        </head>
    <body>
        
        
        
        <div class="container">
            <h1 >Login Form</h1>
            
            <div  class="login">
                <form method="post" action="">
                    
                    <div class="errorMessage"id="errorMessage"></div>
               
                    <div class="form-group">
                        <label for="inputUsername">User Name</label>
                        <input type="text" name="uname" id="uname" class="form-control" placeholder="User Name">
                        </div> 
                
                       
                        
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    </div> 
                    
                   
                    <div> 
                        <input type="button" name="submit" value="Submit" class="btn btn-default" onclick="validLogin()">
                    </div>
                
                </form>
            </div>


    
        </div>
    </body>
</html>
