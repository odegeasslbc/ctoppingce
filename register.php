<body>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 

	<form id ="form" action="register.php" method="POST">
		<h1>欢迎注册</h1>
        <p>邮箱:
         <input type="text" name="email" /></p>
         <p>用户名:
         <input type="text" name="username" /></p>
         <p>密码:
         <input type="password" name="password" /></p>
         <input type="submit" value="注册"/> 
        <input id="loginout" name="loginout" type="button" onclick="window.location.    href='index.php'" value="返回主页">  
    </form>	


</body>
<?php
  

  if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['email']))//check is everything is done
  {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email =$_POST['email'];

    /*$pdo =new PDO('mysql:host=localhost;dbname=test','root','204wswswws');
    $setall="INSERT INTO users VALUES(' ','$username',$password')";//set the value into database
    $pdo->exec($setall);*/
    $con=mysql_connect('localhost','root','204wswswws');
    mysql_query("set names 'utf8' ");  
    mysql_query("set character_set_client=utf8");  
    mysql_query("set character_set_results=utf8"); 
    if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }
    mysql_select_db("users", $con);

 $result=mysql_query("SELECT password FROM user WHERE username='$username'");
$row=mysql_fetch_array($result);
if(!empty($row))
{
    echo"<script>alert('此用户名已注册');</script>";
}
else
{




    
    $sql="INSERT INTO user (email, username, password)
    VALUES(' $email ','$username','$password')";

    if (!mysql_query($sql,$con))
    {
     die('Error: ' . mysql_error());
    }
    echo"<script>alert('注册成功！');</script>";

    mysql_close($con);
    
}
 



}
?>