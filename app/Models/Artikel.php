<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Artikel extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table = 'artikel';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function categoryName(){

       

        switch ($this->category) {
            case 1:
                
                return 'Penelitian';
            
            case 2:
                
                return 'Ilmiyah';

            case 3:

                return 'Bebas';
            
            
        }

    }

    public function statusName(){

       

        switch ($this->setatus) {
            case 1:
                
                return 'Draf';
            
            case 2:
                
                return 'Publish';

            
            
        }

    }
    public function tanggalPost(){
        $data=Carbon::parse($this->created_at)->format('d M Y');

        return $data;
    }
}
