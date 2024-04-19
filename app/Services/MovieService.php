<?php
namespace App\Services;

use App\Models\Movie;
use App\Repositories\MovieRepository;
use App\Services\Interfaces\MovieServiceInterface;

class MovieService implements MovieServiceInterface
{
    protected $movieRepository;
    public function __construct(MovieRepository $movieRepository){
        $this->movieRepository = $movieRepository;
    }

    public function movieCreate(array $data, int $filmmakerId) : Movie{
        return $this->movieRepository->movieCreate($data, $filmmakerId);
    }

    public function getMovies(){
        return $this->movieRepository->getMovies();
    }
}


