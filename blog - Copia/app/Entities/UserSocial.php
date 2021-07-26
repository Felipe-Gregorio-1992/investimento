<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class UserSocial extends Model
{
    use SoftDeletes;
    use Notifiable;
    
    public $timestamps = true;
    protected $table = 'users';
    protected $fillable = ['user_id','social_network','social_id','social_email','social_avatar','cpf', 'name', 'numero','birth','gender','notes','email','password','status','permission'];
    protected $hidden = [];
}
