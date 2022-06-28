<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function destroy(Gallery $gallery) {
        if (Auth()->user()-> role != 'admin') {
            $gallery->delete();
            return back()->with('message', 'car deleted successfully!');
        }
        
    }
}
