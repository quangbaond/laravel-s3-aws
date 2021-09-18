<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Config;
class S3Controller extends Controller
{
    public function upload()
    {
        return view('s3.index');

    }
    public function store(Request $request)
    {
        $file = $request->file;
        $name = time() . $file->getClientOriginalName();
        $filePath = '/.'.$name;
        Storage::disk('s3')->put($filePath, file_get_contents($file));
        $imageUrl = Storage::disk('s3')->exists($filePath) ? Storage::disk('s3')->url($filePath) : NULL;
        return back()->with(['imageUrl' => $imageUrl]);
        
    }

    public function TotalSizeFolders($folder = '/')
    {
    
        $disk = Storage::disk('s3');
        $size = array_sum(array_map(function($file) {
            return (int)$file['size'];
          return (int)$file['size'];
        }, array_filter($disk->listContents('/', true /*<- recursive*/), function($file) {
            return $file['type'] == 'file';
        })));
        dd($size);
        return $size;
    }
}

