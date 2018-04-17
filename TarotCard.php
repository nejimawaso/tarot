<?php
class TarotCard
{
  public $name;
  public $upright;
  public $reversed;
  public $position = 'upright';

 function __construct($name, $upright, $reversed=""){
    $this->name     = $name;
    $this->upright  = $upright;
    $this->reversed = $reversed;
  }

  function get_meaning($ignorePosition=false ){
    if($ignorePosition){
      return $this->upright;
    } else {
      return ( $this->position == 'upright') ? $this->upright : $this->reversed;
    }
  }
}
?>
