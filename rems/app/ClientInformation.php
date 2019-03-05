<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientInformation extends Model
{
    protected $table = 'client_informations';
    protected $primaryKey = 'id' ;

    public function usuario(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
