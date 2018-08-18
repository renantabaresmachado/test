<?php

namespace bemacash;

use Illuminate\Database\Eloquent\Model;

class Licenca extends Model
{
    protected $fillable = [
        'nome',
    ];
       public function kits()
    {
      return $this->belongsToMany('\bemacash\Kit', 'kit_licenca', 'licenca_id', 'kit_id');
    }
}
