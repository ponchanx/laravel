<x-layout>
    <x-slot>


    <h1>My BBS</h1>
        {{-- <ul> --}}
            {{--下記のように短種し書くことができる
            {{-- <li><?php echo htmlspecialchars($posts[0], ENT_QUOTES, 'UTF-8') ?></li> --}}
            {{-- <li>{{ $posts[0] }}</li>
            <li>{{ $posts[1] }}</li>
            <li>{{ $posts[2] }}</li> --}}
        {{-- </ul> --}}
        <ul>
            {{--同じような処理をループ処理にする。@foreachを使うpostsの中身をpostとして
            処理をしてね。終わりは@endforeach。--}}
            {{-- @foreach ($posts as $post)
                <li>{{ $post }}</li>
            @endforeach --}}

            {{--データが空だった場合の処理。@forelseを使う--}}
            @forelse ($posts as $index => $post) {{--中身がある場合--}}
                <li>
                    <a href="{{ route('posts.show', $index) }}">
                        {{ $post }}
                    </a>
                </li>
            @empty
                <li>No posts yet!</li> {{--中身がない場合。データ空--}}
            @endforelse
        </ul>
</x-layout>

{{-- <?php

// var_dump($posts);
// exit; 同じ意味でddで表現できる.同義
// dd($posts);

?> --}}
