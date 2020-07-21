<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;

class Zipcode extends Model
{
    public static function storeZipcode()
    {
        try
        {
            $zipcode = new Zipcode();
            $zipcode->zipcode = request('zipcode');
            if(strlen($zipcode->zipcode)==5 && ctype_digit($zipcode->zipcode)) {
                $zipcode->save();
            }
        } catch (\Exception $exception)
        {
            return view ($exception);
        }
    }


    public function getZipcode()
    {

    }
}
