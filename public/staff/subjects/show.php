<?php require_once('../../../private/initialize.php'); ?>
<?php
    
    $id = $_GET['id'] ?? "Hello world"; // PHP > 7.0
	
	echo h($id);
	/* if(isset($_GET['id'])) {
		echo $_GET['id'];
	} else {
		echo 'Hello World !';
	} */
?>

<a href="show.php?name=<?php echo u('John Doe'); ?> ">Link</a><br/>
<a href="show.php?company=<?php echo u('Widgets&More'); ?> ">Link</a><br/>
<a href="show.php?query=<?php echo u('#?*!'); ?> ">Link</a><br/>


