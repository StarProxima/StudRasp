<?php
$mysql_host = "localhost";
$mysql_user = "rustamxa_timetable";
$mysql_password = "timetable";
$mysql_database = "rustamxa_timetable";

if (isset($_GET["action"]))
{
    $action = $_GET['action'];
    if ($action == "authentication")
    {
        if (isset($_GET["login"])) { 
            $login = $_GET['login'];
        }
        if (isset($_GET["auth_code"])) { 
            $auth_code = $_GET['auth_code'];
        }
    }
}

if (isset($_POST["action"])) { 
    $action = $_POST['action'];

    if ($action == "registration")
    {
        if (isset($_POST["login"])) { 
            $login = $_POST['login'];
        }
        if (isset($_POST["password"])) { 
            $password = $_POST['password'];
        }
        if (isset($_POST["email"])) { 
            $email = $_POST['email'];
        }
    }
    else if ($action == "authentication")
    {
        if (isset($_GET["login"])) { 
            $_GET = $_GET['login'];
        }
        if (isset($_GET["auth_code"])) { 
            $auth_code = $_GET['auth_code'];
        }
    }
    else if ($action == "send_confirmation_email")
    {
        if (isset($_POST["login"])) { 
            $login = $_POST['login'];
        }
        if (isset($_POST["session"])) { 
            $session = $_POST['session'];
        }
    }
    else if ($action == "check_account_confirmation")
    {
        if (isset($_POST["login"])) { 
            $login = $_POST['login'];
        }
        if (isset($_POST["session"])) { 
            $session = $_POST['session'];
        }
    }
    else if ($action == "authorization")
    {
        if (isset($_POST["login"])) { 
            $login = $_POST['login'];
        }
        if (isset($_POST["password"])) { 
            $password = $_POST['password'];
        }
    }
    else if ($action == "get_my_timetables")
    {
        if (isset($_POST["login"])) { 
            $login = $_POST['login'];
        }
        if (isset($_POST["session"])) { 
            $session = $_POST['session'];
        }
    }
    else if ($action == "get_saved_timetables")
    {
        if (isset($_POST["login"])) { 
            $login = $_POST['login'];
        }
        if (isset($_POST["session"])) { 
            $session = $_POST['session'];
        }
    }
    else if ($action == "get_editable_timetables")
    {
        if (isset($_POST["login"])) { 
            $login = $_POST['login'];
        }
        if (isset($_POST["session"])) { 
            $session = $_POST['session'];
        }
    }
    else if ($action == "add_saved_timetable")
    {
        if (isset($_POST["login"])) { 
            $login = $_POST['login'];
        }
        if (isset($_POST["session"])) { 
            $session = $_POST['session'];
        }
        if (isset($_POST["id"])) { 
            $id = $_POST['id'];
        }
    }
    else if ($action == "give_permission_edit_timetable")
    {
        if (isset($_POST["login"])) { 
            $login = $_POST['login'];
        }
        if (isset($_POST["session"])) { 
            $session = $_POST['session'];
        }
        if (isset($_POST["id"])) { 
            $id = $_POST['id'];
        }
        if (isset($_POST["user"])) { 
            $user = $_POST['user'];
        }
    }
    else if ($action == "add_comment")
    {
        if (isset($_POST["login"])) { 
            $login = $_POST['login'];
        }
        if (isset($_POST["session"])) { 
            $session = $_POST['session'];
        }
        if (isset($_POST["id"])) { 
            $id = $_POST['id'];
        }
        if (isset($_POST["lessonIndex"])) { 
            $lessonIndex = $_POST['lessonIndex'];
        }
        if (isset($_POST["text"])) { 
            $text = $_POST['text'];
        }
        if (isset($_POST["importance"])) { 
            $importance = $_POST['importance'];
        }
    }
    else if ($action == "edit_comment")
    {
        if (isset($_POST["login"])) { 
            $login = $_POST['login'];
        }
        if (isset($_POST["session"])) { 
            $session = $_POST['session'];
        }
        if (isset($_POST["id"])) { 
            $id = $_POST['id'];
        }
        if (isset($_POST["commentIndex"])) { 
            $commentIndex = $_POST['commentIndex'];
        }
        if (isset($_POST["text"])) { 
            $text = $_POST['text'];
        }
        if (isset($_POST["importance"])) { 
            $importance = $_POST['importance'];
        }
    }
    else if ($action == "delete_comment")
    {
        if (isset($_POST["login"])) { 
            $login = $_POST['login'];
        }
        if (isset($_POST["session"])) { 
            $session = $_POST['session'];
        }
        if (isset($_POST["id"])) { 
            $id = $_POST['id'];
        }
        if (isset($_POST["commentIndex"])) { 
            $commentIndex = $_POST['commentIndex'];
        }
    }
    else if ($action == "get_timetable")
    {
        if (isset($_POST["id"])) { 
            $id = $_POST['id'];
        }
        if (isset($_POST["login"])) { 
            $login = $_POST['login'];
        }
    }
    else if ($action == "get_timetable_by_invite_code")
    {
        if (isset($_POST["invite_code"])) { 
            $invite_code = $_POST['invite_code'];
        }
        if (isset($_POST["login"])) { 
            $login = $_POST['login'];
        }
    }
    else if ($action == "update_timetable")
    {
        if (isset($_POST["login"])) { 
            $login = $_POST['login'];
        }
        if (isset($_POST["session"])) { 
            $session = $_POST['session'];
        }
        if (isset($_POST["id"])) { 
            $id = $_POST['id'];
        }
        if (isset($_POST["json"])) { 
            $json = $_POST['json'];
        }
    }
    else if ($action == "create_timetable")
    {
        if (isset($_POST["login"])) { 
            $login = $_POST['login'];
        }
        if (isset($_POST["session"])) { 
            $session = $_POST['session'];
        }
        if (isset($_POST["json"])) { 
            $json = $_POST['json'];
        }
    }
    else if ($action == "delete_timetable")
    {
        if (isset($_POST["login"])) { 
            $login = $_POST['login'];
        }
        if (isset($_POST["session"])) { 
            $session = $_POST['session'];
        }
        if (isset($_POST["id"])) { 
            $id = $_POST['id'];
        }
    }
    else if ($action == "check_session")
    {
        if (isset($_POST["login"])) { 
            $login = $_POST['login'];
        }
        if (isset($_POST["session"])) { 
            $session = $_POST['session'];
        }
    }
  	else if ($action == "global_search_timetables")
    {
        if (isset($_POST["search_string"])) { 
            $search_string = $_POST['search_string'];
        }
        if (isset($_POST["page_number"])) { 
            $page_number = $_POST['page_number'];
        }
        if (isset($_POST["sort_type"])) { 
            $sort_type = $_POST['sort_type'];
        }
        if (isset($_POST["tabs_per_page"])) { 
            $tabs_per_page = $_POST['tabs_per_page'];
        }
    }
    

}



$mysqli = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_database);
print($mysqli->connect_error);
$mysqli->set_charset('utf-8');

$error_messages_1 = "Пользователь с таким логином уже существует.";
$error_messages_2 = "Такого пользователя не существует.";
$error_messages_3 = "Неправильный логин или пароль.";
$error_messages_4 = "Неправильная сессия.";
$error_messages_5 = "Такого расписания не существует.";
$error_messages_6 = "Неправильная форма JSON.";
$error_messages_7 = "У вас нет доступа к данному расписанию.";
$error_messages_8 = "Неправильный код аунтефикации.";
$error_messages_9 = "Ошибка отправки письма.";
$error_messages_10 = "Аккаунт не подтверждён. Проверьте почту.";
$error_messages_11 = "Пользователь с такой почтой уже существует.";
$error_messages_12 = "Аккаунт уже подтверждён.";
$error_messages_13 = "Некорректный номер страницы поиска.";
$error_messages_14 = "У данного пользователя не сохранено это расписание.";
$error_messages_15 = "Такого номера пары не существует.";
$error_messages_16 = "Такого номера комментария не существует.";



function update_session($login, $session)
{
    global $mysqli, $error_messages_1, $error_messages_2,$error_messages_3, $error_messages_4, $error_messages_5, $error_messages_6, $error_messages_7, $error_messages_8, $error_messages_9, $error_messages_10, $error_messages_11, $error_messages_12, $error_messages_13;
    
    $rand_session = bin2hex(random_bytes(8));
    $hash_session = hash('sha256', $rand_session);

    $path = $mysqli->query("SELECT JSON_UNQUOTE(JSON_SEARCH(users.sessions, 'one',\"".hash('sha256', $session)."\")) FROM users WHERE login = '$login' AND JSON_SEARCH(users.sessions, 'one',\"".hash('sha256', $session)."\") IS NOT NULL");

    while($e=$path->fetch_assoc())
        $output[]=$e;

    $path = substr($output[0]["JSON_UNQUOTE(JSON_SEARCH(users.sessions, 'one',\"".hash('sha256', $session)."\"))"], 0, -8);

    $mysqli->query("UPDATE users SET users.sessions = JSON_SET(users.sessions, '".$path."session', '$hash_session') WHERE login = '$login' AND JSON_SEARCH(users.sessions, 'one',\"".hash('sha256', $session)."\") IS NOT NULL");
    $mysqli->query("UPDATE users SET users.sessions = JSON_SET(users.sessions, '".$path."last_update_date', NOW()) WHERE login = '$login' AND JSON_SEARCH(users.sessions, 'one',\"".hash('sha256', $rand_session)."\") IS NOT NULL");
    return $rand_session;
}



function new_session($login)
{
    global $mysqli, $error_messages_1, $error_messages_2,$error_messages_3, $error_messages_4, $error_messages_5, $error_messages_6, $error_messages_7, $error_messages_8, $error_messages_9, $error_messages_10, $error_messages_11, $error_messages_12, $error_messages_13;
    
    $rand_session = bin2hex(random_bytes(8));
    $hash_session = hash('sha256', $rand_session);

    $mysqli->query("UPDATE users SET users.sessions = JSON_ARRAY_APPEND(users.sessions, '$', JSON_OBJECT('session','$hash_session', 'last_update_date', NOW())) WHERE login = '$login'");

    return $rand_session;
}



function generate_random_unique_string($length) {
    global $mysqli, $error_messages_1, $error_messages_2,$error_messages_3, $error_messages_4, $error_messages_5, $error_messages_6, $error_messages_7, $error_messages_8, $error_messages_9, $error_messages_10, $error_messages_11, $error_messages_12, $error_messages_13;

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $characters_length = strlen($characters);
    $random_string = '';
    do
    {
        $random_string = '';
        for ($i = 0; $i < $length; $i++) 
        {
            $random_string .= $characters[rand(0, $characters_length - 1)];
        }
    } while ($mysqli->query("SELECT * FROM timetable WHERE invite_code = '$random_string'")->num_rows != 0);
    
    return $random_string;
}



if ($action == registration && $login != null && $password != null && $email != null)
{
    if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->num_rows != 0)
    {
        print("{\"error\":{\"code\":1,\"message\":\"$error_messages_1\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE email = '$email' AND auth_code = '0'")->num_rows != 0)
    {
        print("{\"error\":{\"code\":11,\"message\":\"$error_messages_11\"}}"); 
    }
    else
    { 
        $auth_code = bin2hex(random_bytes(3));   
        //$hash_auth_code = hash('sha256', $rand_auth_code);
        
        $hash_password = hash('sha256', $password);

        $mysqli->query("INSERT INTO `users`(`login`,`password`,`email`,`sessions`,`auth_code`,`my_timetables`,`saved_timetables`) VALUES ('$login', '$hash_password', '$email','[]', '$auth_code', '[]', '[]')");

        if (mail($mysqli->query("SELECT * FROM users WHERE login = '$login'")->fetch_array()["email"], 'Подтверждение аккаунта StudRasp', "Для завершения регистрации аккаунта \"".$login."\" перейдите по ссылке:".
            "\rhttps://studrasp.ru/main.php?action=authentication&login=".$login."&auth_code=".$auth_code." \rИли введите код в приложении самостоятельно: ".$auth_code."\rЕсли вы не регистрировались в StudRasp,".
            "то не сообщайте никому код и просто игнорируйте данное письмо.", 'From: registration@studrasp.ru', "-f registration@studrasp.ru")!=null)
        {
            print("{\"error\":{\"code\":0,\"message\":\"\"},\"session\":\"".new_session($login)."\"}"); 
        }
        else
        {
            print("{\"error\":{\"code\":9,\"message\":\"$error_messages_9\"},\"session\":\"".new_session($login)."\"}");  
        }
    }
}



else if ($action == authentication && $login != null && $auth_code != null)
{
    if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else
    {
        //$hash_auth_code = hash('sha256',$auth_code);
        if ($mysqli->query("SELECT * FROM users WHERE auth_code = '$auth_code'")->num_rows == 0 || $auth_code = "0")
        {
            print("{\"error\":{\"code\":8,\"message\":\"$error_messages_8\"}}"); 
        }
        else
        {
            $mysqli->query("UPDATE users SET auth_code = '0' WHERE login = '$login'");
            print("{\"error\":{\"code\":0,\"message\":\"\"},\"session\":\"$session\"}");
        }
    }
}



else if ($action == send_confirmation_email && $login != null && $session != null)
{
    if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$login' AND JSON_SEARCH(`sessions`, 'one', \"".hash('sha256', $session)."\") IS NOT NULL")->num_rows == 0)
    {
        print("{\"error\":{\"code\":4,\"message\":\"$error_messages_4\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->fetch_array()["auth_code"] == "0")
    {
        print("{\"error\":{\"code\":12,\"message\":\"$error_messages_12\"}}"); 
    }
    else
    {
        $auth_code = $mysqli->query("SELECT * FROM users WHERE login = '$login'")->fetch_array()["auth_code"];
        if (mail($mysqli->query("SELECT * FROM users WHERE login = '$login'")->fetch_array()["email"], 'Подтверждение аккаунта StudRasp', "Для завершения регистрации аккаунта \"".$login."\" перейдите по ссылке:".
            "\rhttps://studrasp.ru/main.php?action=authentication&login=".$login."&auth_code=".$auth_code." \rИли введите код в приложении самостоятельно: ".$auth_code."\rЕсли вы не регистрировались в StudRasp,".
            "то не сообщайте никому код и просто игнорируйте данное письмо.", 'From: registration@studrasp.ru', "-f registration@studrasp.ru")!=null)
        {
            print("{\"error\":{\"code\":0,\"message\":\"\"},\"session\":\"$session\"}"); 
        }
        else
        {
            print("{\"error\":{\"code\":9,\"message\":\"$error_messages_9\"},\"session\":\"$session\"}"); 
        }
    }
}



else if ($action == check_account_confirmation && $login != null && $session != null)
{
    if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$login' AND JSON_SEARCH(`sessions`, 'one', \"".hash('sha256', $session)."\") IS NOT NULL")->num_rows == 0)
    {
        print("{\"error\":{\"code\":4,\"message\":\"$error_messages_4\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->fetch_array()["auth_code"] != "0")
    {
        print("{\"error\":{\"code\":10,\"message\":\"$error_messages_10\"}}"); 
    }
    else
    {
        print("{\"error\":{\"code\":0,\"message\":\"\"},\"session\":\"$session\",\"email\":\"".$mysqli->query("SELECT * FROM users WHERE login = '$login'")->fetch_array()["email"]."\"}"); 
    }
}



else if ($action == authorization && $login != null && $password != null)
{
    if ($mysqli->query("SELECT * FROM users WHERE login = '$login' OR (email = '$login' AND auth_code = \"0\")")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$login' OR (email = '$login' AND auth_code = \"0\")")->fetch_array()["password"] != hash('sha256', $password))
    {
        print("{\"error\":{\"code\":3,\"message\":\"$error_messages_3\"}}"); 
    }
    else
    {
        $mysqli->query("UPDATE users SET session = \"$hash_session\" WHERE login = '$login' OR (email = '$login' AND auth_code = \"0\")");
        print("{\"error\":{\"code\":0,\"message\":\"\"},\"login\":\"$login\",\"session\":\"".new_session($login)."\",\"email\":\"".$mysqli->query("SELECT * FROM users WHERE login = '$login'")->fetch_array()["email"]."\"}"); 
    }
}



else if ($action == get_my_timetables && $login != null && $session != null)
{
    if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$login' AND JSON_SEARCH(`sessions`, 'one', \"".hash('sha256', $session)."\") IS NOT NULL")->num_rows == 0)
    {
        print("{\"error\":{\"code\":4,\"message\":\"$error_messages_4\"}}"); 
    }
    else
    {
        //SUBSTRING(timetables.json->'$.name', 2, char_length(timetables.json->'$.name')-2 )
        $q = $mysqli->query("SELECT timetables.id, timetables.invite_code, timetables.name AS name FROM `users` INNER JOIN timetables ON login = '$login' AND json_search(users.my_timetables, 'one', id) IS NOT NULL");
        
        while($e=$q->fetch_assoc())
            $output[]=$e;
        $json_timetables = json_encode($output,JSON_UNESCAPED_UNICODE);

        if($json_timetables == "null") $json_timetables ="[]";
        
        $k = "{\"timeTables\":".$json_timetables.",\"error\":{\"code\":0,\"message\":\"\"},\"session\":\"$session\"}";
        print($k);
    }
}



else if ($action == get_saved_timetables && $login != null && $session != null)
{
    if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$login' AND JSON_SEARCH(`sessions`, 'one', \"".hash('sha256', $session)."\") IS NOT NULL")->num_rows == 0)
    {
        print("{\"error\":{\"code\":4,\"message\":\"$error_messages_4\"}}"); 
    }
    else
    {
        $q = $mysqli->query("SELECT timetables.id, timetables.invite_code, timetables.name AS name FROM `users` INNER JOIN timetables ON login = '$login' AND json_search(users.saved_timetables, 'one', id) IS NOT NULL");

        while($e=$q->fetch_assoc())
            $output[]=$e;
        $json_timetables = json_encode($output,JSON_UNESCAPED_UNICODE);

        if($json_timetables == "null") $json_timetables ="[]";
        
        $k = "{\"timeTables\":".$json_timetables.",\"error\":{\"code\":0,\"message\":\"\"},\"session\":\"$session\"}";
        print($k);
    }
}



else if ($action == add_saved_timetable && $login != null && $session != null && $id != NULL)
{
    if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->fetch_array()["auth_code"] != strval(0))
    {
        print("{\"error\":{\"code\":10,\"message\":\"$error_messages_10\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$login' AND JSON_SEARCH(`sessions`, 'one', \"".hash('sha256', $session)."\") IS NOT NULL")->num_rows == 0)
    {
        print("{\"error\":{\"code\":4,\"message\":\"$error_messages_4\"}}"); 
    }
    else
    {
        $mysqli->query("UPDATE users SET `saved_timetables` = JSON_ARRAY_APPEND(users.saved_timetables, '$', '$id') WHERE login = '$login' AND JSON_SEARCH(users.saved_timetables, 'one', '$id') IS NULL");
        print("{\"error\":{\"code\":0,\"message\":\"\"},\"session\":\"$session\"}"); 
    }
}



else if ($action == get_editable_timetables && $login != null && $session != null)
{
    if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$login' AND JSON_SEARCH(`sessions`, 'one', \"".hash('sha256', $session)."\") IS NOT NULL")->num_rows == 0)
    {
        print("{\"error\":{\"code\":4,\"message\":\"$error_messages_4\"}}"); 
    }
    else
    {
        
        $q = $mysqli->query("SELECT timetables.id, timetables.invite_code, timetables.name AS name FROM `users` INNER JOIN timetables ON login = '$login' AND json_search(users.editable_timetables, 'one', id) IS NOT NULL");

        while($e=$q->fetch_assoc())
            $output[]=$e;
        $json_timetables = json_encode($output,JSON_UNESCAPED_UNICODE);

        if($json_timetables == "null") $json_timetables ="[]";

        $k = "{\"timeTables\":".$json_timetables.",\"error\":{\"code\":0,\"message\":\"\"},\"session\":\"$session\"}";
        print($k);
    }
}



else if ($action == give_permission_edit_timetable && $login != null && $session != null && $id != NULL && $user != null)
{
    if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$user'")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM timetables WHERE id = $id")->num_rows == 0)
    {
        print("{\"error\":{\"code\":5,\"message\":\"$error_messages_5\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->fetch_array()["auth_code"] != strval(0))
    {
        print("{\"error\":{\"code\":10,\"message\":\"$error_messages_10\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$login' AND JSON_SEARCH(`sessions`, 'one', \"".hash('sha256', $session)."\") IS NOT NULL")->num_rows == 0)
    {
        print("{\"error\":{\"code\":4,\"message\":\"$error_messages_4\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$user' AND JSON_SEARCH(users.saved_timetables, 'one', '$id') IS NOT NULL")->num_rows == 0)
    {
        print("{\"error\":{\"code\":14,\"message\":\"$error_messages_14\"}}"); 
    }
    else
    {
        $mysqli->query("UPDATE users SET `editable_timetables` = JSON_ARRAY_APPEND(users.editable_timetables, '$', '$id') WHERE login = '$user' AND JSON_SEARCH(users.editable_timetables, 'one', '$id') IS NULL");
        print("{\"error\":{\"code\":0,\"message\":\"\"},\"session\":\"$session\"}"); 
    }
}



else if ($action == add_comment && $login != null && $session != null && $id != NULL && $lessonIndex != NULL && $text != NULL && $importance != NULL)
{
    if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM timetables WHERE id = $id")->num_rows == 0)
    {
        print("{\"error\":{\"code\":5,\"message\":\"$error_messages_5\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->fetch_array()["auth_code"] != strval(0))
    {
        print("{\"error\":{\"code\":10,\"message\":\"$error_messages_10\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$login' AND JSON_SEARCH(`sessions`, 'one', \"".hash('sha256', $session)."\") IS NOT NULL")->num_rows == 0)
    {
        print("{\"error\":{\"code\":4,\"message\":\"$error_messages_4\"}}"); 
    }
    else if($mysqli->query("SELECT users.my_timetables FROM users WHERE login =  '$login' AND JSON_CONTAINS(users.saved_timetables, JSON_ARRAY(\"$id\"))")->num_rows == 0)
    {
        print("{\"error\":{\"code\":7,\"message\":\"$error_messages_7\"}}");
    }
    else
    {
        $q = $mysqli->query("SELECT JSON_LENGTH(timetables.comments) FROM timetables WHERE id = $id");

        while($e=$q->fetch_assoc())
            $output[]=$e;

        $lastCommentId = $output[0]["JSON_LENGTH(timetables.comments)"] - 1;

        if($lastCommentId != -1)
            $mysqli->query("UPDATE timetables SET `comments` = JSON_ARRAY_APPEND(timetables.comments, '$',".
            "JSON_OBJECT('commentIndex', CONVERT(JSON_UNQUOTE(JSON_EXTRACT(timetables.comments, '$[".$lastCommentId."].commentIndex')) + 1, CHAR) ,".
            "'lessonIndex', '$lessonIndex', 'comment', '$text', 'creator', '$login', 'creationDate', NOW(), 'lastUpdateDate', NOW(), 'importance', '$importance'))".
            "WHERE id = $id");
        else
            $mysqli->query("UPDATE timetables SET `comments` = JSON_ARRAY_APPEND(timetables.comments, '$',".
            "JSON_OBJECT('commentIndex', '0',".
            "'lessonIndex', '$lessonIndex', 'comment', '$text', 'creator', '$login', 'creationDate', NOW(), 'lastUpdateDate', NOW(), 'importance', '$importance'))".
            "WHERE id = $id"); 
        print("{\"error\":{\"code\":0,\"message\":\"\"},\"session\":\"$session\"}"); 
    }
}



else if ($action == edit_comment && $login != null && $session != null && $id != NULL && $commentIndex != NULL && $text != NULL && $importance != NULL)
{
    if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM timetables WHERE id = $id")->num_rows == 0)
    {
        print("{\"error\":{\"code\":5,\"message\":\"$error_messages_5\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->fetch_array()["auth_code"] != strval(0))
    {
        print("{\"error\":{\"code\":10,\"message\":\"$error_messages_10\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$login' AND JSON_SEARCH(`sessions`, 'one', \"".hash('sha256', $session)."\") IS NOT NULL")->num_rows == 0)
    {
        print("{\"error\":{\"code\":4,\"message\":\"$error_messages_4\"}}"); 
    }
    else if($mysqli->query("SELECT users.my_timetables FROM users WHERE login =  '$login' AND JSON_CONTAINS(users.saved_timetables, JSON_ARRAY(\"$id\"))")->num_rows == 0)
    {
        print("{\"error\":{\"code\":7,\"message\":\"$error_messages_7\"}}");
    }
    else
    {
        $path = $mysqli->query("SELECT JSON_UNQUOTE(JSON_SEARCH(timetables.comments, 'one', '$commentIndex', NULL,  '$[*].commentIndex')) FROM timetables WHERE id = $id AND JSON_SEARCH(timetables.comments, 'one', '$commentIndex', NULL,  '$[*].commentIndex') IS NOT NULL");
        //var_dump($path);
        while($e=$path->fetch_assoc())
        $output[]=$e;

        $path = substr($output[0]["JSON_UNQUOTE(JSON_SEARCH(timetables.comments, 'one', '$commentIndex', NULL,  '$[*].commentIndex'))"], 0, -12);
        print($path);
        $mysqli->query("UPDATE timetables SET `comments` = JSON_SET(timetables.comments, '".$path."comment', '$text') WHERE id = $id");
        $mysqli->query("UPDATE timetables SET `comments` = JSON_SET(timetables.comments, '".$path."importance', '$importance') WHERE id = $id");
        $mysqli->query("UPDATE timetables SET `comments` = JSON_SET(timetables.comments, '".$path."lastUpdateDate', NOW()) WHERE id = $id");
        print("{\"error\":{\"code\":0,\"message\":\"\"},\"session\":\"$session\"}"); 
    }
}



else if ($action == delete_comment && $login != null && $session != null && $id != NULL && $commentIndex != NULL)
{
    if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM timetables WHERE id = $id")->num_rows == 0)
    {
        print("{\"error\":{\"code\":5,\"message\":\"$error_messages_5\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->fetch_array()["auth_code"] != strval(0))
    {
        print("{\"error\":{\"code\":10,\"message\":\"$error_messages_10\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$login' AND JSON_SEARCH(`sessions`, 'one', \"".hash('sha256', $session)."\") IS NOT NULL")->num_rows == 0)
    {
        print("{\"error\":{\"code\":4,\"message\":\"$error_messages_4\"}}"); 
    }
    else if($mysqli->query("SELECT users.my_timetables FROM users WHERE login =  '$login' AND JSON_CONTAINS(users.saved_timetables, JSON_ARRAY(\"$id\"))")->num_rows == 0)
    {
        print("{\"error\":{\"code\":7,\"message\":\"$error_messages_7\"}}");
    }
    else
    {
        $path = $mysqli->query("SELECT JSON_UNQUOTE(JSON_SEARCH(timetables.comments, 'one', '$commentIndex', NULL,  '$[*].commentIndex')) FROM timetables WHERE id = $id AND JSON_SEARCH(timetables.comments, 'one', '$commentIndex', NULL,  '$[*].commentIndex') IS NOT NULL");

        while($e=$path->fetch_assoc())
        $output[]=$e;

        $path = substr($output[0]["JSON_UNQUOTE(JSON_SEARCH(timetables.comments, 'one', '$commentIndex', NULL,  '$[*].commentIndex'))"], 0, -13);

        if($path)
        {
            $mysqli->query("UPDATE timetables SET `comments` = JSON_REMOVE(timetables.comments, '$path') WHERE id = $id");
            print("{\"error\":{\"code\":0,\"message\":\"\"},\"session\":\"$session\"}");
        }
        else
        {
            print("{\"error\":{\"code\":16,\"message\":\"$error_messages_16\"}}");
        }
            
        
    }
}





else if ($action == get_timetable && $id != null)
{
    if ($mysqli->query("SELECT * FROM timetables WHERE id = $id")->num_rows == 0)
    {
        print("{\"error\":{\"code\":5,\"message\":\"$error_messages_5\"}}"); 
    }
    else
    {
        $q = $mysqli->query("SELECT timetables.json as 'json', timetables.id as \"id\" FROM timetables WHERE id = $id");
        $qqarray =$q->fetch_assoc();
        //$mysqli->query("UPDATE timetables SET `requests_all_time` = `requests_all_time` + 1 WHERE id = $id");

        print("{\"error\":{\"code\":0,\"message\":\"\"},\"timetable\":{\"id\":".$qqarray["id"].",\"json\":".$qqarray["json"]."}}");

        if ($login != null && $session != null)
        {
            if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->num_rows == 0)
            {
                print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
            }
            else if ($mysqli->query("SELECT * FROM users WHERE login = '$login' AND JSON_SEARCH(`sessions`, 'one', \"".hash('sha256', $session)."\") IS NOT NULL")->num_rows == 0)
            {
                print("{\"error\":{\"code\":4,\"message\":\"$error_messages_4\"}}"); 
            }
            else
            {
                if($mysqli->query("SELECT users.saved_timetables FROM users WHERE login =  '$login' AND JSON_CONTAINS(users.saved_timetables, JSON_ARRAY('$id'))")->num_rows == 0)
                {
                    $tmp_id = $qqarray["id"];
                    $mysqli->query("UPDATE users SET `saved_timetables` = JSON_ARRAY_APPEND(users.saved_timetables, '$', '$tmp_id') WHERE login = '$login'");
                }
            }
        }
    }
}



else if ($action == get_timetable_by_invite_code && $invite_code != null)
{
    if ($mysqli->query("SELECT * FROM timetables WHERE invite_code = '$invite_code'")->num_rows == 0)
    {
        print("{\"error\":{\"code\":5,\"message\":\"$error_messages_5\"}}"); 
    }
    else
    {
        $q = $mysqli->query("SELECT timetables.json as 'json', timetables.id as \"id\" FROM timetables WHERE invite_code = '$invite_code'");
        $qqarray =$q->fetch_assoc();
        //$mysqli->query("UPDATE timetables SET `requests_all_time` = `requests_all_time` + 1 WHERE id = $id");

        print("{\"error\":{\"code\":0,\"message\":\"\"},\"timetable\":{\"id\":".$qqarray["id"].",\"json\":".$qqarray["json"]."}}");

        if ($login != null && $session != null)
        {
            if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->num_rows == 0)
            {
                print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
            }
            else if ($mysqli->query("SELECT * FROM users WHERE login = '$login' AND JSON_SEARCH(`sessions`, 'one', \"".hash('sha256', $session)."\") IS NOT NULL")->num_rows == 0)
            {
                print("{\"error\":{\"code\":4,\"message\":\"$error_messages_4\"}}"); 
            }
            else
            {
                if($mysqli->query("SELECT users.saved_timetables FROM users WHERE login =  '$login' AND JSON_CONTAINS(users.saved_timetables, JSON_ARRAY('$id'))")->num_rows == 0)
                {
                    $tmp_id = $qqarray["id"];
                    $mysqli->query("UPDATE users SET `saved_timetables` = JSON_ARRAY_APPEND(users.saved_timetables, '$', '$tmp_id') WHERE login = '$login'");
                }
            }
        }
    }
}



else if ($action == update_timetable && $login != null && $session != null && $id != null && $json != null)
{
    if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->fetch_array()["auth_code"] != strval(0))
    {
        print("{\"error\":{\"code\":10,\"message\":\"$error_messages_10\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$login' AND JSON_SEARCH(`sessions`, 'one', \"".hash('sha256', $session)."\") IS NOT NULL")->num_rows == 0)
    {
        print("{\"error\":{\"code\":4,\"message\":\"$error_messages_4\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM timetables WHERE id = $id")->num_rows == 0)
    {
        print("{\"error\":{\"code\":5,\"message\":\"$error_messages_5\"}}"); 
    }
    else if($mysqli->query("SELECT users.my_timetables FROM users WHERE login =  '$login' AND JSON_CONTAINS(users.my_timetables, JSON_ARRAY(\"$id\"))")->num_rows == 0)
    {
        print("{\"error\":{\"code\":7,\"message\":\"$error_messages_7\"}}");
    }
    else
    {
        if(json_last_error()) 
        {
            print("{\"error\":{\"code\":6,\"message\":\"$error_messages_6\"}}"); 
        }
        else
        {   
            // $path = $mysqli->query("SELECT JSON_UNQUOTE(JSON_SEARCH(users.sessions, 'one',)) FROM users WHERE login = '$login' AND JSON_SEARCH(users.sessions, 'one',\"".hash('sha256', $session)."\") IS NOT NULL");

            // while($e=$path->fetch_assoc())
            //     $output[]=$e;

            // $path = substr($output[0]["JSON_UNQUOTE(JSON_SEARCH(users.sessions, 'one',\"".hash('sha256', $session)."\"))"], 0, 5);
            $mysqli->query("UPDATE `timetables` SET `json` = '$json' WHERE id = $id");

            $name = json_decode($json)->{'name'} != null ? json_decode($json)->{'name'} : "";
            $mysqli->query("UPDATE `timetables` SET `name` = '$name' WHERE id = $id");

            $mysqli->query("UPDATE `timetables` SET `info` = JSON_SET(timetables.info, '$.name', '$name') WHERE id = $id");
            $mysqli->query("UPDATE `timetables` SET `info` = JSON_SET(timetables.info, '$.lastUpdateDate', NOW()) WHERE id = $id");
            $mysqli->query("UPDATE `timetables` SET `info` = JSON_SET(timetables.info, '$.lastUpdateInitiator', '$login') WHERE id = $id");
            
                      
            print("{\"error\":{\"code\":0,\"message\":\"\"},\"session\":\"$session\"}"); 
        }
    }
}



else if ($action == create_timetable && $login != null && $session != null)
{
    if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->fetch_array()["auth_code"] != strval(0))
    {
        print("{\"error\":{\"code\":10,\"message\":\"$error_messages_10\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$login' AND JSON_SEARCH(`sessions`, 'one', \"".hash('sha256', $session)."\") IS NOT NULL")->num_rows == 0)
    {
        print("{\"error\":{\"code\":4,\"message\":\"$error_messages_4\"}}"); 
    }
    else
    {
        $default_json_timetable = "{   \"name\": \"Без имени\",    \"firstWeek\": \"\",    \"secondWeek\": \"\",    \"days\": [    {    \"lessons1\": [],    \"lessons2\": []    },    {    \"lessons1\": [],    \"lessons2\": []    },    {    \"lessons1\": [],    \"lessons2\": []    },    {    \"lessons1\": [],    \"lessons2\": []    },    {    \"lessons1\": [],    \"lessons2\": []    },    {    \"lessons1\": [],    \"lessons2\": []    },    {    \"lessons1\": [],    \"lessons2\": []    }    ]    }";
        $invite_code = generate_random_unique_string(4);
        $mysqli->query("INSERT INTO timetables(`invite_code`, `name`, `json`, `info`, `comments`) VALUES ('$invite_code','Без имени','$default_json_timetable',".
        "JSON_OBJECT('name','Без имени','creator','$login','editors',JSON_ARRAY('$login'),'creationDate', NOW(),'lastUpdateDate', NOW(), 'lastUpdateInitiator','$login','regularUsers', 1),".
        "JSON_ARRAY(JSON_OBJECT('commentIndex','0','lessonIndex', '0', 'comment', 'lolkek', 'creator', '$login', 'creationDate', NOW(), 'lastUpdateDate', NOW(), 'importance', '1')))");
        
        $id = $mysqli->query("SELECT timetables.id FROM timetables WHERE id = LAST_INSERT_ID()")->fetch_array()["id"];

        $mysqli->query("UPDATE users SET `my_timetables` = JSON_ARRAY_APPEND(users.my_timetables, '$', '$id') WHERE login = '$login'");

        $mysqli->query("UPDATE users SET `editable_timetables` = JSON_ARRAY_APPEND(users.editable_timetables, '$', '$id') WHERE login = '$login'");

        $mysqli->query("UPDATE users SET `saved_timetables` = JSON_ARRAY_APPEND(users.saved_timetables, '$', '$id') WHERE login = '$login'");

        if($json != null)
        {
            $mysqli->query("UPDATE `timetables` SET `json` = '$json' WHERE id = $id");

            $name = json_decode($json)->{'name'} != null ? json_decode($json)->{'name'} : "";
            $mysqli->query("UPDATE `timetables` SET `name` = '$name' WHERE id = $id");

            $mysqli->query("UPDATE `timetables` SET `info` = JSON_SET(timetables.info, '$.name', '$name') WHERE id = $id");
            $mysqli->query("UPDATE `timetables` SET `info` = JSON_SET(timetables.info, '$.lastUpdateDate', NOW()) WHERE id = $id");
            $mysqli->query("UPDATE `timetables` SET `info` = JSON_SET(timetables.info, '$.lastUpdateInitiator', '$login') WHERE id = $id");
        }  

        print("{\"error\":{\"code\":0,\"message\":\"\"},\"id\":\"$id\",\"invite_code\":\"$invite_code\",\"session\":\"$session\"}");
    }
}



else if ($action == delete_timetable && $login != null && $session != null && $id != null)
{

    if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->fetch_array()["auth_code"] != strval(0))
    {
        print("{\"error\":{\"code\":10,\"message\":\"$error_messages_10\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$login' AND JSON_SEARCH(`sessions`, 'one', \"".hash('sha256', $session)."\") IS NOT NULL")->num_rows == 0)
    {
        print("{\"error\":{\"code\":4,\"message\":\"$error_messages_4\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM timetables WHERE id = $id")->num_rows == 0)
    {
        print("{\"error\":{\"code\":5,\"message\":\"$error_messages_5\"}}"); 
    }
    else if($mysqli->query("SELECT users.my_timetables FROM users WHERE login =  '$login' AND JSON_CONTAINS(users.my_timetables, JSON_ARRAY('$id'))")->num_rows == 0)
    {
        print("{\"error\":{\"code\":7,\"message\":\"$error_messages_7\"}}");
    }
    else
    {
        $mysqli->query("DELETE FROM timetables WHERE id = $id");
        $mysqli->query("UPDATE users SET my_timetables = JSON_REMOVE(users.my_timetables, JSON_UNQUOTE(JSON_SEARCH(users.my_timetables, 'one', '$id'))) WHERE json_search(users.my_timetables, 'one', '$id') IS NOT NULL");
        $mysqli->query("UPDATE users SET saved_timetables = JSON_REMOVE(users.saved_timetables, JSON_UNQUOTE(JSON_SEARCH(users.saved_timetables, 'one', '$id'))) WHERE json_search(users.saved_timetables, 'one', '$id') IS NOT NULL");
        print("{\"error\":{\"code\":0,\"message\":\"\"},\"session\":\"$session\"}"); 

    }
}



else if ($action == check_session && $login != null && $session != null)
{
    if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$login'")->fetch_array()["auth_code"] != strval(0))
    {
        print("{\"error\":{\"code\":10,\"message\":\"$error_messages_10\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = '$login' AND JSON_SEARCH(`sessions`, 'one', \"".hash('sha256', $session)."\") IS NOT NULL")->num_rows == 0)
    {
        print("{\"error\":{\"code\":4,\"message\":\"$error_messages_4\"}}"); 
    }
    else
    {
        print("{\"error\":{\"code\":0,\"message\":\"\"}}"); 
    }
}



else if ($action == global_search_timetables && $page_number != NULL)
{
    $page_number = ctype_digit($page_number) ? intval($page_number) : -1;
    
    if($page_number < 0)
    {
        print("{\"error\":{\"code\":13,\"message\":\"$error_messages_13\"}}"); 
    }  
    else
    {
        if($search_string == NULL)
            $search_pattern = "%";
        else
            $search_pattern = "%".$search_string."%";
        
        if($sort_type == NULL)
            $sort_type = "name";

        if($tabs_per_page == NULL)
            $tabs_per_page = 20;

        // switch($sort_type)
        // {
        //     case "name":
        //         $q = $mysqli->query("SELECT timetables.id, timetables.name FROM timetables WHERE timetables.name LIKE '$search_pattern' ORDER BY LENGTH(timetables.name), timetables.name LIMIT ".$page_number*$tabs_per_page.", $tabs_per_page");
        //         break;
        //     case "requests_all_time":
        //         $q = $mysqli->query("SELECT timetables.id, timetables.name FROM timetables WHERE timetables.name LIKE '$search_pattern' ORDER BY timetables.requests_all_time DESC LIMIT ".$page_number*$tabs_per_page.", $tabs_per_page");
        //         break;
        //     case "requests_last_month":
        //         break;
        //     default:
        //         $q = $mysqli->query("SELECT timetables.id, timetables.name FROM timetables WHERE timetables.name LIKE '$search_pattern' ORDER BY LENGTH(timetables.name), timetables.name LIMIT ".$page_number*$tabs_per_page.", $tabs_per_page");
        //         break;
        // }

        while($e=$q->fetch_assoc())
            $output[]=$e;

        $json_timetables = json_encode($output,JSON_UNESCAPED_UNICODE);
        if($json_timetables == "null") $json_timetables ="[]";

        $k = "{\"timeTables\":".$json_timetables.",\"error\":{\"code\":0,\"message\":\"\"}}";
        print($k);
    }
    
}


$mysqli->close();
?>