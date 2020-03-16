<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Portfolio_image extends Model
{
    protected $table = 'portfolio_image';
    public function readmorePortfolioimagedetails($request, $id) {

        $result = Portfolio_image::select('image_name')
                ->where('portfolio_id', $id)
                ->get();
        return $result;
    }
}
