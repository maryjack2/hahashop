<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['title','desc','price','enabled','pic_url','sell_at','cgy_id'];

    protected $translatable = ['title', 'desc'];

    //該商品的分類
    protected function cgy(){
        //一對一關係完整寫法
        //return $this->belongsTo(Cgy::class, 'cgy_id', 'id');
        //一對一關係簡易寫法
        return $this->belongsTo(Cgy::class);
    }
}
