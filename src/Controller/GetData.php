<?php 
namespace MyApp\Controller;

class GetData
{
 
 private $title_file;
 private $content_file;   

 function __construct()
 {
     $this->setTitle($_REQUEST['title']);
     $this->setContent($_REQUEST['body-text']);
 }

 public function getTitle(){
    return $this->title_file;
 }

 public function setTitle($title){
    $this->title_file = $title;
 }

 public function getContent(){
    return $this->content_file;
 }

 public function setContent($content){
     $this->content_file = $content;
 }

}

?>