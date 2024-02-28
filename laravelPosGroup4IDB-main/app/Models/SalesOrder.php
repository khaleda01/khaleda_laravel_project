<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesOrder extends Model {
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'user_id',
        'status'
    ];
    public function customer() {
        return $this->belongsTo(Customers::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
