<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
   
    public function index(Request $request)
    {
        $query = Detail::where('user_id', Auth::id());  //ログインユーザーのデータ

        $startDate = null;
        $lastDate = null;
    
        // 開始日と終了日にデータは言っているときissetで確認
        if (isset($request->start_date) && isset($request->last_date)) {
            $startDate = $request->start_date;
            $lastDate = date('Y-m-d 23:59:59', strtotime($request->last_date)); // 終了日の終わりを指定
            $query->whereBetween('created_at', [$startDate, $lastDate]);
            // whereBetweenで間をとる
        }
    
        // 全件取得or指定取得
        $details = $query->get();
    
        return view('dashboard')->with([
            'details' => $details,
            'startDate' => $startDate,
            'lastDate' => $lastDate
        ]);
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

        return redirect()->route('dashboard');
    }
}
