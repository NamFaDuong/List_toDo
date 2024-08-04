<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $table='account';
    protected $primaryKey='id';
    protected $fillable=['email','password'];
    public function ToDoList(){
        return $this->hasMany(ToDoList::class,'Userid','id');
    }
}
