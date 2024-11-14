<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    public function index()
    {
        $details = Detail::where('user_id', Auth::id())->get();
        return view('index')->with('details',$details);
    }

    // 保存
    public function store(Request $request){
 // リクエストから 'content' と 'amount' を取得して検証
        $request->validate([
            'content' => 'required|string',
            'amount' => 'required|numeric|min:1',
        ]);

        $detail = new Detail();
        $detail->user_id = Auth::user()->id;
        $detail->content = $request->input('content'); // content フィールドをセット
        $detail->amount = $request->input('amount');   // amount フィールドをセット
        $detail->save();

        return redirect()->route('detail');
    }
}
