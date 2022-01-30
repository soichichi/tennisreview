<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Reviews</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    
    <body>
        <h1>口コミ一覧</h1>
        <p class = 'back'>[<a href = 'makers'>メーカ一覧画面に戻る</a>]</p>
        <p class = 'create'>[<a href='/reviews/create'>口コミを作成する</a>]</p>
        <div class = 'reviews'>
            @foreach ($reviews as $review)
                <div class ='review'>
                    <h2>🎾ユーザー名</h2>
                    <a href = '/reviews/{{ $review->id }}'><h3 class ='user'>{{ $review->user }}</h3></a>
                    <h2>テニス歴</h2>
                    <p class = 'history'>{{ $review->history }}</p>
                    <h2>ラケットメーカー</h2>
                    <a href="/makers/{{ $review->maker->id }}">{{ $review->maker->name }}</a>
                    <h2>ラケットの種類</h2>
                    <p class = 'kind'>{{ $review->kind }}</p>
                    <h2>レビュー評価</h2>
                    
                    <h2>口コミテキスト</h2>
                    <p class ='body'>{{ $review->body }}</p>
                </div>
            @endforeach
        </div>
        
        <div class = 'paginate'>
            {{ $reviews->links() }}
        </div>
    </body>