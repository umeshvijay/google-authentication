<html>  
<head>  
    <title>Register</title>  
    
    <link rel = "stylesheet" type = "text/css" href = "second.css">   
    <link rel = "stylesheet" type = "text/css" href = "first.css"> 
</head>  
<body> 
    
<div class="header">
        <img src="logo.png" alt="logo" width="200px">
        <div class="header-right">
          <a class="active" href="index.html">Home</a>
          <a href="registration.php">Registration</a>
          <a href="login.php">Login</a>
         
        </div>
      </div>
    <div id = "frm">  
        <h1>Login</h1>  
        <form name="f1" action = "logdb.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "username" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "password" />  
            </p> 
             
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p> 
           
        </form>  
    </div>  
    
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  