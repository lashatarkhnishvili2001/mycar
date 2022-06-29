<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function destroy(Gallery $gallery) {
            $gallery->delete();
            return back();
            // return back()->with('message', 'car deleted successfully!');
        
    }
}
