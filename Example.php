<?php
class Example {
  public function test() {
  	$text = file_get_contents("http://localhost:8080/test");
    return $text;
  }
}
?>
