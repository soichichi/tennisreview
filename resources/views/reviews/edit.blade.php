
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Reviews</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel ="stylesheet" href="{{ secure_asset('css/reviews.css') }}">
    </head>
    
    <body>
        <h1>編集画面</h1>
        <form action="/reviews/{{ $review->id }}" method="POST">
            {{ csrf_field() }}
            @method('PUT')
            <div class="user">
        　      <h2>ユーザー名</h2>
        　      <input type ="text" name= "review[user]" placeholder="ユーザー名" value="{{ $review->user }}"/>
        　  </div>
        　  <div class="history">
        　      <h2>テニス歴</h2>
        　      <input type ="text" name= "review[history]" placeholder="～年" value="{{ $review->history}}"/>
        　  </div>
        　  <div class="maker">
        　      <h2>ラケットメーカー</h2>
        　       <select name="review[maker_id]">
                    @foreach($makers as $maker)
                        <option value="{{ $maker->id }}">{{ $maker->name}}</option>
                    @endforeach
                </select>
        　  </div>
            <div class="kind">
        　      <h2>ラケットの種類</h2>
        　      <input type ="text" name= "review[kind]" placeholder="head Graphene" value="{{ $review->kind}}"/>
        　  </div>
        　  <h2>レビュー評価</h2>
        　  <div class ='star'>
        　     <select name="review[score]"> 
        　         @foreach(config('score') as $key => $score)
        　               <option value= "{{ $key }}">{{ $score['label']}}</option>
        　         @endforeach
        　     </select>
        　  </div>
        　  <div class="body">
        　      <h2>口コミテキスト</h2>
        　      <textarea name="review[body]" placeholder="ボールの食いつきがとても強かった。">{{ $review->body }}</textarea>
        　  </div>
        　  <input type="submit" value="更新する"/>
        </form>
        <div class = 'back'>[<a href = '/reviews/{{ $review->id }}'>口コミ詳細画面に戻る。</a>]</div>
    </body>
</html>
    
    
    
    
    
    
    