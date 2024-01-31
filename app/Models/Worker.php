<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $table = 'workers';
    protected $primaryKey = 'id';
    public $timestamps = True;
    protected $fillable = ['name', 'NIK','number','user_id'];


    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

     public function department() {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
}
