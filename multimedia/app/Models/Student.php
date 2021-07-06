<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Phone;
class student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'last_name',
        //'phone_id',

    ];

    public function phone(){
        return $this->hasOne(Phone::class);
}
}