<?php // сохранить в utf-8 !
$mysql_host = "localhost"; // sql сервер
$mysql_user = "rustamxa_timetable"; // пользователь
$mysql_password = "timetable"; // пароль
$mysql_database = "rustamxa_timetable"; // имя базы данных


// ----------------------------------------------------------
// например ...chat.php?action=select
//-----------------------------------------------------------
if (isset($_GET["action"])) { 
    $action = $_GET['action'];

    if ($action == "select")
    {
        if (isset($_GET["data"])) { 
            $data = $_GET['data'];
        }
    }


    if ($action == "registration")
    {
        if (isset($_GET["login"])) { 
            $login = $_GET['login'];
        }
        if (isset($_GET["password"])) { 
            $password = $_GET['password'];
        }
        if (isset($_GET["email"])) { 
            $email = $_GET['email'];
        }
    }
    else if ($action == "authentication")
    {
        if (isset($_GET["login"])) { 
            $login = $_GET['login'];
        }
        if (isset($_GET["auth_code"])) { 
            $auth_code = $_GET['auth_code'];
        }
    }
    else if ($action == "send_confirmation_email")
    {
        if (isset($_GET["login"])) { 
            $login = $_GET['login'];
        }
        if (isset($_GET["session"])) { 
            $session = $_GET['session'];
        }
    }
    else if ($action == "check_account_confirmation")
    {
        if (isset($_GET["login"])) { 
            $login = $_GET['login'];
        }
        if (isset($_GET["session"])) { 
            $session = $_GET['session'];
        }
    }
    else if ($action == "authorization")
    {
        if (isset($_GET["login"])) { 
            $login = $_GET['login'];
        }
        if (isset($_GET["password"])) { 
            $password = $_GET['password'];
        }
    }
    else if ($action == "get_my_timetables")
    {
        if (isset($_GET["login"])) { 
            $login = $_GET['login'];
        }
        if (isset($_GET["session"])) { 
            $session = $_GET['session'];
        }
    }
    else if ($action == "get_saved_timetables")
    {
        if (isset($_GET["login"])) { 
            $login = $_GET['login'];
        }
        if (isset($_GET["session"])) { 
            $session = $_GET['session'];
        }
    }
    else if ($action == "get_timetable")
    {
        if (isset($_GET["index"])) { 
            $index = $_GET['index'];
        }
        if (isset($_GET["login"])) { 
            $login = $_GET['login'];
        }
    }
    else if ($action == "update_timetable")
    {
        if (isset($_GET["login"])) { 
            $login = $_GET['login'];
        }
        if (isset($_GET["session"])) { 
            $session = $_GET['session'];
        }
        if (isset($_GET["index"])) { 
            $index = $_GET['index'];
        }
        if (isset($_GET["json"])) { 
            $json = $_GET['json'];
        }
    }
    else if ($action == "create_timetable")
    {
        if (isset($_GET["login"])) { 
            $login = $_GET['login'];
        }
        if (isset($_GET["session"])) { 
            $session = $_GET['session'];
        }
    }
    else if ($action == "delete_timetable")
    {
        if (isset($_GET["login"])) { 
            $login = $_GET['login'];
        }
        if (isset($_GET["session"])) { 
            $session = $_GET['session'];
        }
        if (isset($_GET["index"])) { 
            $index = $_GET['index'];
        }
    }
    else if ($action == "check_session")
    {
        if (isset($_GET["login"])) { 
            $login = $_GET['login'];
        }
        if (isset($_GET["session"])) { 
            $session = $_GET['session'];
        }
    }
  	else if ($action == "global_search_timetable")
    {
    }
    

}



$mysqli = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_database);
print($mysqli->connect_error);
$mysqli->set_charset('utf-8');
// ------------------------------------------------------------ обрабатываем запрос если он был

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


// Новые действия
if ($action == registration && $login != null && $password != null && $email != null)
{
    if ($mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->num_rows != 0)
    {
        print("{\"error\":{\"code\":1,\"message\":\"$error_messages_1\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE email = \"$email\" AND auth_code = \"0\"")->num_rows != 0)
    {
        print("{\"error\":{\"code\":11,\"message\":\"$error_messages_11\"}}"); 
    }
    else
    { 
        $rand_auth_code = bin2hex(random_bytes(3));   
        $hash_auth_code = hash('sha256', $rand_auth_code);

        $rand_session = bin2hex(random_bytes(3));
        $hash_session = hash('sha256', $rand_session);

        $hash_password = hash('sha256', $password);

        $mysqli->query("INSERT INTO `users`(`login`,`password`,`email`,`session`,`auth_code`,`my_timetables`,`saved_timetables`) VALUES (\"$login\", \"$hash_password\", \"$email\",\"$hash_session\", \"$hash_auth_code\", \"[]\", \"[]\")");

        if (mail($mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->fetch_array()["email"], 'Подтверждение аккаунта StudRasp', "Для завершения регистрации аккаунта \"".$login."\" перейдите по ссылке:\rhttps://hytale-main.ru/main.php?action=authentication&login=".$login."&auth_code=".$rand_auth_code." \rИли введите код в приложении самостоятельно: ".$rand_auth_code."\rЕсли вы не регистрировались в StudRasp, то не сообщайте никому код и игнорируйте данное письмо.", 'From: registration@studrasp.ru', "-f registration@studrasp.ru")!=null)
        {
            print("{\"error\":{\"code\":0,\"message\":\"\"},\"session\":\"$rand_session\"}"); 
        }
        else
        {
            print("{\"error\":{\"code\":9,\"message\":\"$error_messages_9\"},\"session\":\"$rand_session\"}");  
        }
    }
}





else if ($action == authentication && $login != null && $auth_code != null)
{
    if ($mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else
    {
        $hash_auth_code = hash('sha256',$auth_code);
        if ($mysqli->query("SELECT * FROM users WHERE auth_code = \"$hash_auth_code\"")->num_rows == 0 || $auth_code = "0")
        {
            print("{\"error\":{\"code\":8,\"message\":\"$error_messages_8\"}}"); 
        }
        else
        {
            $mysqli->query("UPDATE users SET auth_code = \"0\" WHERE auth_code = \"$hash_auth_code\"");
            print("{\"error\":{\"code\":0,\"message\":\"\"}}");
        }
    }
}



else if ($action == send_confirmation_email && $login != null && $session != null)
{
    if ($mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else if (hash('sha256', $session) != $mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->fetch_array()["session"] )
    {
        print("{\"error\":{\"code\":4,\"message\":\"$error_messages_4\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->fetch_array()["auth_code"] == "0")
    {
        print("{\"error\":{\"code\":12,\"message\":\"$error_messages_12\"}}"); 
    }
    else
    {
        if (mail($mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->fetch_array()["email"], 'Подтверждение аккаунта StudRasp', "Для завершения регистрации аккаунта \"".$login."\" перейдите по ссылке:\rhttps://hytale-main.ru/main.php?action=authentication&login=Star&auth_code=5705b2 \rИли введите код в приложении самостоятельно: ".$rand_auth_code."\rЕсли вы не регистрировались в StudRasp, то не сообщайте никому код и просто игнорируйте данное письмо.", 'From: registration@hytale-main.ru', "-f registration@hytale-main.ru")!=null)
        {
            print("{\"error\":{\"code\":0,\"message\":\"\"}}"); 
        }
        else
        {
            print("{\"error\":{\"code\":9,\"message\":\"$error_messages_9\"}}"); 
        }
    }
}

else if ($action == check_account_confirmation && $login != null && $session != null)
{
    if ($mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else if (hash('sha256', $session) != $mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->fetch_array()["session"] )
    {
        print("{\"error\":{\"code\":4,\"message\":\"$error_messages_4\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->fetch_array()["auth_code"] == "0")
    {
        print("{\"error\":{\"code\":0,\"message\":\"\"}}"); 
    }
    else
    {
        print("{\"error\":{\"code\":10,\"message\":\"$error_messages_10\"}}"); 
    }
}



else if ($action == authorization && $login != null && $password != null)
{
    if ($mysqli->query("SELECT * FROM users WHERE login = \"$login\" OR (email = \"$login\" AND auth_code = \"0\")")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = \"$login\" OR (email = \"$login\" AND auth_code = \"0\")")->fetch_array()["password"] != hash('sha256', $password))
    {
        print("{\"error\":{\"code\":3,\"message\":\"$error_messages_3\"}}"); 
    }
    else
    {
        $rand_session = bin2hex(random_bytes(3));
        $hash_session = hash('sha256', $rand_session);

        $mysqli->query("UPDATE users SET session = \"$hash_session\" WHERE login = \"$login\" OR (email = \"$login\" AND auth_code = \"0\")");
        print("{\"error\":{\"code\":0,\"message\":\"\"},\"login\":\"$login\",\"session\":\"$rand_session\"}"); 
    }
}



else if ($action == get_my_timetables && $login != null && $session != null)
{
    if ($mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->fetch_array()["auth_code"] != strval(0))
    {
        print("{\"error\":{\"code\":10,\"message\":\"$error_messages_10\"}}"); 
    }
    else if (hash('sha256', $session) != $mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->fetch_array()["session"] )
    {
        print("{\"error\":{\"code\":4,\"message\":\"$error_messages_4\"}}"); 
    }
    else
    {
        //SUBSTRING(timetables.json->'$.name', 2, char_length(timetables.json->'$.name')-2 )
        $q = $mysqli->query("SELECT timetables.id, timetables.name AS name FROM `users` INNER JOIN timetables ON login = \"$login\" AND json_search(users.my_timetables, 'one', id) IS NOT NULL");
        
        while($e=$q->fetch_assoc())
            $output[]=$e;
        $k = "{\"timeTables\":".json_encode($output,JSON_UNESCAPED_UNICODE).",\"error\":{\"code\":0,\"message\":\"\"}}";
        print($k);
    }
}

else if ($action == get_saved_timetables && $login != null && $session != null)
{
    if ($mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->fetch_array()["auth_code"] != strval(0))
    {
        print("{\"error\":{\"code\":10,\"message\":\"$error_messages_10\"}}"); 
    }
    else if (hash('sha256', $session) != $mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->fetch_array()["session"])
    {
        print("{\"error\":{\"code\":4,\"message\":\"$error_messages_4\"}}"); 
    }
    else
    {
        $q = $mysqli->query("SELECT timetables.id, timetables.name AS name FROM `users` INNER JOIN timetables ON login = \"$login\" AND json_search(users.saved_timetables, 'one', id) IS NOT NULL");
        while($e=$q->fetch_assoc())
            $output[]=$e;
        $k = "{\"timeTables\":".json_encode($output,JSON_UNESCAPED_UNICODE).",\"error\":{\"code\":0,\"message\":\"\"}}";
        print($k);
    }
}



else if ($action == get_timetable && $index != null)
{
    if ($mysqli->query("SELECT * FROM timetables WHERE id = $index")->num_rows == 0)
    {
        print("{\"error\":{\"code\":5,\"message\":\"$error_messages_5\"}}"); 
    }
    else
    {
        $q = $mysqli->query("SELECT timetables.json as \"info\", timetables.id as \"id\" FROM timetables WHERE id = $index");
        $qqarray =$q->fetch_assoc();
        print("{\"error\":{\"code\":0,\"message\":\"\"},\"timetable\":{\"id\":".$qqarray["id"].",\"info\":".$qqarray["info"]."}}");
        $mysqli->query("UPDATE timetables SET popularity = popularity + 1 WHERE id = $index");
        if ($login != null)
        {
          if ($mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->num_rows == 0)
          {
              print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
          }
          else
          {
            if($mysqli->query("SELECT users.saved_timetables FROM users WHERE login =  \"$login\" AND JSON_CONTAINS(users.saved_timetables, JSON_ARRAY(\"$index\"))")->num_rows == 0)
            {
             $tmp_id = $qqarray["id"];
            	$mysqli->query("UPDATE users SET `saved_timetables` = JSON_ARRAY_APPEND(users.saved_timetables, \"$\", \"$tmp_id\") WHERE login = \"$login\"");
            }
          }
        }
    }
}



else if ($action == update_timetable && $login != null && $session != null && $index != null && $json != null)
{
    if ($mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->fetch_array()["auth_code"] != strval(0))
    {
        print("{\"error\":{\"code\":10,\"message\":\"$error_messages_10\"}}"); 
    }
    else if (hash('sha256', $session) != $mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->fetch_array()["session"] )
    {
        print("{\"error\":{\"code\":4,\"message\":\"$error_messages_4\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM timetables WHERE id = $index")->num_rows == 0)
    {
        print("{\"error\":{\"code\":5,\"message\":\"$error_messages_5\"}}"); 
    }
    else if($mysqli->query("SELECT users.my_timetables FROM users WHERE login =  \"$login\" AND JSON_CONTAINS(users.my_timetables, JSON_ARRAY(\"$index\"))")->num_rows == 0)
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
            
            $mysqli->query("UPDATE `timetables` SET `json` = \"$json\" WHERE id = $index");

            //Почему-то не работает при апдейте в одном запросе, странно...
            $name = json_decode($json)->{'name'} != null ? json_decode($json)->{'name'} : "";
            $mysqli->query("UPDATE `timetables` SET `name` = \"$name\" WHERE id = $index");
            print("{\"error\":{\"code\":0,\"message\":\"\"}}"); 
        }
    }
}



else if ($action == create_timetable && $login != null && $session != null)
{
  
    if ($mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->fetch_array()["auth_code"] != strval(0))
    {
        print("{\"error\":{\"code\":10,\"message\":\"$error_messages_10\"}}"); 
    }
    else if (hash('sha256', $session) != $mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->fetch_array()["session"] )
    {
        print("{\"error\":{\"code\":4,\"message\":\"$error_messages_4\"}}"); 
    }
    else
    {
        $default_json_timetable = "{   \"name\": \"Без имени\",    \"firstWeek\": \"\",    \"secondWeek\": \"\",    \"days\": [    {    \"lessons1\": [],    \"lessons2\": []    },    {    \"lessons1\": [],    \"lessons2\": []    },    {    \"lessons1\": [],    \"lessons2\": []    },    {    \"lessons1\": [],    \"lessons2\": []    },    {    \"lessons1\": [],    \"lessons2\": []    },    {    \"lessons1\": [],    \"lessons2\": []    },    {    \"lessons1\": [],    \"lessons2\": []    }    ]    }";
        $mysqli->query("INSERT INTO timetables(`name`, `json`) VALUES ('Без имени','$default_json_timetable')");
        $q = $mysqli->query("SELECT timetables.id FROM timetables WHERE id = LAST_INSERT_ID()");
        $qarray = $q->fetch_array();
        $id = $qarray["id"];
        $mysqli->query("UPDATE users SET `my_timetables` = JSON_ARRAY_APPEND(users.my_timetables, \"$\", \"$id\") WHERE login = \"$login\"");
        $mysqli->query("UPDATE users SET `saved_timetables` = JSON_ARRAY_APPEND(users.saved_timetables, \"$\", \"$id\") WHERE login = \"$login\"");

        print("{\"error\":{\"code\":0,\"message\":\"\"},\"id\":".($qarray["id"])."}"); 
    }
}



else if ($action == delete_timetable && $login != null && $session != null && $index != null)
{

    if ($mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->fetch_array()["auth_code"] != strval(0))
    {
        print("{\"error\":{\"code\":10,\"message\":\"$error_messages_10\"}}"); 
    }
    else if (hash('sha256', $session) != $mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->fetch_array()["session"] )
    {
        print("{\"error\":{\"code\":4,\"message\":\"$error_messages_4\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM timetables WHERE id = $index")->num_rows == 0)
    {
        print("{\"error\":{\"code\":5,\"message\":\"$error_messages_5\"}}"); 
    }
    else if($mysqli->query("SELECT users.my_timetables FROM users WHERE login =  \"$login\" AND JSON_CONTAINS(users.my_timetables, JSON_ARRAY(\"$index\"))")->num_rows == 0)
    {
        print("{\"error\":{\"code\":7,\"message\":\"$error_messages_7\"}}");
    }
    else
    {
        $mysqli->query("DELETE FROM timetables WHERE id = $index");
        $mysqli->query("UPDATE users SET my_timetables = JSON_REMOVE(users.my_timetables, JSON_UNQUOTE(JSON_SEARCH(users.my_timetables, 'one', \"$index\"))) WHERE json_search(users.my_timetables, 'one', \"$index\") IS NOT NULL");
        $mysqli->query("UPDATE users SET saved_timetables = JSON_REMOVE(users.saved_timetables, JSON_UNQUOTE(JSON_SEARCH(users.saved_timetables, 'one', \"$index\"))) WHERE json_search(users.saved_timetables, 'one', \"$index\") IS NOT NULL");
        print("{\"error\":{\"code\":0,\"message\":\"\"}}"); 

    }
}



else if ($action == check_session && $login != null && $session != null)
{
    if ($mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->num_rows == 0)
    {
        print("{\"error\":{\"code\":2,\"message\":\"$error_messages_2\"}}"); 
    }
    else if ($mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->fetch_array()["auth_code"] != strval(0))
    {
        print("{\"error\":{\"code\":10,\"message\":\"$error_messages_10\"}}"); 
    }
    else if (hash('sha256', $session) != $mysqli->query("SELECT * FROM users WHERE login = \"$login\"")->fetch_array()["session"] )
    {
        print("{\"error\":{\"code\":4,\"message\":\"$error_messages_4\"}}"); 
    }
    else
    {
        print("{\"error\":{\"code\":0,\"message\":\"\"}}"); 
    }
}

else if ($action == global_search_timetable)
{
    {
        $q = $mysqli->query("SELECT timetables.id, timetables.name FROM timetables ORDER BY popularity DESC LIMIT 0, 25");
        while($e=$q->fetch_assoc())
            $output[]=$e;
        $k = "{\"timeTables\":".json_encode($output,JSON_UNESCAPED_UNICODE).",\"error\":{\"code\":0,\"message\":\"\"}}";
        print($k);
    }
}


$mysqli->close();
?>