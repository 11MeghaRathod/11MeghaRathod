<?php

namespace App\Models\taskmodel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserNewAddModel extends Model
{
    use HasFactory , Notifiable;
    protected $fillable=[

        'name','email',
    
    ];
   
    protected $table="adduser";
}
