<?php

if(isset($_POST['task']) && $_POST["task"] == 'commentpost')
{
	$userID = (int)$_POST['userID'];
	$userNm = addslashes($_POST['userNm']);
	$comment = addslashes($_POST['comment']);


	$std = new stdClass();
	$std ->userID = $userID;
	$std ->userNm = $userNm;
	$std ->comment = $comment;
	$std ->profile_img = "discussion/imgtester.png";

	echo json_encode($std);

}

else
{
	header ("location: /WebAzur/weblearn-azurlane/weblearn/index.html");
}

?>

