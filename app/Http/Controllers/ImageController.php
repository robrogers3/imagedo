<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Stream;
use Illuminate\Support\Facades\Storage;
use Mockery\CountValidator\Exception;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    protected $imagePath;
    protected $thumbPath;

    public function __construct()
    {

    }

    public function show(\App\Image $image)
    {

    }

    public function store()
    {
        $this->upload();

        $this->save();
    }

    protected function upload()
    {

        /** @var \Symfony\Component\HttpFoundation\File\UploadedFile $img */
        $name = request()->file('file')->getClientOriginalName();

        $this->imagePath  = request()->file('file')->storeAs(
            'images',  $name, [ 'visibility' => 'public',  'ContentType' => 'image/jpeg']
        );

        /** @var Image $image_thumb */
        $image_thumb = Image::make(request()->file('file'))->fit(100);

        /** @var Stream $image_thumb */
        $image_thumb = $image_thumb->stream('jpg');

        $this->thumbPath = 'images/tn-' . $name;

        Storage::disk('s3')->put("/images/tn-{$name}", (string) $image_thumb, 'public');

        return 'rock on!';
    }

    private function save()
    {

        \App\Image::create(['image_path' => $this->imagePath, 'thumb_path' => $this->thumbPath]);
    }
}
