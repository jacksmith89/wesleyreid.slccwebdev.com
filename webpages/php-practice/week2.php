<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wesley's Week 2 PHP Exercises</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous" defer></script>
    <style>
        section {
            background-color: lightgray;
            border-radius: 1em;
            padding: 10px;
            margin: 20px 0;
        }
    </style>

</head>

<body>
    <div class="container-fluid my-3">
        <h1 class="display-3 rounded-3 text-bg-primary text-center">PHP Week 2</h1>
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="../../index.php">Main</a>
            <a class="breadcrumb-item" href="../myPHPactivities.php">PHP Exercises</a>
            <span class="breadcrumb-item active" aria-current="page">Active</span>
        </nav>
        <section class="if">
            <h2 class="display-5">1. If Statements</h2>
            <!-- Create a variable that is assigned an integer -->

            <?php $varInt = 5; ?>
            <!-- /******************************************************
         * 1. Create a basic if statement
         * 2. Test if the variable is equal to what it is
         *    currently set to
         * 3. Create an echo statement that sends
         *    "This is TRUE!" within curly brackets
         * 4. Try changing the values of the variable and the
         *    test statement to see when the code runs
         ******************************************************/ -->
            <?php
            echo "Does \$varInt equal 5?<br>";
            if ($varInt == 5) {
                echo "YES, it does!<br>";
            }
            $varInt = 3;
            echo "Does \$varInt equal 5 now?<br>";
            if ($varInt != 5) {
                echo "NO, it does NOT! \$varInt equals ${varInt}!<br>";
            }
            ?>
            <br>
            <h3 class="btn btn-primary" data-bs-toggle="collapse" href="#ifStatements" role="button" aria-expanded="false" aria-controls="collapseExample">Code Example</h3>
            <div class="collapse" id="ifStatements">
                <pre>
        &lt;?php
        echo "Does $varInt equal 5?&ltbr&gt";
        if ($varInt == 5) {
        echo "YES, it does!&ltbr&gt";
        }
        $varInt = 3;
        echo "Does $varInt equal 5 now?&ltbr&gt";
        if ($varInt != 5) {
        echo "NO, it does NOT! \$varInt equals ${varInt}!&ltbr&gt";
        }
        ?>
        </pre>
            </div>
        </section>
        <section class="if-else">
            <h2 class="display-5">2. If/Else Statements</h2>
            <!-- //Create a variable that is assigned an integer
        /******************************************************
         * 1. Create a basic if statement
         * 2. Test if the variable is equal to what it is
         *    currently set to
         * 3. Create an echo statement that sends
         *    "This is TRUE!" within curly brackets after
         *    the condition
         * 4. Add the else clause
         * 5. Create an echo statement that sends
         *    "This is FALSE!" within curly brackets after
         *    the else clause
         * 6. Try changing the values of the variable and
         *    the test statement to see when the code runs
         ******************************************************/ -->
            <?php
            $varInt = 5;
            echo "Does \$varInt equal 5?<br>";
            if ($varInt == 5) {
                echo "YES, it does!<br>";
            } else {
                echo "NO, it does NOT! \$varInt equals ${varInt}!<br>";
            }
            $varInt = 3;
            echo "Does \$varInt equal 5?<br>";
            if ($varInt == 5) {
                echo "YES, it does!<br>";
            } else {
                echo "NO, it does NOT! \$varInt equals ${varInt}!<br>";
            }
            ?>
            <br>
            <h3 class="btn btn-primary" data-bs-toggle="collapse" href="#ifElseStatements" role="button" aria-expanded="false" aria-controls="collapseExample">Code Example</h3>
            <div class="collapse" id="ifElseStatements">
                <pre>
        &lt;?php
        echo "Does \$varInt equal 5?&ltbr&gt";
        if ($varInt == 5) {
            echo "YES, it does!&ltbr&gt";
        } else {
            echo "NO, it does NOT! \$varInt equals ${varInt}!&ltbr&gt";
        }
        $varInt = 3;
        echo "Does \$varInt equal 5?&ltbr&gt";
        if ($varInt == 5) {
            echo "YES, it does!&ltbr&gt";
        } else {
            echo "NO, it does NOT! \$varInt now equals ${varInt}!&ltbr&gt";
        }
        ?>
        </pre>
            </div>
            <br>
            <br>
            <h3 class="display-6">Clock Code</h3>
            <?php
            $t = date("H");
            echo "<p>The hour (of the server) is {$t}, and it will give the following message:</p>";

            if ($t < "10") {
                echo "Good morning!";
            } elseif ($t < "20") {
                echo "Good day!";
            } else {
                echo "Good night!";
            }
            ?>
            <br>
            <br>
            <h3 class="btn btn-primary" data-bs-toggle="collapse" href="#clock" role="button" aria-expanded="false" aria-controls="collapseExample">Code Example</h3>
            <div class="collapse" id="clock">
                <pre>
        &lt;?php
        $t = date("H");
        echo "&ltp&gtThe hour (of the server) is {$t}, and it will give the following message:&lt/p&gt";

        if ($t < "10") {
            echo "Good morning!";
        } else if ($t < "20") {
            echo "Good day!";
        } else {
            echo "Good night!";
        }
        ?>
        </pre>
            </div>
        </section>
        <section class="if-else-if">
            <h2 class="display-5">3. If-Else-If</h2>
            <?php
            //Create a variable that is assigned an integer between 1 and 10
            /******************************************************
             * 1. Create a basic if statement
             * 2. Set the first criteria to test if the variable
             *    is equal to 5
             * 3. Create an echo statement that sends
             *    "The variable is 5." within curly brackets after
             *    the condition
             * 4. Add the elseif clause
             * 5. Set the second criteria to test if the variable
             *    is greater than 5
             * 6. Create an echo statement that sends
             *    "The variable is greater than 5." within curly
             *    brackets after the elseif clause
             * 7. Add the else clause
             * 8. Create an echo statement that sends
             *    "Variable is less than 5." within curly brackets
             *    after the else clause
             * 9. Try changing the values of the variable and the
             *    test statement to see when the code runs
             ******************************************************/
            $x = 5;

            if ($x == 5) {
                echo "The variable is 5.";
            } elseif ($x > 5) {
                echo "The variable is greater than 5.";
            } else {
                echo "Variable is less than 5.";
            }
            ?>
            <br>
            <br>
            <h3 class="btn btn-primary" data-bs-toggle="collapse" href="#ifElseIfStatements" role="button" aria-expanded="false" aria-controls="collapseExample">Code Example</h3>
            <div class="collapse" id="ifElseIfStatements">
                <pre>
        &lt;?php>
        $x = 5;
        
        if ($x == 5) {
            echo "The variable is 5.";
        } elseif ($x > 5) {
            echo "The variable is greater than 5.";
        } else {
            echo "Variable is less than 5.";
        }
        ?>
        </pre>
            </div>
        </section>
        <section class="switch">
            <h2 class="display-5">4. Switch Statements</h2>
            <!-- /*******************************************************
     * 1. Create a switch statement with 3 cases and a 
     *    default area
     * 2. Set the criteria to a number between 1 and 3
     * 3. Set the first three cases to match either 
     *    1, 2, or 3 respectively
     * 4. In each case create an echo statement that sends 
     *    the string "The number is (the number in the case)"
     * 5. Include a break statement after the echo statement 
     *    in each case
     * 6. In the default section, create an echo statement 
     *    that sends the string "The number is not 1, 2, or 3."
     *******************************************************/ -->

            <?php
            $criteria = rand(1, 10);
            switch ($criteria) {
                case 1:
                    echo "The number is 1!";
                    break;
                case 2:
                    echo "The number is 2!";
                    break;
                case 3:
                    echo "The number is 3!";
                    break;
                default:
                    echo "The number isn't 1, 2, or 3! That's as high as I can count!";
            }
            ?>
            <br>
            <br>
            <h3 class="btn btn-primary" data-bs-toggle="collapse" href="#switch" role="button" aria-expanded="false" aria-controls="collapseExample">Code Example</h3>
            <div class="collapse" id="switch">
                <pre>
        &lt;?php
        $criteria = rand(1, 10);
        switch ($criteria) {
            case 1:
                echo "The number is 1!";
                break;
            case 2:
                echo "The number is 2!";
                break;
            case 3:
                echo "The number is 3!";
                break;
            default:
                echo "The number isn't 1, 2, or 3! That's as high as I can count!";
        }

        ?>
        </pre>
            </div>
        </section>
        <section class="while-loops">
            <h2 class="display-5">5. While Loops</h2>
            <!-- //Create a variable that is assigned the integer value of 1
     * 1. Create a basic while loop
     * 2. In the condition, test if the variable is less 
     *    than 10
     * 3. In the code block to be run, do the following 
     *    a. Create an echo statement that sends the string 
     *       "The number is: (the value of the variable)"
     *    b. Add a line break
     *    c. Increment the value assigned to the variable 
     *       up by one 
     *******************************************************/ -->
            <?php
            $loopInt = 1;
            while ($loopInt <= 10) {
                echo "The number is: {$loopInt}";
                echo "<br>";
                $loopInt++;
            }
            ?>

            <br>
            <h3 class="btn btn-primary" data-bs-toggle="collapse" href="#while" role="button" aria-expanded="false" aria-controls="collapseExample">Code Example</h3>
            <div class="collapse" id="while">
                <pre>
        &lt;?php
        $loopInt = 1;
        while ($loopInt <= 10) {
            echo "The number is: {$loopInt}";
            echo "&ltbr&gt";
            $loopInt++;
        }
        ?>
        </pre>
            </div>
        </section>
        <section class="do-while-loops">
            <h2 class="display-5">6. Do-While Loops</h2>
            <!-- //Create a variable that is assigned the integer value of 1
     * 1. Create a basic do statement 
     * 2. In the code block to be run, do the following 
     *    a. Create an echo statement that sends the string 
     *       "The number is: (the value of the variable)"
     *    b. Add a line break
     *    c. Increment the value assigned to the variable 
     *       up by one 
     * 3. Create a while statement
     * 4. In the condition, test if the variable is less 
     *    than 10
     *******************************************************/ -->

            <?php
            $loopInt = 1;
            do {
                echo "The number is: {$loopInt}";
                echo "<br>";
                $loopInt++;
            } while ($loopInt <= 10);
            ?>
            <br>

            <h3 class="btn btn-primary" data-bs-toggle="collapse" href="#doWhile" role="button" aria-expanded="false" aria-controls="collapseExample">Code Example</h3>
            <div class="collapse" id="doWhile">
                <pre>
        &lt;?php
        $loopInt = 1;
        do {
            echo "The number is: {$loopInt}";
            echo "&ltbr&gt";
            $loopInt++;
        } while ($loopInt <= 10);
        ?>
        </pre>
            </div>
        </section>
        <section class="for-loops">
            <h2 class="display-5">7. For Loops</h2>
            <!-- /*******************************************************
     * 1. Create a basic for loop
     * 2. In the condition, 
     *    a. Create a variable and set the value to 1
     *    b. Test if the variable is less than 10
     *    c. Increment the variable up by one
     * 3. In the code block to be run, do the following 
     *    a. Create an echo statement that sends the string 
     *       "The number is: (the value of the variable)"
     *    b. Add a line break
     *******************************************************/ -->
            <?php for ($loopInt = 1; $loopInt <= 10; $loopInt++) {
                echo "The number is: {$loopInt}";
                echo "<br>";
            } ?>
            <br>

            <h3 class="btn btn-primary" data-bs-toggle="collapse" href="#for" role="button" aria-expanded="false" aria-controls="collapseExample">Code Example</h3>
            <div class="collapse" id="for">
                <pre>
        &lt;?php
        for ($loopInt = 1; $loopInt <= 10; $loopInt++) {
            echo "The number is: {$loopInt}";
            echo "&ltbr&gt";
        }
        ?>
        </pre>
            </div>
        </section>
        <section class="for-each-loops">
            <h2 class="display-5">8. For-Each Loops</h2>
            <!-- //Create an array of at least three favorite colors
     * 1. Create an echo statement that sends the string 
     *    "My favorite colors are: <br>"
     * 2. Create a foreach loop, 
     *    a. In the criteria send each item in the array 
     *       to the variable $value
     *    b. In the code block to be run, send the contents 
     *       of the $value variable to the screen
     *    c. Make sure there is a line break
     *******************************************************/ -->
            <?php
            $favColors = ["forest green", "royal purple", "daisy yellow"];

            foreach ($favColors as $value) {
                echo "One of my favorite colors is {$value}! <br>";
            }
            ?>
            <br>

            <h3 class="btn btn-primary" data-bs-toggle="collapse" href="#forEach" role="button" aria-expanded="false" aria-controls="collapseExample">Code Example</h3>
            <div class="collapse" id="forEach">
                <pre>
        &lt;?php
        $favColors = ["forest green", "royal purple", "daisy yellow"];

        foreach ($favColors as $value) {
            echo "One of my favorite colors is {$value}!&ltbr&gt";
        }
        ?>
        </pre>
            </div>
        </section>
        <section class="basic-function">
            <h2 class="display-5">9. Basic Function</h2>
            <?php
            /*******************************************************
             * 1. Create a function named newMsg
             * 2. In the code block, create an echo statement that
             *    will send "Hello World" to the screen
             *******************************************************/
            //Call the function using its name followed by a opening and closing parenthesis
            function newMsg()
            {
                echo "Hello World!";
            }

            newMsg();
            ?>
            <br>
            <br>

            <h3 class="btn btn-primary" data-bs-toggle="collapse" href="#basicFunction" role="button" aria-expanded="false" aria-controls="collapseExample">Code Example</h3>
            <div class="collapse" id="basicFunction">
                <pre>
        &lt;?php
        function newMsg()
        {
            echo "Hello World!";
        }

        newMsg();
        ?>
        </pre>
            </div>
        </section>
        <section class="single-parameter-function">
            <h2 class="display-5">10. Single Parameter Functions</h2>
            <?php
            /*******************************************************
             * 1. Create a function named newGreeting
             * 2. Within the parentheses, add the variable $name as
             *    the parameter to pass into the code block
             * 3. In the code block, create an echo statement that
             *    will send the following  to the screen:
             *    "<h1>Welcome $name</h1><p>Thank you for visiting
             *    my site today.</p>"
             *******************************************************/

            /*******************************************************
             * 1. Call the function using its name followed by a
             *    opening and closing parentheses
             * 2. In the parentheses, add a name that will be sent
             *    into the function
             *******************************************************/
            function newGreeting($name)
            {
                echo "<h4>Welcome $name</h4><p>Thank you for visiting my site today.</p>";
            }

            newGreeting("Jack");
            ?>

            <h3 class="btn btn-primary" data-bs-toggle="collapse" href="#singleFunction" role="button" aria-expanded="false" aria-controls="collapseExample">Code Example</h3>
            <div class="collapse" id="singleFunction">
                <pre>
        &lt;?php
        function newGreeting($name)
        {
            echo "&lth4&gtWelcome $name&lt/h4&gt&ltp&gtThank you for visiting my site today.&lt/p&gt";
        }

        newGreeting("Jack");
        ?>
        </pre>
            </div>
        </section>
        <section class="multi-parameter-function">
            <h2 class="display-5">11. Multiple Parameter Functions</h2>
            <?php
            /*******************************************************
             * 1. Create a function named newGreeting
             * 2. Within the parentheses, add the variable $name
             *    and $day as the parameters to pass into the
             *    code block
             * 2. In the code block, create an echo statement
             *    that will send the following to the screen:
             *    "<h1>Welcome $name!</h1><p>It's a beautiful
             *    $day!</p>"
             *******************************************************/
            /*******************************************************
             * 1. Call the function using its name followed by a
             *    opening and closing parentheses
             * 2. In the parentheses:
             *    a. Add a name as a string for the first parameter
             *       followed by a comma
             *    b. For the second parameter, add the date function
             *       that will get the name of the day: date("l")'
             *******************************************************/
            function dayGreeting($name, $day)
            {
                echo "<h4>Welcome {$name}!</h4><p>It's a beautiful {$day}!</p>";
            }

            dayGreeting("Jack", date("l"));
            ?>

            <h3 class="btn btn-primary" data-bs-toggle="collapse" href="#multiFunction" role="button" aria-expanded="false" aria-controls="collapseExample">Code Example</h3>
            <div class="collapse" id="multiFunction">
                <pre>
        &lt;?php
        function dayGreeting($name, $day)
        {
            echo "&lth4>Welcome {$name}!&lt/h4>&ltp>It's a beautiful {$day}!&lt/p>";
        }

        dayGreeting("Jack", date("l"));
        ?>
        //The function is "dayGreeting()" instead of "newGreeting()" because newGreeting() has already been defined in this document.
        </pre>
            </div>
        </section>
        <section class="value-from-function">
            <h2 class="display-5">12. Returning a Value From a Function</h2>
            <?php
            /*******************************************************
             * 1. Create a function named sum
             * 2. Within the parentheses, add the variable $x and $y
             *    as the parameters to pass into the code block
             * 3. In the code block, set the variable $z equal
             *    to $x + $y
             * 4. Create a return statement that returns the value
             *    of $z out of the function
             *******************************************************/
            /*******************************************************
             * 1. Create at least three echo statements that prints
             *    the addition equation to the screen
             *    EXAMPLE: echo "5 + 10 = "
             * 2. Concatenate the function at the end of the
             *    equation that sends two numbers into the function
             *    to be summed
             *    EXAMPLE: . sum(5, 10)
             * 3. Add a line break
             *    EXAMPLE: . "<br>";
             *    COMPLETE EXAMPLE: echo "5 + 10 = " . sum(5, 10) . "<br>";
             *******************************************************/
            function sum($x, $y)
            {
                $z = $x + $y;
                return $z;
            }
            echo "5 + 10 = " . sum(5, 10) . ".<br>";
            echo "2 + 17 = " . sum(2, 17) . ".<br>";
            echo "9 + 1 = " . sum(9, 1) . ".<br>";
            ?>
            <br>

            <h3 class="btn btn-primary" data-bs-toggle="collapse" href="#return" role="button" aria-expanded="false" aria-controls="collapseExample">Code Example</h3>
            <div class="collapse" id="return">
                <pre>
        &lt;?php
        function sum($x, $y)
        {
            $z = $x + $y;
            return $z;
        }

        echo "5 + 10 = " . sum(5, 10) . ".&ltbr>";
        echo "2 + 17 = " . sum(2, 17) . ".&ltbr>";
        echo "9 + 1 = " . sum(9, 1) . ".&ltbr>";
        ?>
        </pre>
            </div>
        </section>
        <section class="indexed-array">
            <h2 class="display-5">13. Indexed Arrays</h2>
            <?php
            /*******************************************************
             * Create an array of the names of your favorite colors
             * NOTE: The array should contain the names of more
             * than three colors
             *******************************************************/
            /*******************************************************
             * 1. Create an echo statement contains the string
             *    '<h4>My favorite colors include: </h4><ul>'
             * 2. Create a foreach loop that will loop through
             *    all of the ($colors as $c)
             * 3. In the loop code block, create an echo statement
             *    that creates a list of each color name between
             *    line item tags
             *    EXAMPLE: '<li>' . $c . '</li>'
             * 4. After the loop, create an echo statement that
             *    sends the closing unordered list tag to the browser
             * 5. Create one last echo statement that creates the
             *    following sentence, but with your favorite
             *    color listed
             *
             *    RESULTS SHOULD READ: But my absolute favorite
             *    color is: (NAME YOUR FAVORITE COLOR FROM THE ARRAY)
             *******************************************************/
            $colors = ["red", "green", "blue", "yellow", "purple"];
            echo "<h4>My favorite colors include: </h4><ul>";
            foreach ($colors as $c) {
                echo "<li>${c}</li>";
            }
            echo "</ul>";
            echo "But my absolute favorite color is: " . $colors[2] . ".";
            ?>
            <br>
            <br>

            <h3 class="btn btn-primary" data-bs-toggle="collapse" href="#indArray" role="button" aria-expanded="false" aria-controls="collapseExample">Code Example</h3>
            <div class="collapse" id="indArray">
                <pre>
        &lt;?php
        $colors = ["red", "green", "blue", "yellow", "purple",];
        echo "&lth4>My favorite colors include: &lt/h4>&ltul>";
        foreach ($colors as $c) {
            echo "&ltli> ${c} &lt/li>";
        }
        echo "&lt/ul>";
        echo "But my absolute favorite color is: " . $colors[2] . "."
        ?>
        </pre>
            </div>
        </section>
        <section class="assoc-arrays">
            <h2 class="display-5">14. Associative Arrays</h2>
            <?php
            /*******************************************************
             * Create an array of names and associate a color name
             * to each
             *
             * NOTE: The array should contain the names of more
             * than three people and associated color
             *******************************************************/
            /*******************************************************
             * 1. Create an echo statement contains the string
             *    '<h4>My friend\'s favorite colors are: </h4><ul>'
             *    NOTE: Remember when using single quotes, the
             *    apostrophe in friend's needs to be escaped with
             *    a forward slash (\)
             * 2. Create a foreach loop that will loop through all
             *    of the ($colors as $c => $c_value) This will
             *    separate the associative array into their key
             *    and value pair
             * 3. In the loop code block, create an echo statement
             *    that creates a list of each person and their
             *    favorite color between line item tags
             *    EXAMPLE: '<li>' . $c . '\'s favorite color
             *    is ' . $c_value . '</li>'
             * 4. After the loop, create an echo statement that
             *    sends the closing unordered list tag to the browser
             *******************************************************/
            $colors = [
                "Jack" => "blue",
                "Jessica" => "green",
                "Karen" => "red",
                "Stacey" => "purple",
            ];
            echo "<h4>My friend's favorite colors are: </h4><ul>";
            foreach ($colors as $c => $c_value) {
                echo "<li> ${c}'s favorite color is ${c_value}.</li>";
            }
            echo "</ul>";
            ?>

            <h3 class="btn btn-primary" data-bs-toggle="collapse" href="#assocArray" role="button" aria-expanded="false" aria-controls="collapseExample">Code Example</h3>
            <div class="collapse" id="assocArray">
                <pre>
        &lt;?php
        $colors = [
            "Jack" => "blue",
            "Jessica" => "green",
            "Karen" => "red",
            "Stacey" => "purple",
        ];
        echo "&lth4>My friend's favorite colors are: &lt/h4>&ltul>";
        foreach ($colors as $c => $c_value) {
            echo "&ltli> ${c}'s favorite color is ${c_value}.&lt/li>";
        }
        echo "&lt/ul>";
        ?>
        </pre>
            </div>
        </section>
        <section class="array-count">
            <h2 class="display-5">15. Array Count</h2>
            <?php
            //Use this array for this exercise
            /*******************************************************
             * Create an echo statement that counts the number
             * of items contained in the $colors array and outputs
             * the sentence "There are (number of items) colors
             * in the array."
             *******************************************************/
            $colors = [
                "Red",
                "Green",
                "Orange",
                "Blue",
                "Pink",
                "Red Orange",
                "Light Blue",
                "Orange Green",
                "Sky Blue",
                "Purple",
            ];

            echo "There are " . count($colors) . " colors in the array.";
            ?>
            <br>
            <br>

            <h3 class="btn btn-primary" data-bs-toggle="collapse" href="#arrayCount" role="button" aria-expanded="false" aria-controls="collapseExample">Code Example</h3>
            <div class="collapse" id="arrayCount">
                <pre>
        &lt;?php
        $colors = [
            "Red",
            "Green",
            "Orange",
            "Blue",
            "Pink",
            "Red Orange",
            "Light Blue",
            "Orange Green",
            "Sky Blue",
            "Purple",
        ];
        
        echo "There are " . count($colors) . " colors in the array.";
        ?>
        </pre>
            </div>
        </section>
        <section class="array-sorting d-none">
            <h2 class="display-5">16. Sorting an Array Examples</h2>
            <?php
            //Use the following arrays for this exercise
            $colors = [
                "White",
                "Yellow",
                "Blue",
                "Red",
                "Green",
                "Black",
                "Brown",
                "Azure",
                "Ivory",
                "Teal",
                "Silver",
                "Purple",
                "Navy blue",
                "Pea green",
                "Gray",
                "Orange",
                "Maroon",
                "Charcoal",
                "Aquamarine",
                "Coral",
                "Fuchsia",
                "Wheat",
                "Lime",
                "Crimson",
                "Khaki",
                "Hot pink",
                "Magenta",
                "Olden",
                "Plum",
                "Olive",
                "Cyan",
            ];
            $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18];
            $namesAges = [
                "Matt" => 24,
                "John" => 32,
                "Jane" => 23,
                "Nick" => 43,
                "Becky" => 38,
            ];

            /*******************************************************
             * Uncomment each of the following sections one at a time
             * to see the results.
             *******************************************************/

            echo '<h4>Sorting the $colors Array in Ascending order (alphabetically)</h4>';
            sort($colors);
            foreach ($colors as $x) {
                echo $x . "<br>";
            }

            echo '<h4>Sorting the $numbers Array in Descending order (largest to smallest)</h4>';
            rsort($numbers);
            foreach ($numbers as $x) {
                echo $x . "<br>";
            }

            echo '<h4>Sorting the value of the $namesAges Array in Ascending order (smallest to largest)</h4>';
            asort($namesAges);
            foreach ($namesAges as $x => $x_val) {
                echo $x . ": " . $x_val . "<br>";
            }

            echo '<h4>Sorting the key of the $namesAges Array in Ascending order (smallest to largest)</h4>';
            ksort($namesAges);
            foreach ($namesAges as $x => $x_val) {
                echo $x . ": " . $x_val . "<br>";
            }

            echo '<h4>Sorting the value of the $namesAges Array in Descending order (largest to smallest)</h4>';
            arsort($namesAges);
            foreach ($namesAges as $x => $x_val) {
                echo $x . ": " . $x_val . "<br>";
            }

            echo '<h4>Sorting the key of the $namesAges Array in Descending order (smallest to largest)</h4>';
            ksort($namesAges);
            foreach ($namesAges as $x => $x_val) {
                echo $x . ": " . $x_val . "<br>";
            }
            ?>
        </section>
    </div>
</body>

</html>