<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>HoneyDO List</title>
</head>
<body>
<h1>HoneyDo List</h1>
<div>
	<?php if (count($tasks) > 0): ?>
	<ul>
		<?php foreach ($tasks as $task): ?>
		<li><?= $task->getDescription(); ?></li>
		<?php endforeach; ?>
	</ul>
	<?php endif; ?>

</div>
</body>
</html>
