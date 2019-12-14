<?php
function checkScope(): string{
    //関数のなかで呼び出した変数はローカル変数として扱われる
    require_once 'scope_included.php';
    return $scope;
}

print checkScope();
//$scopeはローカル変数になっているので、呼び出せない。
print $scope;