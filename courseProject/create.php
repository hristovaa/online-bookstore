
<!DOCTYPE html>
<html>
<head>
    <title>Добавете книга</title>
 <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
 
<fieldset>
    <legend>Добавете книга</legend>
 
    <form action="adminfunc.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>Заглавие</th>
                <td><input type="text" name="title" placeholder="Заглавие" /></td>
            </tr>     
            <tr>
                <th>Автор</th>
                <td><input type="text" name="author" placeholder="Автор" /></td>
            </tr>
            <tr>
                <th>Цена</th>
                <td><input type="text" name="price" placeholder="Цена" /></td>
            </tr>
            <tr>
                <td><button type="submit">Запазете промените</button></td>
                <td><a href="adminpage.php"><button type="button">Назад</button></a></td>
            </tr>
        </table>
    </form>
 
</fieldset>
 
</body>
</html>

