

<!DOCTYPE html>
<html>

<head>
    <title>Test</title>
    <meta charset="UTF8">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <table class="table">
        <tr class="header">
            <th>№</th>
            <th>Название проверки</th>
            <th>Статус</th>
            <th>Состояние/рекомендации</th>
            <th>Текущее состояние</th>
        </tr>
        <tr>
            <td rowspan="2" class="number">1</td>
            <td rowspan="2">Проверка наличия файла robots.txt</td>
            <td rowspan="2" class="<?= $test[0]; ?>"><?= $test[1];?></td>
            <td>Состояние</td>
            <td><?= $test[2];?></td>
        </tr>
        <tr>            
            <td>Рекомендации</td>
            <td><?= $test[3];?></td>
        </tr>
        <tr>
            <td rowspan="2" class="number">2</td>
            <td rowspan="2">Проверка указания директивы Host</td>
            <td rowspan="2" class="<?= $test1[0]; ?>"><?= $test1[1];?></td>
            <td>Состояние</td>
            <td><?= $test1[2];?></td>
        </tr>
        <tr>            
            <td>Рекомендации</td>
            <td><?= $test1[3];?></td>
        </tr>
        <tr>
            <td rowspan="2" class="number">3</td>
            <td rowspan="2">Проверка количества директив Host, прописанных в файле</td>
            <td rowspan="2" class="<?= $test2[0]; ?>"><?= $test2[1];?></td>
            <td>Состояние</td>
            <td><?= $test2[2];?></td>
        </tr>
        <tr>            
            <td>Рекомендации</td>
            <td><?= $test2[3];?></td>
        </tr>
        <tr>
            <td rowspan="2" class="number">4</td>
            <td rowspan="2">Проверка размера файла robots.txt</td>
            <td rowspan="2" class="<?= $test3[0]; ?>"><?= $test3[1];?></td>
            <td>Состояние</td>
            <td><?= $test3[2];?></td>
        </tr>
        <tr>            
            <td>Рекомендации</td>
            <td><?= $test3[3];?></td>
        </tr>
        <tr>
            <td rowspan="2" class="number">5</td>
            <td rowspan="2">Проверка указания директивы Sitemap</td>
            <td rowspan="2" class="<?= $test4[0]; ?>"><?= $test4[1];?></td>
            <td>Состояние</td>
            <td><?= $test4[2]; ?></td>
        </tr>
        <tr>            
            <td>Рекомендации</td>
            <td><?= $test4[3]; ?></td>
        </tr>
        <tr>
            <td rowspan="2" class="number">6</td>
            <td rowspan="2">Проверка кода ответа сервера для файла robots.txt</td>
            <td rowspan="2" class="<?= $test5[0]; ?>"><?= $test5[1];?></td>
            <td>Состояние</td>
            <td><?= $test5[2];?></td>
        </tr>
        <tr>            
            <td>Рекомендации</td>
            <td><?= $test5[3];?></td>
        </tr>
    </table>
</body>

</html>