<?php
class Movie{

    public $id;
    public $title;
    public $description;
    public $image;
    public $trailer;
    public $category;
    public $length;
    public $users_is;


    public function imageGenarateName(){
        return bin2hex(random_bytes(50).".jpg");
    }


}
interface MovieDAOinterface {
  public function buildMovie($data);
  public function findAll();
  public function getLatestMovies();
  public function getMoviesByCategory($category);    
  public function getMoviesByUserIf($id);
  public function findById($id);
  public function findByTitlr($title);
  public function create(Movie $movie);
  public function update (Movie $movie);
  public function destroy ($id);
}

?>