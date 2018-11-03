<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{

//    protected $fillable = [
//        'project_id',
//        'title',
//        'description',
//        'order',
//        'picture',
//    ];

    protected $guarded = [];


    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    static public function deletePicture(self $picture)
    {
        \Storage::delete('img/'.$picture->picture);
        $picture->delete();
    }
}
