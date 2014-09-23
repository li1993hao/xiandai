<?php
class QuestionnaireController extends Controller
{
	public function __construct(){
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	public function Getsurveylist()
	{
			$survey = new survey();
			
			if($_POST)
			{
				$do = $this->getRequest()->get("do");
				if($do == "disable"){
					$id = $this->getRequest()->get("id");
					$updateFlag = $survey->updateFlag($id, 0);
				}
				else if($do == "enable")
				{
					$id = $this->getRequest()->get("id");
					$updateFlag = $survey->updateFlag($id, 1);
				}
				
				else if($do == "del")
				{
					$id = $this->getRequest()->get("id");
					$del = $survey->delSurvey($id);
					$this->view->result = "删除调查id为".$id."调查问卷成功";
				}
				else if($do == "istop")
				{
					$id = $this->getRequest()->get("id");
					$updateIstop = $survey->updateIstop($id);
				}
			}
			$surveyList = $survey->getSurveyList();
			$this->view->survey = $surveyList;
			echo $this->view->render("survey.htm");
	}
	public function Addquestionnaire()
	{
		$survey = new survey();
		if($_POST)
		{
			print_r($_POST);
			$do = $this->getRequest()->get("do");
			if($do =="close")
			{
				
			}
			else if ($do == "save")
			{
				$addsurvey =  $survey->insertSurvey($_POST['title']);
			}
			else if($do == "addqus")
			{
				$addsurvey =  $survey->insertSurvey($_POST['title']);
				$sid = $survey->getSurveyId($_POST['title']);
				$addquestion = $survey->insertQuestion($_POST['questioncontent'],$sid);
				
			}
			//$survey = new survey();
			//$addsurvey =  $survey->insertSurvey($_POST['title']);
			//$sid = $survey->getSurveyId($_POST['title']);
			//$addquestion = $survey->insertQuestion($_POST['questioncontent'],$sid);
			//$qid = $survey->getQuestionId($_POST['questioncontent']);
			//$addchoose = $survey->insertChoose($_POST['content'], $qid);
			//$this->view->sur = $addsurvey;
			//$this->view->question = $addquestion;
			//$this->view->choose = $addchoose;
		}
		//$questionList = $survey->getQuestionBySid($sid);
		//$this->view->question = $questionList;
		echo $this->view->render("addsurvey.html");
	}
}