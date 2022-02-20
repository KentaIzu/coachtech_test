<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function getDetail()
    {
        $txt = ' '. $this->id . ' ' . $this->name . ' '.$this->gender.' '.$this->email .' '.$this->option;
        return $txt;
    }
}
