<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 50 Exam</title>

    <!-- links -->

</head>

<body>
    <div class="container">
        <h1>PHP 50 Examples</h1>
        <?php
        // Example: Basic PHP Syntax
        // 1
        $data = "hello";
        echo chunk_split($data, 2, "...");
        echo "<br>";

        // 2
        $text = "GTA Five";
        echo "I love to play $text!";

        // 3
        $a = 5;
        $b = 10;
        echo "<br>";
        echo "The sum of $a and $b is " . ($a + $b) . ".";
        echo "<br>";

        // 4
        $x = 10;
        var_dump($x);
        echo "<br>";

        // 5
        function test()
        {
            static $count = 0;
            echo "This function has been called $count times.<br>";
            $count++;
        }
        test();
        test();
        test();

        // 6
        $p = 5;
        function test2()
        {
            // echo "The value of p is $p.<br>";
        }
        test2();
        echo "This value of p is $p.<br>";

        // 7
        print ("<h2>PHP is Fun!</h2>");
        print ("Hello World!<br>");

        // 8
        echo strpos("For a complete reference of all string functions, go to our complete", "string") . "<br>";

        // 9
        $food = "apple";
        echo strtoupper($food) . "<br>";
        echo strtolower($food) . "<br>";

        // 10
        $name = "MD Ariful Islam";
        echo str_replace("Ariful Islam", "MD Ariful Islam", $name) . "<br>";

        // 11
        $x = "HTML";
        $y = "CSS";
        $z = $x . " " . $y;
        echo $z . "<br>";

        // 12
        $x = "I'm a PHP\ndeveloper";
        echo $x . "<br>";

        // 13
        $x = 55555;
        var_dump($x);
        echo "<br>";

        // 14
        $x = 55555;
        var_dump(is_int($x));
        echo "<br>";

        // 15
        $x = 55555.55;
        var_dump($x);
        echo "<br>";

        // 16
        $x = 55555.55;
        var_dump(is_float($x));
        echo "<br>";

        // 17
        $x = 1.5e3;
        var_dump($x);
        echo "<br>";

        // 18
        $X = acos(8);
        var_dump($X);
        echo "<br>";

        // 19
        $x = 5224.45245;
        $int_cast = (int) $x;
        echo $int_cast . "<br>";

        // 20
        $a = 5.95;
        $a = (string) $a;
        echo $a . "<br>";

        // 21
        echo (pi() . "<br>");
        echo (M_PI . "<br>");

        // 22
        echo (abs(-5) . "<br>");
        echo (abs(5) . "<br>");

        // 23
        echo (sqrt(16) . "<br>");
        echo (sqrt(25) . "<br>");

        // 24
        echo (round(0.60) . "<br>");
        echo (round(0.49) . "<br>");

        // 25
        echo (ceil(0.60) . "<br>");

        // 26
        echo (floor(0.60) . "<br>");
        echo (floor(0.49) . "<br>");

        // 27
        echo (rand(1, 10) . "<br>");
        echo (rand(1, 10) . "<br>");

        // 28
        echo (min(0, 150, 30, 20, -8, -200) . "<br>");
        echo (max(0, 150, 30, 20, -8, -200) . "<br>");

        // 29
        echo (min(array(0, 150, 30, 20, -8, -200)) . "<br>");
        echo (max(array(0, 150, 30, 20, -8, -200)) . "<br>");

        // 30
        echo (count(array(0, 150, 30, 20, -8, -200)) . "<br>");
        echo (count(array("a", "b", "c")) . "<br>");

        // 31
        echo (sizeof(array(0, 150, 30, 20, -8, -200)) . "<br>");
        echo (sizeof(array("a", "b", "c")) . "<br>");

        // 32
        echo (rand(1, 10) . "<br>");

        // 33
        define("cars", ["Volvo", "BMW", "Toyota"]);
        echo cars[0] . "<br>";

        // 34
        $x = 5;
        $y = 10;
        $z = $x / $y;
        echo $z . "<br>";

        // 35
        $x = 5;
        $y = 10;
        $z = $x ** $y;
        echo $z . "<br>";

        // 36
        $x = 5;
        $y = 10;
        $z = $x % $y;
        echo $z . "<br>";

        // 37
        $x = 5;
        $y = 10;
        $z = $x += $y;
        echo $z . "<br>";

        // 38
        $a = 5;
        $b = 10;
        $c = $a != $b;
        echo $c . "<br>";

        // 39
        $a = 5;
        ++$a;
        echo $a . "<br>";

        // 40
        $a = 5;
        $b = 10;
        $c = $a > $b ? "a is greater than b" : "b is greater than a";
        echo $c . "<br>";

        // 41
        $a = 5;
        $b = 10;
        $c = $a <=> $b;
        echo $c . "<br>";

        // 42
        $a = 5;
        $b = 10;
        $c = $a == $b ? "a is equal to b" : "a is not equal to b";
        echo $c . "<br>";

        // 43
        $a = 5;
        $b = 10;
        $c = $a === $b ? "a is identical to b" : "a is not identical to b";
        echo $c . "<br>";

        // 44
        $a = 5;
        $b = 10;
        $c = $a !== $b ? "a is not identical to b" : "a is identical to b";
        echo $c . "<br>";

        // 45
        $a = 5;
        $b = 10;
        $c = $a != $b ? "a is not equal to b" : "a is equal to b";
        echo $c . "<br>";

        // 46
        $a = 5;
        $b = 10;
        $c = $a < $b ? "a is less than b" : "a is not less than b";
        echo $c . "<br>";

        // 47
        $a = 5;
        $b = 10;
        $c = $a > $b ? "a is greater than b" : "a is not greater than b";
        echo $c . "<br>";

        // 48
        if (10 > 5) {
            echo "10 is greater than 5<br>";
        } else {
            echo "10 is not greater than 5<br>";
        }

        // 49
        $t = 28;
        if ($t < 20) {
            echo "It's really cold outside!<br>";
        } elseif ($t >= 20 && $t < 30) {
            echo "It's warm outside!<br>";
        } else {
            echo "It's really hot outside!<br>";
        }

        // 50
        $a = 5;
        if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
            echo "$a is a number between 2 and 7";
        } else {
            echo "$a is not a number between 2 and 7";
        }
        // 51
        if ($a == 2 && $a == 3 && $a == 4 && $a == 5 && $a == 6 && $a == 7) {
            echo "$a is a number between 2 and 7";
        } else {
            echo "$a is not a number between 2 and 7";
        }
        // 52
        if ($a == 2 xor $a == 3 xor $a == 4 xor $a == 5 xor $a == 6 xor $a == 7) {
            echo "$a is a number between 2 and 7";
        } else {
            echo "$a is not a number between 2 and 7";
        }
        // 53
        if ($a != 2 && $a != 3 && $a != 4 && $a != 5 && $a != 6 && $a != 7) {
            echo "$a is not a number between 2 and 7";
        } else {
            echo "$a is a number between 2 and 7";
        }
        // 54
        if ($a != 2 || $a != 3 || $a != 4 || $a != 5 || $a != 6 || $a != 7) {
            echo "$a is not a number between 2 and 7";
        } else {
            echo "$a is a number between 2 and 7";
        }
        // 55
        if ($a != 2 xor $a != 3 xor $a != 4 xor $a != 5 xor $a != 6 xor $a != 7) {
            echo "$a is not a number between 2 and 7";
        } else {
            echo "$a is a number between 2 and 7";
        }
        ?>
        <br><br>
        <h2>PHP Form Validation:</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Name: <input type="text" name="name">
            <br><br>
            E-mail: <input type="text" name="email">
            <br><br>
            Website: <input type="text" name="website">
            <br><br>
            Make a Comment on: <textarea name=" make a comment on" rows="5" cols="40"></textarea>
            <br><br>
            Gender:
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        ?>
    </div>
</body>

</html>