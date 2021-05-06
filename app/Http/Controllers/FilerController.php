<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ImgUploader;
use Image;

class FilerController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('image')) {
            if(null!==($request->images_limit) && $request->images_limit >1){
                $files = $request->file('image');

                foreach($files as $file){
                    $image = $file;
                    $width = $request->width;
                    $height = $request->height;
                    $originName = $file->getClientOriginalName();
                    $fileName = pathinfo($originName, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();

                    $filename = $fileName;

                    $fileName = $fileName.'_cms_'.time().'.'.$extension;
                    $destinationPath = public_path('/images/thumb');
                    if($extension !=='ico'){
                        $img = Image::make($image->getRealPath());
                        $img->resize($width, $height, function ($constraint) {
                            $constraint->aspectRatio();
                        })->save($destinationPath . '/' . $fileName);
                    } 
                    $file->move(public_path('images'), $fileName); 

                    $data['single'] = $fileName;

                    echo $fileName;
                }

            }else{
               $image = $request->file('image');

                $width = $request->width;
                $height = $request->height;
                $originName = $request->file('image')->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();

                $filename = $fileName;

                $fileName = $fileName.'_'.time().'.'.$extension;
                $destinationPath = public_path('/images/thumb');
                if($extension !=='ico'){
                    $img = Image::make($image->getRealPath());
                    $img->resize($width, $height, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath . '/' . $fileName);
                }

                $request->file('image')->move(public_path('images'), $fileName);

                $data['single'] = $fileName; 
                //dd($fileName);
                echo $fileName;
            }

            
            exit;
        }
    }

    public function fileDestroy(Request $request)
    {
        $filename =  $request->get('file');
        $path=public_path().'/images/'.$filename;
        if (file_exists($path)) {
            unlink($path);
        }

        $path=public_path().'/images/thumb/'.$filename;
        if (file_exists($path)) {
            unlink($path);
        }

        $path=public_path().'/images/mid/'.$filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;  
    }
}
