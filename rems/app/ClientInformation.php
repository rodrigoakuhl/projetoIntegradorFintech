<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientInformation extends Model
{
    protected $table = 'client_informations';
    protected $primaryKey = 'id' ;

    public function usuario(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
