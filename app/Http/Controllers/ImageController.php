<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Backgroundimage;
use App\Models\Gallery;
use App\Models\Heroimage;
use App\Models\Socialmedia;

class ImageController extends Controller
{  
    public function getherogallery(Request $request)
    {

        try {
            $all = Heroimage::get()->first();
            if ($all) {
                $all->image_path = asset('/public/images/' . $all->image_path);
                $all->logo_image = asset('/public/images/' . $all->logo_image);

            }
            return response()->json(['image' => $all]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error handling hero gallery'], 500);
        }
    }
 
}
