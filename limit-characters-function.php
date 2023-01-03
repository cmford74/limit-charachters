<?php
/**
* limitCharacters($text,$limit)
* @purpose Limits the character count of a given string
* @param (string $text)  String to proess
* @param (int $limit)  Number of characters to limit the given string to
* @return (string) Returns limited string
**/
public function limitCharacters($text,$limit){
  if(strlen($text)<=$limit){
    return $text;
  } else {
    $y=substr($text,0,$limit) . '...';
    return $y;
  }
}
