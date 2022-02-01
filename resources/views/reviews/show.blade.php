<!DOCTYPE html>
@extends('layouts.app')　

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Reviews</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <link rel ="stylesheet" href="{{ secure_asset('css/reviews.css') }}">
    </head>
    
    <body>
        <h1>口コミ詳細画面</h1>
        <p class="edit">[<a href="/reviews/{{ $review->id }}/edit">編集する</a>]</p>
        <form action = "/reviews/{{$review->id}}" id = "form_delete" method ="post">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <input type = 'submit' style = "display:none">
            <p class = 'delete'>[<span onclick = 'return deleteReview(this);'>削除する</span>]</p>
        </form>
        <div class ='review'>
            <h2 class ='user'>{{ $review->user }}</h2>
            <p class = 'history'>{{ $review->history }}</p>
            <p>{{ $review->maker->name }}</p>
            <p class = 'kind'>{{ $review->kind }}</p>
            <p class = 'star'>
                @for($score=$review->score; $score>0; $score--)
                <span>★</span>
                @endfor
            </p>
            <p class ='text'>{{$review->body}}</p>
            <p class ='updated_at'>{{ $review->updated_at }}</p>
        </div>
        <div class = 'back'>[<a href = '/reviews'>口コミ一覧に戻る</a>]</div>
        <script>
        function deleteReview(e){
            'use strict';
            if (confirm('消去すると復元できません。\n本当に削除しますか?')){
                document.getElementById('form_delete').submit();
            }
        }
        </script>
    </body>
</html>
@endsection