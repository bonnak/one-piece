<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monga extends Model
{
    protected $guarded = [];

    public function pages()
    {
        return $this->hasMany(MongaPage::class);
    }
}
