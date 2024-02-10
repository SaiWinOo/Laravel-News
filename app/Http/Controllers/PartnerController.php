<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\PartnerType;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::latest()->get();
        $partnerTypes = PartnerType::get();

        return view('pages.partners',[
            'partners' => $partners,
            'partnerTypes' => $partnerTypes,
        ]);
    }

    public function show(PartnerType $type)
    {
        $partners = Partner::where('partner_type_id',$type->id)->latest()->get();
        $partnerTypes = PartnerType::get();

        return view('pages.partners',[
            'partners' => $partners,
            'partnerTypes' => $partnerTypes,
            'partnerType' => $type,
        ]);
    }
}
