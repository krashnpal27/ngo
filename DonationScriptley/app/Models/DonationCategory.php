<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationCategory extends Model
{
    use HasFactory;
    protected $fillable = ['title','status'];
    public function donation()
    {
        return $this->belongsTo(Donation::class);
    }
}
