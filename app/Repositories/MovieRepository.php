<?php
namespace App\Repositories;

use App\Models\Movie;
use App\Repositories\Interfaces\MovieRepositoryInterface;
use Cloudinary\Api\Upload\UploadApi;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Auth;

class MovieRepository implements MovieRepositoryInterface
{
    protected $cloudinary;
    protected $uploadApi;

    public function __construct(UploadApi $uploadApi){
        $this->uploadApi = $uploadApi;
        $this->cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                'url' => env('CLOUDINARY_URL'),
                'api_key' => env('CLOUDINARY_API_KEY'),
                'api_secret' => env('CLOUDINARY_API_SECRET'),
                'secure' => true,
            ],
        ]);
    }
     public function movieCreate(array $data, int $filmmakerId) : Movie
        {
            $movie = new Movie();
            $movie->title = $data['title'];
            $movie->description = $data['description'];
            $movie->date = $data['date'];
            $movie->filmmaker_id = $filmmakerId;
            $movie->cinema_id = $data['cinema_id'];
            $movie->room_id = $data['room_id'];
            $movie->category_id = $data['category_id'];

            if(isset($data['image'])) {
                $imageUploadResult = $this->uploadApi->upload($data['image']->getRealPath(), [
                    'folder' => 'movies/images',
                    'public_id' => uniqid(),
                ]);
                $movie->image = $imageUploadResult['secure_url'];
            }

            if (isset($data['trailer'])) {
                $trailerUploadResult = $this->uploadApi->upload($data['trailer']->getRealPath(), [
                    'folder' => 'movies/trailers',
                    'resource_type' => 'video',
                    'public_id' => uniqid(),
                ]);

                $movie->trailer = $trailerUploadResult['secure_url'];
            }
            $movie->save();

            return $movie;
        }

        public function getMovies()
        {
            $Movies = Movie::with('cinema', 'category')->get();
        }
}


