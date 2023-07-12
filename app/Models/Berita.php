<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Model;

class Berita extends Model
{
    protected $table = "berita";


    function handleUploadPoto()
    {
        if (request()->hasFile('poto')) {
            $poto = request()->file('poto');
            $destination = "Berita";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $poto->extension();
            $url = $poto->storeAs($destination, $filename);
            $this->poto = "app/" . $url;

        }
    }

}
