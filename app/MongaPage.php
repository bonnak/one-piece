<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MongaPage extends Model
{
    protected $guarded = [];

    public function monga()
    {
        return $this->belongsTo(Monga::class);
    }
}
