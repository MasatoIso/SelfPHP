<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="check2_multi.php">
        あなたがよく使用するサーバサイド技術は？<br/>
        <input type="checkbox" name="arch[]" value="PHP">
        <label for="php">PHP</label>
        <input type="checkbox" name="arch[]" value="JSP">
        <label for="jsp">JSP</label>
        <input type="checkbox" name="arch[]" value=".NET">
        <label for=".net">.NET</label>
        <input type="submit">
    </form>
</body>
</html>