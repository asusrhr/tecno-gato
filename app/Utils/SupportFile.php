<?php


namespace App\Utils;

use Carbon\Carbon;
use Illuminate\Http\Request;
//use Intervention\Image\Facades\Image;

class SupportFile
{
    protected static $PATH_DOMAIN = 'http://yopasantebo.com/storage/';
    protected static $PATH_PUBLIC = 'public/';

    public static function saveImage($data, $name, $path)
    {
        $date_time = Carbon::now('America/La_Paz')->timestamp.'-';
        $url_image = null;
        if($data->hasFile($name))
        {
            try {
                $name_image = $date_time . $data->file($name)->getClientOriginalName();
                $data->file($name)->storeAs(SupportFile::$PATH_PUBLIC . $path, $name_image);
                $url_image = $path . $name_image;
                return $url_image;
            } catch (\Exception $e)
            {
                throw new \Exception($e->getMessage());
            }
        }
        return null;
    }

    public static function saveImageThumbnail($data, $name, $path, $width = 600, $height = 400)
    {
        $date_time = Carbon::now('America/La_Paz')->timestamp.'-';
        $url_image = null;
        if($data->hasFile($name))
        {
            try {
                $name_image = $date_time . $data->file($name)->getClientOriginalName();
                $url_image = $path . $name_image;

                $img = Image::make($data->file($name)->path());
                $img->resize($width, $height, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('storage/'.$url_image, 72);
                return $url_image;
            } catch (\Exception $e)
            {
                throw new \Exception($e->getMessage());
            }
        }
        return null;
    }
}
