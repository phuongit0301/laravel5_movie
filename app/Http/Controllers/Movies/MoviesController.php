<?php

namespace App\Http\Controllers\Movies;

use App\Http\Controllers\Controller;
use App\Movies;
use Illuminate\Http\Request;
use Tmdb\Laravel\Facades\Tmdb;
use Tmdb\Helper\ImageHelper;
use Tmdb\Api\Movies as MoviesApi;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    private $movies;
    private $helper;

    public function __construct(MoviesApi $movies, ImageHelper $helper)
    {
        $this->movies = $movies;
        $this->helper = $helper;
    }


    public function index()
    {
        echo 123;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //$movie = Tmdb::getMoviesApi()->getMovie(76341);
        
        /*if (isset($data['poster_path']) && !empty($data['poster_path'])) {
            $filePath = $data['poster_path'];
        }*/
        //Get image URL for the backdrop image in its original size
        //$image_url = $tmdb->getImageUrl($filePath, Tmdb::IMAGE_BACKDROP, 'original');
        ////Get the file
        /*$content = file_get_contents("http://www.google.co.in/intl/en_com/images/srpr/logo1w.png");
        //Store in the filesystem.
        $fp = fopen("/location/to/save/image.jpg", "w");
        fwrite($fp, $content);
        fclose($fp);*/
        $urlImagePoster = $this->helper->getUrl("/uHeMMJIZRVjeS2WIFcxBCdCTdmk.jpg");

        $content = file_get_contents($urlImagePoster);
        //Store in the filesystem.
        $local = config("images.uploads.webpath")."/abc.jpg";
        
        $fp = fopen($local, "w");
        fwrite($fp, $content);
        fclose($fp);
        //$image = $this->movies->getMovie(177677);
        print_r($image);
        //return view('admin.movies.show', ['data' => 'image']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
