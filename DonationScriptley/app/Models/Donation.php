<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $fillable = ['fname','lname','email','city','phone','amount','payment_by','cause','category'];

    public function dcat()
    {
        return $this->hasOne(DonatioCategory::class);
    }
}
