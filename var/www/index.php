
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Hello World!</title>
  </head>
  <body>
<?php
  try {
    $conn = new PDO("mysql:host=my_lemp-mysql;dbname=dev", "root", "tartar2002");

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Подключились к базе.<br>';

    $sql = 'SELECT guest_name FROM guest order by RAND() LIMIT 2';
    
    print "Список из 2 рандомных строк из БД:<br>";
    foreach ($conn->query($sql) as $row) {
        print $row['guest_name'] . "<br>";
    }

    $conn = null;

  }
  catch(PDOException $err) {
    echo "Ошибка: невозможно подключиться: " . $err->getMessage();
  }
?> 
  </body>
</html>

