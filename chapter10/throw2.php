<?php

// Exceptionクラスを継承する
class UrlSyntaxException extends Exception {}
class UrlRequestException extends Exception {}

class Myutil {
    public static function getContents(string $url): string {
        if (!preg_match('|http(s)?://([\w-]+\.)+[\w-]+(/[\w- ./?%&=]*)?|', $url)) {
            throw new UrlSyntaxException('不正なURLの形式です。');
        }
        $data = @file_get_contents($url);

        if (!$data) {
            throw new UrlRequestException('指定されたURLがみつかりません。');
        }
        return $data;
    }
}

try {
    print MyUtil::getContents('http://wings.msn.to/nothing');
    // スローされた例外を補足する
} catch (UrlSyntaxException $e) {
    print "警告: {$e->getMessage()}";
} catch (UrlRequestException $e) {
    print "エラ〜: {$e->getMessage()}";
}