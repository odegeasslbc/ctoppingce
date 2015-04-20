<meta charset="utf-8">
<?php 
		session_start();
		
		
		if(isset($_SESSION["username"]))
      		{	
      			
      			$a=$_SESSION['username'];
      			echo "欢迎您， "$a;
      			
      			
      			

		
			}
		?>