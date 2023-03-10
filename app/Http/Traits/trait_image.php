<?php


namespace App\Http\Traits;

trait trait_image
{

    public function user_photo($file, $file_name)
    {

        /****************** move photo to new folder ******************/
        $file->move(public_path('images/avatar_user'), $file_name);

        return true;
    }

}
