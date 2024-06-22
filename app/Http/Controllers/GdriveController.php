<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yaza\LaravelGoogleDriveStorage\Gdrive;

class GdriveController extends Controller
{
    public function index()
    {
        return response()->view('upload');    
    }

    public function list()
    {
        $all = Gdrive::all('/', true);

        $urls = [];
        foreach($all as $a)
        {
            array_push($urls, $a['path']);
        }

        $imgs = [];
        foreach($urls as $url)
        {
            $img = Gdrive::get($url);
            $img->file = base64_encode($img->file);
            array_push($imgs, $img);
        }

        return response()->view('list', [
            'imgs' => $imgs
        ]);
    }

    public function store(Request $request) 
    {
        $request->validate([
            'img' => ['required', 'image', 'max:1024']
        ]);

        $img = $request->file('img');
        $extension = $img->getClientOriginalExtension();
        $filename = Carbon::now()->timestamp . ".$extension";

        Gdrive::put($filename, $img);

        return redirect('/');
    }

    public function delete(Request $request)
    {
        $result = Gdrive::delete($request->filename);
        return redirect('/list');
    }
}
