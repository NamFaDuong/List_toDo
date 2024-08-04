<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
    use HasFactory;
    protected $table='_to_do_list';
    protected $primaryKey='id';
    protected $fillable=['Userid','Title','Description'];
    public function Account(){
        return $this->belongsTo(Account::class,'Userid','id');
    }
}
