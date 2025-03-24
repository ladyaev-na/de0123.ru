<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\PartnerProduct;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index(){
        $partners = Partner::all();

        foreach($partners as $partner){
            $total = PartnerProduct::where('partner_id', $partner->id)->sum('quantity');

            $partner->discount = 0;
            if ($total >= 10000 && $total < 50000) {
                $partner->discount = 5;
            }else if ($total >= 50000 && $total < 30000){
                $partner->discount = 10;
            }else if ($total >= 30000){
                $partner->discount = 15;
                }
        }

        return view('partners.index', compact('partners'));
    }
}
