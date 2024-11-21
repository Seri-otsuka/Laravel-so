<x-app-layout>
    <style>
            body {
            font-family: 'Arial', sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }

        /* ヘッダーのスタイル */
        header {
            background-color: #7fff7f;
            color: #202020;
            text-align: center;
            padding: 20px 0;
            margin-bottom: 30px;
        }

        h1 {
            text-align:left;
            line-height: 100px;
        }
        img{
            text-align: right;
        }
        .flex {
            display: flex; /*横並び*/
            align-items: center;
        }

        .flex_sub {
            display: flex; /*横並び*/
            justify-content: flex-end;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        *,
        *:before,
        *:after {
        -webkit-box-sizing: inherit;
        box-sizing: inherit;
        }

        html {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        font-size: 62.5%;
        }

        .btn,
        a.btn,
        button.btn {
        font-size: 1.6rem;
        font-weight: 700;
        line-height: 1.5;
        position: relative;
        display: inline-block;
        padding: 1rem 4rem;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
        text-align: center;
        vertical-align: middle;
        text-decoration: none;
        letter-spacing: 0.1em;
        color: #212529;
        border-radius: 0.5rem;
        }

        a.btn-border {
            border: 2px solid #000;
            border-radius: 0;
            background: #fff;
        
            -webkit-transform-style: preserve-3d;
        
            transform-style: preserve-3d;
        }
        
        a.btn-border:before {
            position: absolute;
            top: 0;
            left: 0;
        
            width: 5px;
            height: 100%;
        
            content: '';
            -webkit-transition: all .3s;
            transition: all .3s;
        
            background: #000;
        }
        
        a.btn-border:hover {
            color: #fff;
            background: #000;
        }
        
        a.btn-border:hover:before {
            background: #fff;
        }
        /* データ登録セクションのスタイル */
        #regist_spending {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        #regist_data_tb {
            width: 100%;
        }

        #regist_data_tb td {
            padding: 10px;
        }

        input[type="date"], input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        #regist_spending_btn {
            background-color: #7fff7f;
            color: black;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 13px;
        }

        #regist_spending_btn:hover {
            background-color: #adffad;
        }

        /* メインセクションのスタイル */
        main {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        #display_btn {
            background-color: #7fbfff;
            color: black;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 10px;
        }

        #display_btn:hover {
            background-color: #93c9ff;
        }

        #all_display_btn {
            background-color: #7fffc1;
            color: black;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 10px;
        }

        #all_display_btn:hover {
            background-color: #93ffb5;
        }

        /* テーブルのスタイル */
        #hab_tb {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        #hab_tb th, #hab_tb td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        #hab_tb th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        #hab_tb tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        #hab_tb tr:hover {
            background-color: #f5f5f5;
        }
        .text_all {
            font-size: 16px;
        }

        .text_sub {
            font-size: 13px;
        }

        .text_sub_sub {
            font-size: 11px;
        }
        </style>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <header>
                        <div class="flex">
                            <img src="https://res.cloudinary.com/dq9ypnzdn/image/upload/v1729830771/%E3%81%8B%E3%81%91%E3%81%84%E3%81%AD%E3%81%93_vxuxm9.png" width="108" height="136">
                            <script>
                                var randomList = new Array(
                              "https://res.cloudinary.com/dq9ypnzdn/image/upload/v1729833155/%E3%82%BB%E3%83%AA%E3%83%951_mssygi.png",
                              "https://res.cloudinary.com/dq9ypnzdn/image/upload/v1729833953/%E3%82%BB%E3%83%AA%E3%83%952_n0l2xp.png",
                              "https://res.cloudinary.com/dq9ypnzdn/image/upload/v1729834059/%E3%82%BB%E3%83%AA%E3%83%953_fhqv8j.png",
                              "https://res.cloudinary.com/dq9ypnzdn/image/upload/v1729835339/%E3%82%A2%E3%83%89%E3%83%90%E3%82%A4%E3%82%B92_pzfyx0.png",
                                "https://res.cloudinary.com/dq9ypnzdn/image/upload/v1729835216/%E3%82%A2%E3%83%89%E3%83%90%E3%82%A4%E3%82%B91_rkrbcl.png",
                                "https://res.cloudinary.com/dq9ypnzdn/image/upload/v1729835224/%E3%82%A2%E3%83%89%E3%83%90%E3%82%A4%E3%82%B93_t0bh74.png"
                            );
                            var num = Math.floor(Math.random() * randomList.length);
                            var printHtml = '<img src=' + randomList[num] + '  width="500" height="162">';
                            document.write(printHtml);
                            </script>
                        </div>
                        <button id="toggleButton">プロフィール</button>
                    <img id="myImage" src="https://res.cloudinary.com/dq9ypnzdn/image/upload/v1730094961/profile_g85jkc.png" alt="plofile" style="display: none;" width="750" height="500">
                    <script>
                        const toggleButton = document.getElementById('toggleButton');
                        const myImage = document.getElementById('myImage');
                       
                        toggleButton.addEventListener('click', function() {
                          if (myImage.style.display === 'none') {
                            myImage.style.display = 'block';
                          } else {
                            myImage.style.display = 'none';
                          }
                        });
                    </script>
                    
                    </header>
                    <!-- 登録項目:日時,内容,金額 -->
                    <div id="regist_spending">
                        <h2 class="text_all block font-medium text-sm text-gray-700">データ登録</h2>
                        <form method="POST" action="{{ route('dashboard')}}">
                            @csrf
                        <table id="regist_data_tb">
                            <tr>
                                <td class="text_sub">登録内容</td>
                                <td><input type="text" name="content" id="regist_contents" value="{{ old('content')}}" required></td>
                            </tr>
                            <tr>
                                <td class="text_sub">金額</td>
                                <td><input type="number" name="amount" id="regist_price" value="{{ old('amount')}}" min="1"></td>
                            </tr>
                            <tr><td colspan="2"><button type="submit" id="regist_spending_btn" class="block font-medium text-sm text-gray-700">登録</button></td></tr>
                        </table>
                        </form>
                    </div>
                    <main>
                        <div>
                        <form method="GET" action="{{ route('dashboard') }}">
                            @csrf
                            <!-- 日付入力フォーム -->
                            <div class="flex">
                            <input type="date" name="start_date">〜
                            <input type="date" name="last_date">
                            </div>
                            <div class="flex_sub">
                            <button type="submit" id="display_btn" class=" text_sub_sub block font-medium text-sm text-gray-700 mt-2">指定期間表示</button>
                        </form>
                        
                        <!-- 全件表示ボタン -->
                        <form method="GET" action="{{ route('dashboard') }}">
                            @csrf
                            <button type="submit" id="all_display_btn" class=" text_sub_sub block font-medium text-sm text-gray-700 mt-2">全件表示</button>
                        </form>
                        </div>
                        <!-- 日付範囲の表示 -->
                            @if ($startDate && $lastDate)
                                <p class="text_all block font-medium text-sm text-gray-700 mt-5">表示期間: {{ \Carbon\Carbon::parse($startDate)->format('Y年m月d日') }} 〜 {{ \Carbon\Carbon::parse($lastDate)->format('Y年m月d日') }}</p>
                            @else
                                <p class="text_all block font-medium text-sm text-gray-700 mt-5">全件表示</p>
                            @endif
                        </div>
                        
                        <table id="hab_tb">
                            <tr>
                                <th class="text_sub">日付</th>
                                <th class="text_sub">内容</th>
                                <th class="text_sub">金額</th>
                            </tr>
                            @foreach ($details as $detail)
                                <tr>
                                    <td class="text_sub">{{ $detail->created_at->format('Y/m/d') }}</td>
                                    <td class="text_sub">{{ $detail->content }}</td>
                                    <td class="text_sub">{{ $detail->amount }}円</td>
                                </tr>
                            @endforeach
                        </table>
                        
                    </main>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
