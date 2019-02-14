<?php
	/**
	 * Created by PhpStorm.
	 * User: abass
	 * Date: 12/02/2019
	 * Time: 18:16
	 */
	require_once('../../../private/initialize.php');
	include(SHARED_PATH . '/staff_header.php');

	$id = $_GET['id'] ?? "Hello World";
?>

<a href="index.php"><< Back To List </a><br />
<?php
	echo "Page ID:". h($id);
?>
<div id="content"></div>



<?php include(SHARED_PATH . '/staff_footer.php'); ?>

