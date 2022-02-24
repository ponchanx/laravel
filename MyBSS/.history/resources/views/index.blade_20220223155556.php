{{-- <?php

// var_dump($posts);
// exit; 同じ意味でddで表現できる.同義
// dd($posts);

?> --}}
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
            {{-- <li><?php echo htmlspecialchars($posts[0], ENT_QUOTES, 'UTF-8') ?></li> --}}
            
            <li>{{ $posts[0] }}</li>
            <li>Title</li>
            <li>Title</li>
            <li>Title</li>
        </ul>
    </div>
</html>
