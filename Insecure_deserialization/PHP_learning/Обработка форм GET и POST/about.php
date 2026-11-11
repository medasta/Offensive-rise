<?php
    $title = "Главная страница";
    // require("")
    require "blocks/header.php";
?>
<h1>Про нас</h1>
<!-- POST запрос передается check_post.php-->
<form action="check_post.php" method="POST">
    <!-- Формат ввода - текст, название - username, placeholder - приглашение на ввод-->
    <input type="text" name="username" placeholder="Enter name">
    <input type="text" name="email" placeholder="Enter email">
    <input type="text" name="password" placeholder="Enter password">

    <!-- текстовое поле-->
    <textarea name="message" placeholder="Введите сообщение"></textarea>

    <!-- кнопка отправки-->
    <input type="submit" value="Отправить">

</form>
<?php
    // require("")
    require "blocks/footer.php";
?>