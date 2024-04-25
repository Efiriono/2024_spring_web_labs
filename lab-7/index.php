<!DOCTYPE html>
<html>
<head>
  <title>Список заданий</title>
</head>
<body>
  <!-- #1 -->
  <h1>Задание 1</h1>
  <form method="post">
    Введите температуру в градусах Цельсия: <input type="text" name="celsius" required>
    <input type="submit" value="Преобразовать">
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["celsius"])) {
      $celsius = $_POST["celsius"];
      $fahrenheit = ($celsius * 9/5) + 32;
      echo "Температура в градусах Фаренгейта: " . $fahrenheit;
    } else {
      echo "Пожалуйста, введите температуру в градусах Цельсия.";
    }
  }
  ?>
  <br>
  <br>
  <!-- #2 -->
  <h1>Задание 2</h1>
  <form method="post">
    Введите число: <input type="text" name="number1" required>
    <input type="submit" value="Вычислить факториал">
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["number1"])) {
    $number1 = $_POST["number1"];
    $factorial = 1;
    for ($i = 1; $i <= $number1; $i++) {
      $factorial *= $i;
    }
    echo "Факториал числа " . $number1 . " равен " . $factorial;
  }
  ?>
  <br>
  <!-- #3 -->
  <h1>Задание 3</h1>
  <form method="post">
    Введите число: <input type="text" name="number">
    <input type="submit" value="Найти делители">
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    echo "Делители числа " . $number . ": <br>";
    for ($i = 1; $i <= $number; $i++) {
      if ($number % $i == 0) {
        echo $i . " <br>";
      }
    }
  }
  ?>
  <!-- #4 -->
  <h1>Задание 4</h1>
  <form method="post">
    Введите первое число: <input type="text" name="number2">
    Введите второе число: <input type="text" name="number3">
    <input type="submit" value="Найти общие делители">
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number2 = $_POST["number2"];
    $number3 = $_POST["number3"];
    echo "Общие делители чисел " . $number2 . " и " . $number3 . ": <br>";
    $commondivisors = array();
    for ($j = 1; $j <= min($number2, $number3); $j++) {
      if ($number2 % $j == 0 && $number3 % $j == 0) {
        $commondivisors[] = $j;
      }
    }
    echo implode(", ", $commondivisors);
  }
  ?>
  <!-- #5 -->
  <h1>Задание 5</h1>
  <form method="post">
    Введите a: <input type="text" name="a"><br>
    Введите b: <input type="text" name="b"><br>
    Введите c: <input type="text" name="c"><br>
    <input type="submit" value="Найти корни уравнения">
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $d = $b*$b - 4*$a*$c;
    if ($d > 0) {
      $x1 = (-$b + sqrt($d)) / (2*$a);
      $x2 = (-$b - sqrt($d)) / (2*$a);
      echo "Корни уравнения: x1 = " . $x1 . ", x2 = " . $x2 . "<br>";
    } elseif ($d == 0) {
      $x = -$b / (2*$a);
      echo "Уравнение имеет один корень: x = " . $x . "<br>";
    } else {
      echo "Уравнение не имеет действительных корней <br>";
    }
  }
  ?>
  <!-- #6 -->
  <h1>Задание 6</h1>
  <form method="post">
    Введите первое число: <input type="text" name="num1"><br>
    Введите второе число: <input type="text" name="num2"><br>
    Введите третье число: <input type="text" name="num3"><br>
    <input type="submit" value="Проверить">
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    $a = min($num1, $num2, $num3);
    $c = max($num1, $num2, $num3);
    $b = ($num1 + $num2 + $num3) - ($a + $c);
    if ($a * $a + $b * $b == $c * $c) {
      echo "Это тройка Пифагора <br>";
    } else {
      echo "Это не тройка Пифагора <br>";
    }
  }
  ?>
  <!-- #7 -->
  <h1>Задание 7</h1>
  <form method="post">
    Введите дату рождения в формате 'дд.мм.гггг': <input type="text" name="dob" placeholder="дд.мм.гггг" required>
    <input type="submit" value="Рассчитать">
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Проверка наличия данных в $_POST
    if (!empty($_POST["dob"])) {
      $dob = $_POST["dob"];
      // Проверка корректности формата даты
      if (preg_match('/^(\d{2})\.(\d{2})\.(\d{4})$/', $dob, $matches)) {
        $day = $matches[1];
        $month = $matches[2];
        $year = $matches[3];
        // Проверка существования даты рождения
        if (checkdate($month, $day, $year)) {
          $currentYear = date('Y');
          $nextBirthday = new DateTime("$year-$month-$day");
          // Установка года следующего дня рождения
          if ($nextBirthday < new DateTime(date('Y-m-d'))) {
            $nextBirthday->modify("+1 year");
          }
          $daysUntilBirthday = $nextBirthday->diff(new DateTime(date('Y-m-d')))->format("%a");
          echo "До вашего дня рождения осталось $daysUntilBirthday дней";
        } else {
          echo "Введена некорректная дата рождения.";
        }
      } else {
        echo "Некорректный формат даты. Пожалуйста, введите дату в формате 'дд.мм.гггг'.";
      }
    } else {
      echo "Пожалуйста, введите вашу дату рождения.";
    }
  }
  ?>
  <!-- #8 -->
  <form method="post">
    <textarea name="text" rows="4" cols="50"></textarea><br>
    <input type="submit" value="Подсчитать">
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];
    $wordCount = str_word_count($text);
    $charCount = strlen($text);
    echo "Количество слов: " . $wordCount . "<br>";
    echo "Количество символов: " . $charCount . "<br>";
  }
  ?>
  <!-- #9 -->
  <form method="post">
    <textarea name="text" rows="4" cols="50"></textarea><br>
    <input type="submit" value="Подсчитать">
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];
    $text = str_replace(' ', '', $text);
    $chars = count_chars($text, 1);
    $totalChars = strlen($text);
    foreach ($chars as $char => $count) {
      $percentage = ($count / $totalChars) * 100;
      echo "Символ '" . chr($char) . "' встречается в тексте с процентом " . number_format($percentage, 2) . "%<br>";
    }
  }
  ?>
</body>
</html>
