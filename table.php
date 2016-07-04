<?php

$url = $_POST['url'];

error_reporting(0);

// Проверка наличия файла robots.txt

$test = array();

if(!$file = fopen("$url/robots.txt", "r")) {
    $test[] = 'red';
    $test[] = 'Ошибка';
    $test[] = 'Файл robots.txt отсутствует';
    $test[] = 'Программист: Создать файл robots.txt и разместить его на сайте.';    
    
} else {    
    $test[] = 'green';
    $test[] = 'Ok';
    $test[] = 'Файл robots.txt присутствует';
    $test[] = 'Доработки не требуются';
    fclose($file);
}


// Проверка наличия директивы Host

$robots = file("$url/robots.txt");
$test1 = array();
$counter = 0;

$test1[] = 'red';
$test1[] = 'Ошибка';
$test1[] = 'В файле robots.txt не указана директива Host';
$test1[] = 'Программист: Для того, чтобы поисковые системы знали, какая версия сайта является основных зеркалом, необходимо прописать адрес основного зеркала в директиве Host. В данный момент это не прописано. Необходимо добавить в файл robots.txt директиву Host. Директива Host задётся в файле 1 раз, после всех правил.';

foreach ($robots as $key=>$val) {
             $str = explode(": ",$val);
             if ($str[0] == 'Host') {                
                $test1[0] = 'green';
                $test1[1] = 'Ok';
                $test1[2] = 'Директива Host указана';
                $test1[3] = 'Доработки не требуются';
                $counter += 1;                                           
             }                                    
 }


$test2 = array();

if ($counter == 1) {
    $test2[] = 'green';
    $test2[] = 'Ok';
    $test2[] = 'В файле прописана 1 директива Host';
    $test2[] = 'Доработки не требуются';
} else if ($counter > 1) {
    $test2[] = 'red';
    $test2[] = 'Ошибка';
    $test2[] = 'В файле прописано несколько директив Host';
    $test2[] = 'Программист: Директива Host должна быть указана в файле толоко 1 раз. Необходимо удалить все дополнительные директивы Host и оставить только 1, корректную и соответствующую основному зеркалу сайта';
}

// Проверка размера файла robots.txt

$filename = "$url/robots.txt";
$fh = fopen($filename, "r");
$fsize = 0;
while(($str = fread($fh, 1024)) != null) $fsize += strlen($str);

$test4 = array();

$fsize /= 1024;

if ( $fsize <= 32 ) {
    $test3[] = 'green';
    $test3[] = 'Ok';
    $test3[] = 'Размер файла robots.txt составляет '.$fsize.' Кб, что находится в пределах допустимой нормы';
    $test3[] = 'Доработки не требуются';
} else {
    $test3[] = 'red';
    $test3[] = 'Ошибка';
    $test3[] = 'Размер файла robots.txt составляет '.$fsize.' Кб, что превышает допустимую норму';
    $test3[] = 'Программист: Максимально допустимый размер файла robots.txt составляем 32 кб. Необходимо отредактировть файл robots.txt таким образом, чтобы его размер не превышал 32 Кб';
}


// Проверка наличия директивы Sitemap

$test4 = array();

$test4[] = 'red';
$test4[] = 'Ошибка';
$test4[] = 'В файле robots.txt не указана директива Sitemap';
$test4[] = 'Программист: Добавить в файл robots.txt директиву Sitemap';

foreach ($robots as $key=>$val) {
             $str = explode(": ",$val);
             if ($str[0] == 'Sitemap') {                
                $test4[0] = 'green';
                $test4[1] = 'Ok';
                $test4[2] = 'Директива Sitemap указана';
                $test4[3] = 'Доработки не требуются';                                                       
             }                                    
 }


// Код ответа сервера

$answer = get_headers($url);

$test5 = array();

if ($answer[0] == 'HTTP/1.1 200 OK') {    
    $test5[] = 'green';
    $test5[] = 'Ok';
    $test5[] = 'Файл robots.txt отдаёт код ответа сервера 200';
    $test5[] = 'Доработки не требуются';

} else {    
    $test5[] = 'red';
    $test5[] = 'Ошибка';
    $test5[] = 'При обращении к файлу robots.txt сервер возвращает код ответа: '.$answer[0] ;
    $test5[] = 'Программист: Файл robots.txt должны отдавать код ответа 200, иначе файл не будет обрабатываться. Необходимо настроить сайт таким образом, чтобы при обращении к файлу sitemap.xml сервер возвращает код ответа 200';

}

require_once("test.php");