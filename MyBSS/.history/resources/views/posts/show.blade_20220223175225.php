<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>My BBS</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>My BBS</h1>
        <ul>
            {{--同じような処理をループ処理にする。@foreachを使うpostsの中身をpostとして
            処理をしてね。終わりは@endforeach。--}}
            {{-- @foreach ($posts as $post)
                <li>{{ $post }}</li>
            @endforeach --}}

            {{--データが空だった場合の処理。@forelseを使う--}}
            @forelse ($posts as $index => $post) {{--中身がある場合--}}
                <li>
                    <a href="/posts/{{ $index }}">
                        {{ $post }}
                    </a>
                </li>
            @empty
                <li>No posts yet!</li> {{--中身がない場合。データ空--}}
            @endforelse
        </ul>
    </div>
</html>
