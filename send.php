<?php
// Проверяем, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Получаем данные из формы
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $appl = $_POST["appl"];

    // Адрес электронной почты, на который будут отправлены данные
    $to = "zayavki_sofia@mail.ru";

    // Тема письма
    $subject = "Заявка с сайта";

    // Текст письма
    $mail_body = "Имя: ".$name."\n";
    $mail_body .= "Телефон: ".$phone."\n";
    $mail_body .= "Текст заявки: ".$appl;

    // Отправляем письмо
    mail($to, $subject, $mail_body, "From: zayavki_sofia@mail.ru");

    // Редирект на страницу "спасибо"
    header("Location: thanks.html");
    exit();
}
?>