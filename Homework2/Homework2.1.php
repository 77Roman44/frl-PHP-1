
<html>
    <head>
        <title>PHP-1</title>
    </head>
    <body>
    <h1> PHP </h1>
    <h2>урок 2</h2>
        <p>Таблица истинности</p>
    <hr />
    <table border="1">
        <caption>И</caption>
        <tr>
            <td></td>
            <th>0</th>
            <th>1</th>
        </tr>
        <tr>
            <th>0</th>
            <td><?php echo (int) (false && false); ?></td>
            <td><?php echo (int) (false && true); ?></td>
        </tr>
        <tr>
            <th>1</th>
            <td><?php echo (int) (true && false); ?></td>
            <td><?php echo (int) (true && true); ?></td>
        </tr>
    </table>
    <table border="1">
        <caption>ИЛИ</caption>
        <tr>
            <td></td>
            <th>0</th>
            <th>1</th>
        </tr>
        <tr>
            <th>0</th>
            <td><?php echo (int) (false || false); ?></td>
            <td><?php echo (int) (false || true); ?></td>
        </tr>
        <tr>
            <th>1</th>
            <td><?php echo (int) (true || false); ?></td>
            <td><?php echo (int) (true || true); ?></td>
        </tr>
    </table>
    <table border="1">
        <caption>исключающая ИЛИ</caption>
        <tr>
            <td></td>
            <th>0</th>
            <th>1</th>
        </tr>
        <tr>
            <th>0</th>
            <td><?php echo (int) (false xor false); ?></td>
            <td><?php echo (int) (false xor true); ?></td>
        </tr>
        <tr>
            <th>1</th>
            <td><?php echo (int) (true xor false); ?></td>
            <td><?php echo (int) (true xor true); ?></td>
        </tr>
    </table>

    </body>
</html>