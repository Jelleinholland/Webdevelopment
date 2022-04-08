<?php
include __DIR__ . '/../header.php';

echo "<h1>LoginPage</h1>";

include __DIR__ . '/../footer.php';
?>
  <form action="/login/login" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		 <div class="input-group">
		 	<label>User Name</label>
     		<input type="text" name="Username" placeholder="User Name"><br>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="Password" placeholder="Password"><br>
		</div>
		<div class="input-group">
			<button class="btn" name="submit" type="submit">Login</button>
		</div>     	
     </form>
</body>
</html>
