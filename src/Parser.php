<?php

namespace skytower\parser;

class Parser implements ParserInterface {
    //must to be: public function process(string $url,string $tag)
   public function process(string $tag,string $url) {
        $this->url = $url;
        $this->tag = $tag;
        // Regular expression(for example)
        $regex = '#['.$tag.'>][\d\s\w-\s]+[<//'.$tag.']#'; //рег.выраж. тег></тег
        $content = file_get_contents($url); //получаем контент страницы
        preg_match_all($regex, $content,  $matches);//делаем выборку содержимого тега
	//var_dump($matches);
        return $matches;
        }
   public function test(){
       //feature
   } 
    };
   
  // $test = new Parser;
// $test->process('https://www.w3schools.com/css/','h3');
?>
