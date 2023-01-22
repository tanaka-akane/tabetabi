<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>お店情報入力</h1>
        <form action="/store/register" method="POST">
            @csrf
            <input type="hidden" name="store[user_id]" value={{$user_id}}>
            <input type="hidden" name="store[city_id]" value="{{$localFood->city_id}}">
            <input type="hidden" name="store[local_food_id]" value="{{$localFood->id}}">
            <div class="name">
                <h2>店名</h2>
                <input type="text" name="store[name]" placeholder="店名"/>
            </div>
            <div class="overview">
                <h2>紹介文</h2>
                <textarea name="store[overview]" placeholder="紹介文"></textarea>
            </div>
            <div class="adress">
                <h2>住所</h2>
                <textarea name="store[adress]" placeholder="住所"></textarea>
            </div>
            <div class="parking">
                <h2>駐車場の有無</h2>
                <input type="checkbox" name="store[parking]" value="1">
            </div>
            <div class="private_room">
                <h2>個室の有無</h2>
                <input type="checkbox" name="store[private_room]" value="1">
            </div>
            <div class="card">
                <h2>カード支払いの可否</h2>
                <input type="checkbox" name="store[card]" value="1">
            </div>
            <div class="midnight">
                <h2>深夜営業(24時以降)の有無</h2>
                <input type="checkbox" name="store[midnight]" value="1">
            </div>
            <div class="e_money">
                <h2>電子マネー支払いの可否</h2>
                <input type="checkbox" name="store[e_money]" value="1">
            </div>
            <div class="counter_seat">
                <h2>カウンター席の有無</h2>
                <input type="checkbox" name="store[counter_seat]" value="1">
            </div>
            <div class="reserve">
                <h2>予約の可否</h2>
                <input type="checkbox" name="store[reserve]" value="1">
            </div>
            <div class="take_out">
                <h2>テイクアウトの有無</h2>
                <input type="checkbox" name="store[take_out]" value="1">
            </div>
            <div class="child">
                <h2>小さなお子様への配慮</h2>
                <input type="checkbox" name="store[child]" value="1">
            </div>
            <div class="image">
                <input type='file' name="image">
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/store/prefecture/city/{{$localFood->city->id}}/local-food">戻る</a>
        </div>
        
        
    </body>
</html>