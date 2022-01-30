<?php
include __DIR__ . '/../header.php';
echo "<h1>Deleting articles page!</h1>";
include __DIR__ . '/../footer.php';
?>
<body>
<form method="post" action="/article/articleDelete" >
		<div class="input-group">
			<label>Title</label>
			<input type="text" name="title" value="">
		
		<div class="input-group">
			<button class="btn" type="submit" name="Btnadd" value="Delete" ></button>
		</div>
		
	</form>
</body>
</html>