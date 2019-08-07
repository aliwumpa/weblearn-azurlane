<?php

/**
 * 
 */
class datausercomment 
{
	
	public static function getDatauser($userID)
	{
		
	}

	public static function insert($comment,$userID)
	{
		$std = new stdClass();
		$std->comment_id = null;
		$std->fromsqlcomment =$comment;
		$std->userID = (int)$userID;

		return $std;
	}

	public static function update($data)
	{

	}
	public static function delete($data)
	{

	}

}


?>