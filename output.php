<?php

class Output
{
  public function end($message)
  {
    echo $message;
	
	exit;
  }
}