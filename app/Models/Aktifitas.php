<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Aktifitas extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function categoryName(){

       

        switch ($this->category) {
            case 1:
                
                return 'Tugas';
            
            case 2:
                
                return 'Olahraga';

            case 3:

                return 'Liburan';
            
            
        }

    }

    public function tanggalPost(){
        $data=Carbon::parse($this->created_at)->format('d M Y');

        return $data;
    }
    
    
}
