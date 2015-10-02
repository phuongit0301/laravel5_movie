<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Config;
use Illuminate\Support\Facades\Storage;

class Movies extends Model
{
    protected $table = "movies";

    public static function curlGetContent($url)
    {
    	// set HTTP header
		/*$headers = array(
		    'Content-Type: application/json',
		);
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_REFERER, $url);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $data = curl_exec($ch);
        // Close connection
        curl_close($ch);
        // get the result and parse to JSON
		$result = json_decode($data);
        return $data;*/

        //Get the file
		$content = file_get_contents($url);
		$extension = $content->getClientOriginalExtension();


		//Store in the filesystem.
		echo $extension;
		//$path = Storage::disk();
		exit;
		$fp = fopen($path."/image.jpg", "w");
		fwrite($fp, $content);
		fclose($fp);
    }
}
