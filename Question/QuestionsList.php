<?php
namespace Nguyen\AlgoPhp;
class QuestionsList {
    private $listQuestion = [];

    public  function __construct($listQuestion = [])
    {
        $this->listQuestion = $listQuestion;
    }

    public  function parse($path)
    {
        $contents = file_get_contents($path);
        $arrayQuestions = explode("######",$contents);
        array_shift($arrayQuestions);
        foreach ($arrayQuestions as $questions)
        {
              [$question,$anser]  = explode("####",$questions);
               $this->listQuestion[] = new Question($question,$anser);

        }
        return $this;
    }

    public function getAll()
    {
        if(count($this->listQuestion) <=0)
        {
            echo "Danh sách câu hỏi trống";
        }
     return $this->listQuestion;
    }

    public function getQuestion($number)
    {
        if($number <=0 || $number > count($this->listQuestion)){
            return null;
        }
        return $this->listQuestion[$number -1];
    }

    public function getResultQuestion($number) {
        $entire_question = $this->getQuestion($number);
        return $entire_question->question;
    }

    public function getResultAnswer($number) {
        $entire_question = $this->getQuestion($number);
        return $entire_question->answer;
    }
}
