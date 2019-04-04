<!doctype html>
<html>
	<head>To Do List:</head>
<body>	
	<ul id="todoList">
<?php
	require_once('db.php');
	require_once('classes/lists.classes.php');
		
	$todoListsObj = new todoLists($DBH); //Lets pass through our DB connection

	$listid = $_GET['id']; //Set our list ID to the one given in url
	$listItems = $todoListsObj->getListItems($listid); //Call the getListItems function

	foreach ($listItems as $key => $value) { //Loop over returned items
		echo "<li>".$value['item_name']."</li>"; //Echo item to list
	}
?>
	</ul>

	</body>
</html>