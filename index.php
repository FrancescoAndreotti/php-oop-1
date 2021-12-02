<?php
class Movie
{
  public $titolo;
  public $regista;
  public $anno;
  public $budget;


  function __construct($anno)
  {
    $this->anno = $anno;
  }

  public function get_title($title)
  {
    $this->title = $title;
  }
}

$anno = new Movie(2000);
echo $anno->anno;


$pulpFiction = new Movie("Pulp Fiction", "Quentin Tarantino", 1994, 8.5);
$pulpFiction->get_title("Pulp Fiction", "Quentin Tarantino", 1994, 8.5);
echo "<h1>$pulpFiction->title</h1>";
