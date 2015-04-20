<?php session_start(); ?>
<body>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<form id ="form" action="login.php" method="POST">
		<h1>欢迎登陆 </h1>
         <p>用户名:
         <input type="text" name="username" /></p>
         <p>密码:
         <input type="password" name="password" /></p>
         <input type="submit" value="登陆"/> 
        
    </form>	
</body>

<?php
  

  if(isset($_POST['username'])&&isset($_POST['password']))//check is everything is done
  {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $i=0;
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
    //$sql="SELECT COUNT(uid) FROM user";
    //$row3=mysql_fetch_array(mysql_query($sql));
    
    $result1=mysql_query("SELECT username FROM user");
    while($row1 = mysql_fetch_array($result1))
    {
    
    if($row1['username'] == $username)
    {    
      $i=1;
      $result2=mysql_query("SELECT password FROM user WHERE username='$username'");
    	$row2 = mysql_fetch_array($result2);
      if($row2['password']==$password)
          {
             echo"登陆成功!等待两秒后跳转主页面"; 
             $_SESSION['username']=$username;
             sleep(3);
             header("location:index.php");

          }
        else
          {
            
            echo"<script>alert('密码错误');</script>";  
          }
    	 
    }
  }
  if($i==0)
    {
      echo"<script>alert('用户名不存在');</script>";
    }
  
  
    
    mysql_close($con);
}
else {
  echo"请输入正确的用户名和密码！";
    }


?>