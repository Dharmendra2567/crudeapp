namespace resources\views;
<html>
    <head>
        <title>Login Page</title>
       <style>
     body {
         background-color:metal;
        margin-left:500px;
        margin-top:200px;
     }
     input {
         padding:10px;
     }
    
        </style>
</head>
<body>
     <form action="PostController.php" method="post">
           
Username:<input type="text" name="fname"/><br>
Password:<input type="text" name="password" /><br>
<input type="submit"  class="btn btn-primary" />
<input type="reset" class="btn btn-danger" />
    </form>
</body>
</html>
