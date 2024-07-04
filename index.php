<?php
require './vendor/autoload.php';

$test = new Nguyen\AlgoPhp\QuestionsList();
$test->parse('question.md');

// var_dump($test->getAll());

// $question = $test->getQuestion(1);
// var_dump($question);

$question = $test->getResultQuestion(1);
var_dump($question);
