<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $table = 'operations';
    protected $primaryKey = 'id';
    
    public function cliente(){
        return $this->hasOne(ClientInformation::class, 'id', 'client_information_id');
    }

    public function oportunidade(){
        return $this->hasOne(Opportunity::class, 'id', 'oportunity_id');
    }
}
