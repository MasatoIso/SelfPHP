<?php 
//可変長関数は引数のリストの末尾に置く必要がある。
function replaceContents(string $path, string ...$args): string {
    $data = file_get_contents($path);

    for ($i = 0; $i < count($args); $i++){
        $data = str_replace('{'.($i).'}', $args[$i], $data);
    }
    return $data;
}

print replaceContents('data.dat', '鈴木太郎', '20191226');
