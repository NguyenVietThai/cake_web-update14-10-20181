<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";

    //mot bill thi co nhieu billdetail
    public function bill_detail(){
        return $this->hasMany('App/BillDetail','id_bill','id');
    }
    public function product(){
        return $this->belongsTo('App/Customer','id_customer','id');
}
