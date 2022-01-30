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
     	<label>User Name</label>
     	<input type="text" name="Username" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="Password" placeholder="Password"><br>

     	<button name="submit" type="submit">Login</button>
     </form>
</body>
</html>
