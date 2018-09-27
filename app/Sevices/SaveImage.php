<?php

namespace App\Services;

class SaveImage
{
    public static function save($request)
    {
        $path = NULL;
        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('public');
            $imagePath = explode('/', $path);
            $path = $imagePath[1];
        }
        return $path;
    }
}