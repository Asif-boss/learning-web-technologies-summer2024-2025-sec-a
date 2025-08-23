<!DOCTYPE html>
<html>
<head>
    <title>PHP Assessment Tasks</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f9fc;
            padding: 20px;
        }
        .task {
            background-color: #ffffff;
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            border-left: 5px solid #007BFF;
        }
        h2 {
            color: #007BFF;
        }
        code {
            background: #f1f1f1;
            padding: 3px 6px;
            border-radius: 3px;
            font-family: monospace;
        }
    </style>
</head>
<body>

    <h1>PHP Assessment Tasks</h1>

    <!-- Task 1 -->
    <div class="task">
        <h2>Task 1: Area & Perimeter of a Rectangle</h2>
        <?php
            $length = 10;
            $width = 5;
            $area = $length * $width;
            $perimeter = 2 * ($length + $width);
            echo "Length = $length<br>";
            echo "Width = $width<br>";
            echo "Area = $area<br>";
            echo "Perimeter = $perimeter";
        ?>
    </div>

    <!-- Task 2 -->
    <div class="task">
        <h2>Task 2: Calculate VAT (15%)</h2>
        <?php
            $amount = 200;
            $vat = $amount * 0.15;
            echo "Amount = $amount<br>";
            echo "VAT (15%) = $vat";
        ?>
    </div>

    <!-- Task 3 -->
    <div class="task">
        <h2>Task 3: Check if a Number is Odd or Even</h2>
        <?php
            $number = 7;
            echo "Number = $number<br>";
            if ($number % 2 == 0) {
                echo "$number is Even";
            } else {
                echo "$number is Odd";
            }
        ?>
    </div>

    <!-- Task 4 -->
    <div class="task">
        <h2>Task 4: Find the Largest of Three Numbers</h2>
        <?php
            $a = 15;
            $b = 25;
            $c = 20;
            echo "Numbers: $a, $b, $c<br>";
            if ($a >= $b && $a >= $c) {
                echo "$a is the largest.";
            } elseif ($b >= $a && $b >= $c) {
                echo "$b is the largest.";
            } else {
                echo "$c is the largest.";
            }
        ?>
    </div>

    <!-- Task 5 -->
    <div class="task">
        <h2>Task 5: Print All Odd Numbers Between 10 and 100</h2>
        <?php
            for ($i = 10; $i <= 100; $i++) {
                if ($i % 2 != 0) {
                    echo "$i ";
                }
            }
        ?>
    </div>

    <!-- Task 6 -->
    <div class="task">
        <h2>Task 6: Search Element in Array</h2>
        <?php
            $searchValue = 25;
            $numbers = array(10, 20, 30, 25, 40);
            $found = false;
            echo "Searching for $searchValue in array: [" . implode(", ", $numbers) . "]<br>";
            foreach ($numbers as $value) {
                if ($value == $searchValue) {
                    $found = true;
                    break;
                }
            }
            if ($found) {
                echo "$searchValue found in the array.";
            } else {
                echo "$searchValue not found in the array.";
            }
        ?>
    </div>

    <!-- Task 7 -->
    <div class="task">
        <h2>Task 7: Print Shapes Using Nested Loops</h2>
        <?php
            // Triangle with *
            for($i=1;$i<=3;$i++){
                for($j=1;$j<=$i;$j++){
                    echo "* ";
                }
                echo "<br>";
            }

            echo "<br>";

            // Numbers
            $num=1;
            for($i=1;$i<=3;$i++){
                for($j=1;$j<=$i;$j++){
                    echo $num++ . " ";
                }
                echo "<br>";
            }

            echo "<br>";

            // Alphabets
            $char='A';
            for($i=1;$i<=3;$i++){
                for($j=1;$j<=$i;$j++){
                    echo $char++ . " ";
                }
                echo "<br>";
            }
            ?>
    </div>

        <!-- Task 8 -->
    <div class="task">
        <h2>Task 8: Declare a 2D Array and Print Shapes</h2>
        <?php
            $shapes = array(
                array(1, 2, 3),
                array(12, 1, 2),
                array('A', 'B', 'C'),
                array('D', 'E', 'F')
            );

            echo "The array to declare:<br>";
            foreach ($shapes as $row) {
                echo implode(" ", $row) . "<br>";
            }

            echo "<br>Shapes to print:<br>";
            for ($i = 0; $i < count($shapes); $i++) {
                for ($j = 0; $j < count($shapes[$i]); $j++) {
                    echo $shapes[$i][$j] . " ";
                }
                echo "<br>";
            }
        ?>
    </div>
</body>
</html>
