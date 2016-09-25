<?php
//Connect to MySQL
require_once("../database/connect.php");
if(isset($_GET['CountID']) && isset($_GET['DiscussionID'])) {
	/*$CountCat = $_GET['CountID'];*/
	$DiscID = $_GET['DiscussionID'];
	if ($_GET['CountID'] == 'PRO'){
		$query = "UPDATE discussion SET pro=pro + 1 where DiscussionID = '$DiscID'";

       //Insert new student into MySQL
		if ($conn->query($query) === TRUE) {
			?>
			<script>
				window.location.href='../discussion.php?<?php echo $DiscID ?>';
			</script>
			<?php
		}
	} elseif($_GET['CountID'] == 'CON'){
		$query = "UPDATE discussion SET con=con + 1 where DiscussionID = '$DiscID'";
        //Insert new student into MySQL
		if ($conn->query($query) === TRUE) {
			?>
			<script>
				window.location.href='../discussion.php?<?php echo $DiscID ?>';
			</script>
			<?php
		}
	} else {
		?>
			<script>
				window.location.href='../discussion.php?<?php echo $DiscID ?>';
			</script>
			<?php
	}
}
	?>