<?php 
    $myMail = '<trulepon@mail.ru>';
    $getName = $_POST['nameYourName'];
    $getPhone = $_POST['nameYourphone'];
    $getEmail = $_POST['nameEmail'];
    $getTextarea = $_POST['nameTextarea'];
    $themeMail = 'Свяжитесь сомной';
    $locationForMail = 'С формы обратной с вязи';

    $message = 
    '
    <html>
    <body>
    <center>	
    <table border=1 cellpadding=6 cellspacing=0 width=90% bordercolor="#DBDBDB">
    <tr><td colspan=2 align=center bgcolor="#E4E4E4"><b>Информация</b></td></tr>
    <tr>
    <td><b>Откуда</b></td>
    <td>'.$locationForMail.'</td>
    </tr>
    <tr>
    <td><b>От кого</b></td>
    <td>'.$getName.'</td>
    </tr>
    <tr>
    <td><b>Телефон</b></td>
    <td>'.$getPhone.'</td>
    </tr>
    <tr>
    <td><b>Адресат</b></td>
    <td><a href="mailto:'.$getEmail.'">'.$getEmail.'</a></td>
    </tr>
    <tr>
    <td><b>Тема</b></td>
    <td>'.$themeMail.'</td>
    </tr>
    <tr>
    <td><b>Сообщение</b></td>
    <td>'.$getTextarea.'</td>
    </tr>
    </table>
    </center>	
    </body>
    </html>'; 
    $headers  = "Content-type: text/html; charset=utf-8\r\n";
    $result = mail($myMail, $themeMail, $message, $headers);
    echo $result;
?>