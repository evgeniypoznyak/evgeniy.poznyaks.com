<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $guarded = [];

    public function pictures()
    {
        return $this->hasMany(Picture::class)->orderBy('order');
    }


    /**
     * @return mixed
     */
    public static function GetAllProjects()
    {
        $companies = self::orderBy('professional', 'desc')
                               ->orderBy('order')->get()
                               ->groupBy('company')->all();
        return $companies;
    }


    /**
     * @return mixed
     */
    public static function getProProjects()
    {
        $companies = self::where('professional', '1')
                               ->orderBy('professional', 'desc')
                               ->orderBy('order')->get()
                               ->groupBy('company')->all();
        return $companies;
    }

    /**
     * @return mixed
     */
    public static function getPersonalProjects()
    {
        $companies = Project::where('professional', '0')
                                    ->orderBy('professional', 'desc')
                                    ->orderBy('order')->get()
                                    ->groupBy('company')->all();
        return $companies;
    }




}
