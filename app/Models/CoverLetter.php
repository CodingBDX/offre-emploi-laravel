<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoverLetter extends Model
{
    use HasFactory;


    public function proposal() {

        return $this->belongsTo('App\Models\Porposal');
    }
}
