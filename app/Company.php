<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'email', 'logo','website'];


    public static function createNewCompany($request, $path)
    {

       self::create([
                'name'=>$request->input('name'),
                'email'=> $request->input('email'),
                'website'=>$request->input('website'),
                'logo'=> $path ?? ''
            ]
        );
    }

    public static function updateCompany($company, $request, $path)
    {
        $company->email = $request->input('email');
        $company->name = $request->input('name');
        $company->website = $request->input('website');
        $company->logo = $path ?? $company->logo;
        $company->save();
    }
}
