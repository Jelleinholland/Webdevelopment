<?php
include __DIR__ . '/../header.php';
echo "<h1>Updating articles page!</h1>";
include __DIR__ . '/../footer.php';
?>
<body>
<form method="post" action="/article/articleUpdate" >
		<div class="input-group">
			<label>Title</label>
			<input type="text" name="oldtitle" value="">
		</div>
		<div class="input-group">
			<label>New Title</label>
			<input type="text" name="title" value="">
		</div>
		<div class="input-group">
			<label>Author</label>
			<input type="text" name="author" value="">
		</div>
		<div class="input-group">
			<label>Content</label>
			<input type="text" name="content" value="">
		</div>
		
		<div class="input-group">
			<button class="btn" type="submit" name="Btnadd" >Add</button>
		</div>
		
	</form>
</body>
</html>