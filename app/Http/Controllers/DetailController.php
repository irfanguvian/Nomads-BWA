<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelPackages;

class DetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item =TravelPackages::with(['galleries'])
                ->where('slug',$slug)
                ->firstOrFail();
        $count = count($item->galleries);
        return view('pages.detail',[
            'item'=>$item,
            'count'=>$count
        ]);
    }
}
