<?php
class TarotReading
{
  private $deck;        //山札
  private $originalDeck; //初期化用の山札

//山札を用意
  function set_deck( $cards ){
    $this->deck = $cards;
    $this->originalDeck = $cards;
  }

//山札をリセット
  function reset_deck(){
    $this->deck = $this->originalDeck;
  }

//カードをシャッフル
  function shuffle_deck( $shufflePosition=false ){
    shuffle( $this->deck );

//位置をシャッフル
    if( $shufflePosition ){
      foreach( $this->deck as &$card ){
        $card->position = (mt_rand(0,1)) ? 'upright' : 'reversed';
      }
    }
  }

//カードをひく
  function draw_card(){
    if( count($this->deck) == 0 ) return false;
    return array_pop( $this->deck );
  }
}
?>
