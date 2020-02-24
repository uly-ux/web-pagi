<?php
 include'header.php';
?>

<centre><h1>LOGIN DATA MAHASISWA</h1></centre>
	<form action="" method="POST">		
		<table>
			<tr>
				<td>username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td> 
                <input type="submit" name="login" class="btn btn-primary" value="LOGIN"></td>
			</tr>
		</table>
	</form>

    
 <?php
    if(isset($_POST['login'])){
        $username=$_POST['username'];
        $password=$_POST['password'];

        if($username=='uly' && $password=='123'){
            echo "<script> alert(window.location.href='bootstrap_biodata.php');
            </script>";
        }
    }
 
 ?>  
</body>
</html>


<?php
    include'footer.php';
?>

