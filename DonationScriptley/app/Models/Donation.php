<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $fillable = ['fname','pan','cheque_no','address_line1','address_line2','lname','receipt_no','email','city','phone','amount','payment_by','cause','category'];

    public function dcat()
    {
        return $this->hasOne(DonatioCategory::class);
    }
}
