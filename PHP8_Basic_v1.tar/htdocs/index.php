<?php
define('DOCUMENT_ROOT', '.');
 
// ディレクトリを配列で取得
function get_child_directories($dir){
    $paths = glob($dir . '/*');
    $directories = [];
    foreach($paths as $path){
        if(is_dir($path)){
            $directories[] = $path;
            $directories = array_merge($directories, get_child_directories($path));
        }
    }
    return $directories;
}
 
// ディレクトリパス配列をcardに変換する
function directories_to_cards($directories){
    return array_reduce($directories, function($carry, $directory){return $carry . directory_to_card($directory); }, '');
}
 
// ディレクトリパスをもとにcardを作成する
function directory_to_card($dir){
    $paths = glob($dir . '/*.*');
    $result = array_reduce($paths, function($carry, $path){
        if(is_file($path)){
            return $carry . list_item_tag(anchor_tag($path));
        }
    }, '');
    // ファイルが存在しないディレクトリはカードを作成しない。
    if($result === ''){ return ''; }
    return card_tag($dir, unordered_list_tag($result));
}
 
function card_tag($card_title, $card_contents){
    return '
    <div class="col-md-4"><div class="card mb-4 shadow-sm">
        <div class="card-header">
            <p class="card-text">' . $card_title . '</p>
        </div>
        <div class="card-body">' . $card_contents . '</div>
    </div></div>
    ';
}
 
function unordered_list_tag($element){
    return '<ul class="list-group">' . $element . '</ul>';
}
 
function list_item_tag($element){
    return '<li class="list-group">' . $element . '</li>';
}
function anchor_tag($path){
    $filename = basename($path);
    return '<a class="anchor" href="' . $path . '"  target="_blank">' . $filename . '</a>';
}
 
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>ファイルリスト</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
      .anchor {
        font-size: 18px;
      }
      .brand {
          height: 30px;
      }
      .list-group-item{
          padding-top: .3rem;
          padding-bottom: .3rem;
      }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light">
          <a class="navbar-brand" href="https://codecamp.jp">
            <img class="brand" src="https://s3-ap-northeast-1.amazonaws.com/codecamp-cache/editor/logo.png">
          </a>
        </nav>
    </header>
    <div class="container">
        <h1>学習用リンク集</h1>
        <p class="lead">htdocsディレクトリ内の各ファイルを表示しています。</p>
        <div class="row">
            <?php echo directories_to_cards(get_child_directories(DOCUMENT_ROOT)); ?>
        </div>
    </div>
    <footer>
        <nav class="navbar navbar-light bg-light justify-content-center">
          <a class="navbar-brand" href="https://codecamp.jp">
            CodeCamp
          </a>
        </nav>
    </footer>
</body>
</html>