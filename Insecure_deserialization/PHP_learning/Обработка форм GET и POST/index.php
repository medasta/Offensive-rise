<?php
    $title = "Главная страница";
    // require - подстановка содержимого
    // указанного файла.
    // require("")
    require "blocks/header.php";
    // include - не ломает сервис при импорте
    // include_once - импортируется только один раз
    // require_once - одноразовая подстановка содержимого
?>
<h1>Главная страница</h1>
<?php
    // require("")
    print_r($_GET);
    require "blocks/footer.php";
?>