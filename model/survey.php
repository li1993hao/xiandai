<?php
class survey extends Model
{
	public function getSurveyList()
	{
		$sql = "SELECT * FROM `survey` ORDER BY `survey`.`su_istop` DESC, `survey`.`su_create` DESC  LIMIT 0, 20";
		return $this->fetchAll($sql);
	}
	public function insertSurvey($title)
	{
		if($title)
		{
			$sql = "INSERT INTO `survey` (`su_id`, `su_title`, `su_create`, `su_num`, `su_istop`,`su_flag`) VALUES (NULL, '".$title."', NOW(), 0, 0, 0);";
			return $this->insert($sql);
		}
		else 
		{
			echo "biaotibunengweikong";
		}
	}
	public function getSurveyId($title)
	{
		$sql="select `survey`.`su_id` from `survey` where `survey`.`su_title`='".$title."' ";
		return $this->fetchRow($sql);
	}
	public function updateTitle($title,$id)
	{
		$sql = "UPDATE `survey` SET `su_title` = '".$title."' WHERE `survey`.`su_id` = '".$id."'";
		return $this->update($sql);
	}
	public function delSurvey($id)
	{
		$sql = "delete from `survey` where `survey`.`su_id`='".$id."'";
		return $this->del($sql);
	}
 	public function updateIstop($id)
 	{
 		$sql = "UPDATE `survey` SET `su_istop` = NOW() WHERE `survey`.`su_id` = '".$id."'";
 		return $this->update($sql);
 	}
	public function updateQuestion($id,$qus)
	{
		$sql = "UPDATE `surveyQuestion` SET `sq_question` = '".$qus."' WHERE `surveyQuestion`.`sq_id` = '".$id."';";
		return $this->update($sql);
	}
	public function insertQuestion($qus,$sid)
	{
		if($sid = 0)
		{
			echo "没有标题，不能添加问卷";
		}
		else 
		{
			if($qus != null)
			{
				$sql = "INSERT INTO `surveyQuestion` (`sq_id`, `sq_question`, `su_id`) VALUES (NULL, '".$qus."', '".$sid."');";
				return $this->insert($sql);
			}
			else
			{
				echo "wentineirongbunengweikong";
			}
		}
	}
	public function updateFlag($id,$flag)
	{
		$sql = "UPDATE `survey` SET `su_flag` = '".$flag."' WHERE `survey`.`su_id` = '".$id."'";
		return $this->update($sql);
	}
	public function getQuestionId($questionContent)
	{

		$sql="select `surveyQuestion`.`sq_id` from `surveyQuestion` where `surveyQuestion`.`sq_question`='".$questionContent."' ";
		return $this->fetchRow($sql);
	}
	public function insertChoose($con,$qid)
	{
		if($con != null)
		{
			$sql = "INSERT INTO `surveyChoose` (`sc_id`, `sc_content`, `sq_id`, `sc_num`) VALUES (NULL, '".$con."', '".$qid."', 0);";
			return $this->insert($sql);
		}
		else
		{
			echo "选项内容不能为空";
		}
	}
	public function delQuestion($id)
	{
		$sql = "delete from `surveyQuestion` where `surveyQuestion`.`sq_id`='".$id."'";
		return $this->del($sql);
	}
	public function delChoose($qid)
	{
		$sql = "delete from `surveyChoose` where `surveyChoose`.`sq_id`='".$qid."'";
		return $this->del($sql);
	}
	public function getQuestionBySid($sid)
	{
		"select * from `surveyQuestion` where `surveyQuestion`.`su_id`='".$sid."' ";
	}
}