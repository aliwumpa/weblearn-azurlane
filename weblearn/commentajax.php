<?php



if(isset($_POST['task']) && $_POST["task"] == 'commentpost')
{
		
	$userID = (int)$_POST['userID'];
	$userNm = addslashes($_POST['userNm']);
	$comment = addslashes(str_replace("\n", "<br>", $_POST['comment']));


	$std = new stdClass();
	$std ->commentID = 24;
	$std ->userID = $userID;
	$std ->userNm = $userNm;
	$std ->comment = $comment;
	$std ->profile_img = "discussion/imgtester.PNG";

	
	if(class_exists('datausercomment')){
		$commentInfo = Comments::insert($comment,$userID);
		if($commentInfo!=null)
		{

		}
	}

	echo json_encode($std);

}

else
{
	header ("location: /WebAzur/weblearn-azurlane/weblearn/index.html");
}

?>

