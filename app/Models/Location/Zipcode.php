<?php

namespace App\Models\Location;


use Illuminate\Database\Eloquent\Model;

class Zipcode extends Model
{
    private $zipCode;
    
    public function __construct()
    {

    }
    public static function storeZipcode()
    {
try
        {
            $zipcode = new Zipcode();
            $zipcode->zipcode = request('zipcode');
            $zipcode->save();
        } catch (\Exception $exception)
        {
            return view ($exception);
        }
/*        $zipcode = new Zipcode();
        $zipcode->zipcode = request('zipcode');
        $zipcode->save();*/
    }

    public function getZipcode()
    {

    }
}
