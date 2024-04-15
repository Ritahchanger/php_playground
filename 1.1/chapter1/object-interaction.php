<?php



class Song
{
    public $songId;

    public $title;
}

$octopusSong = new Song();
$octopusSong->songId = 1;
$octopusSong->title = "Octopu's Garden";


$gloriaMuliro = new Song();

$gloriaMuliro->songId = 2;

$gloriaMuliro ->title ="Sitolia";


class PlayList
{
    public $name;
    public $songs = [];

    public function addSong($song)
    {
        $this->songs[] = $song;
    }
}

$playList = new PlayList();
$playList->name = "Gospel";

$playList->addSong($octopusSong);

$playList->addSong($gloriaMuliro);

var_dump($playList->songs);
