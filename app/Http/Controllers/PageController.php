<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        return view('page');
    }

    public function productDesc(Request $request)
    {
        if ($request->ajax()) {
            $product = Str::slug($product = $request->data,'_');

            $allProducts = [
                'audyty','etykiety_alergeny_wartosc_odzywcza','strona_www_grafika_reklama','dietetyk','hccp_ghp_gmp',
                'szkolenia','pip_kontrole','certyfikaty','sanepid', 'projekty'
            ];

            if (in_array($product,$allProducts)) {
                $html = view('partials.products.'.$product)->render();
                return response()->json(['status' => 'success','html' => $html], 200);
            }else{
                return response()->json(['status' => 'error','message' => 'Invalid Data'], 400);
            }
        }
    }
}
