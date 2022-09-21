<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <!-- Displaying Data -->
    <?php
        echo "Welcome to PHP!";
        echo("Second Line");
        print("I'm printed");
        print "I'm printed too!";
    ?>
    <?= "Another way to display data" ?>

    <!-- HTML Elements -->
    <?php
        echo "<h1>Header 1</h1>";
        echo "<h2>Header 1</h2>";
        echo "<h3>Header 1</h3>";
        echo "<h4>Header 1</h4>";
        echo "<h5>Header 1</h5>";
        echo "<h6>Header 1</h6>";
        echo "<p>This is a paragraph</p>";
        echo "<br>";
        echo "<br> <br> <br>";
        echo "<ul> <li>item 1</li> <li>item 2</li </ul>";
    ?>

    <!-- Variables, Constants & Data Types -->
    <?php
        $name = "ahmed";
        $age = 15;
        $salary = 1.25;
        $children = array("ali", 'rana', 'somebody');
        $siblings = ['attia', 12, 13, ['another sibling']];
        $preferences = [
            "mode" => 'dark',
            'brightness' => 3,
            "colors" => ['red', 'green', 'blue'],
            'additional' => [
                "key1" => "value1",
                "key2" => "value2"
            ] 
        ];
        $current_user = null;
        $myObj = (object) $preferences;

        echo gettype($name);
        echo "<br>";
        echo gettype($age);
        echo "<br>";
        echo gettype($salary);
        echo "<br>";
        echo gettype($children);
        echo "<br>";
        echo gettype($siblings);
        echo "<br>";
        echo gettype($siblings[2]);
        echo "<br>";
        echo gettype($preferences);
        echo "<br>";
        echo gettype($preferences['mode']);
        echo "<br>";
        echo gettype($preferences['colors']);
        echo "<br>";
        echo gettype($preferences['additional']);
        echo "<br>";
        echo gettype($current_user);
        echo "<br>";
        echo gettype($myObj);

        $age = "twelve";
        echo gettype($age);

        echo PHP_INT_MAX;
        echo "<br>";
        echo PHP_INT_MIN;

        define("YEAR", 2022, true);
        echo YEAR;
        echo YeAr;
        // Constants are global
    ?>

    <!-- Operators -->
    <!-- Math +-*/%** -->
    <?php
        echo 10 - 5 + 3 / 2 * 4;
        echo 9 % 2;
        echo 2 ** 8;
        echo 1 + "2";
        echo 1 + "2 apples";
        echo 1 + "apples 2";
    ?>

    <!-- Logical -->
    <?php
        echo tRue && truE;
        echo FaLse || truE;
        echo !false;
        echo true and !false or false;
    ?>
    
    <!-- Relational <!===!> -->
    <?php
        echo 5 > 0 && 0 < 5;
        echo 3 >= 3 && 4 <= 4;
        echo 8 == 8;
        echo 8 == "8";
        echo 8 === "8";
        echo 2 != 2;
        echo 2 != '2';
        echo 2 !== '2';
        echo 4 <> 4;
    ?>

    <!-- Conditional Operators -->
    <?php
        $age = 10;
        $allow_withdraw = $age > 20 ? true : false;

        $user_input = null;
        $age = $user_input ?? -1;
    ?>


    <!-- String operations, but wait a sec -->
    <form action="" method="GET">
        <input type="text" name="myinput">
        <input type="submit" value="submit">
    </form>

    <?php
        $input = $_GET['myinput'] ?? "";
        
        echo strlen($input);
        echo "<br>";
        echo str_word_count($input);
        echo "<br>";
        echo substr($input, 1, 5);
        echo "<br>";
        echo strrev($input);
        echo "<br>";
        echo strpos("what is this?", "is");
        echo "<br>";
        echo strpos("What Is This?", "is");
        echo "<br>";
        echo stripos("What Is This?", "is");
        echo "<br>";
        echo str_replace($input, "ahmed", "mazen");
        echo "<br>";
        echo "Welcome Eng " . $input . " to PHP";
        echo "<br>";
        echo "Welcome Eng $input";
        echo "<br>";
        echo 'Welcome Eng $input';
    ?>



    <!-- Operations on numbers  -->
    <?php
        echo min(2, 4);
        echo "<br>";
        echo max(2, 4, 6, 8);
        echo "<br>";
        echo abs(-50);
        echo "<br>";
        echo sqrt(25);
        echo "<br>";
        echo rand(10, 100);
        echo "<br>";
    ?>

    <!-- Conditionals & Selections -->
    <?php
        $available_cash = 1000;
        $withdrawal_amount = $input;
        if($withdrawal_amount < $available_cash) {
            echo "SUCCESS <br>";
        }
        else if($withdrawal_amount == $available_cash) {
            echo "You can't withdraw 100% of your cash, we need 3mola <br>";
        }
        else {
            echo "FAILED: your cash limit is $available_cash";
        }


        if("ahmed") 
            echo "ahmed is true <br>";
        
        if("")
            echo "'' is true <br>";
        if(5)
            echo '5 is true <br>';
        if(0)
            echo '0 is true <br>';
        if([2,4,-1,0])
            echo '[2,4,-1,0] is true <br>';
        if([])
            echo '[] is true <br>';
    ?>

    <form action="" method="get">
        <input type="radio" name='choice' value='1'>Cup 1
        <br>
        <input type="radio" name='choice' value='2'>Cup 2
        <br>
        <input type="radio" name='choice' value='3'>Cup 3
        <br>
        <input type="submit" value="submit">
        <br>
    </form>

    <?php
        $correct_ans = rand(1,3);
        $answer = $_GET['choice'] ?? -1;

        if($answr == $correct_ans)
            echo "You got the coin <br>";
        else
            echo "INcorrect, Try again <br>";
    ?>

    <form action="" method="get">
        <input type="radio" value='1'>Male
        <br>
        <input type="radio" value='2'>Female
        <br>
        <input type="submit" value="submit">
        <br>
    </form>

    <?php
        $gender = $_GET["??"] ?? -1;
        switch($gender){
            case 1:
                echo "MALE";
                break;
            case 2:
                echo "FEMALE";
                break;
            default:
                echo "Nope";
        }
    ?>

    <!-- Loops & Iterations -->
    <?php
        for($i = 1; $i <= 6; $i++) {
            echo "<h$i>H $i</h$i>";
        }
        // While, Do While, For As

        echo "<ol>";
        $i = 5;
        while($i < $input) {
            echo "<li>$i</li>";
        }
        echo "</ol>";

        $i = 5;
        echo "<ul>";
        do {
            echo "<li>$i</li>";
        } while($i < $input);
        echo "</ul>";

        $products_ids = explode(",", $input);
        echo "Products to be added to the cart: <br>";
        foreach($products_ids as $p_id) {
            echo "$p_id";
            echo "<br>";
        }
        var_dump($products_ids);
    ?>


    <!-- Arrays -->
    <?php
        // Indexed array
        $product_ids = [2,4,5,13,20];
        $user_ids = array(1,4,12);

        echo $product_ids[2];
        $user_ids[2] = 999;
        var_dump($user_ids);

        echo count($user_ids);

        array_push($user_ids, -20, -30);
        var_dump($user_ids);
        array_pop($product_ids);
        var_dump($product_ids);

        unset($product_ids[0]);
        var_dump($product_ids);

        $all_ids = array_merge($product_ids, $user_ids);
        $more_than_ten = array_filter($all_ids, function($item){
            return $item > 10;
        });
        var_dump($more_than_ten);

        $squared = array_map($all_ids, function($item){
            return $item ** 2;
        });
        var_dump($squared);

        $value = array_search($all_ids, -100);
        echo $value;
        echo "<br>";

        // Associative Arrays
        $user = [
            "email" => "ahmed@gmail.com",
            "age" => 24,
            "avatar" => "image.png"
        ];
        echo $user['email'];
        $user['age'] = 29;

        $user['password'] = "abc123";
        var_dump($user);

        unset($user['age']);

        var_dump($user);

        $keys = array_keys($user);
        $values = array_values($user);
        var_dump($keys);
        var_dump($values);

    ?>

    <!-- Functions -->
    <?php
        // Function to validate password
        function validate_password($user_password) {
            $password = "12345";
            return $user_password == $password;
        }
        if(validate_password($input)) {
            echo "Welcome to Page";
        }
        else {
            echo "Incorrect password";
        }

        // in PHP 7 , data types can be added to parameters
        function add(int $a, int $b) {
            return $a + $b;
        }
        echo add(2, 3);
        echo add("one", "two");
        echo add("1", "1");

        // declare(strict_types=1)

        // parameter default value
        function root(int $x, int $pow = 2){
            return x ** pow;
        }
        echo root(2,2);
        echo root(2);
        echo root(2,3);

        // return type
        function login(string $email, string $password) : array {
            if ($email == "someone@gmail.com" && $password == "123")
                $user = ['name' => "someone", "age" => 20];
            else
                $user = [];
            return $user;
        }
        $result = login("someone@gmail.com", $input);
        var_dump($result);

        // Pass arguments by reference
        function update_by_reference(&$x) {
            $x = 0;
        }
        function update_by_value($x) {
            $x = 0;
        }
        $num = 5;
        update_by_value($num);
        echo "Update by value: $num";
        echo "<br>";
        update_by_reference($num);
        echo "Update by reference: $num";
        echo "<br>";
    ?>
</body>
</html>