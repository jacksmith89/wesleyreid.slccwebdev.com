    <?php
    $mySkillsList = [
        "Basic HTML/CSS/JavaScript",
        "WordPress Creation and Management",
        "PHP Scripting and Database Management", "Google Fu", "Karate (you never know)"
    ];
    $favSkillList = [
        "making brownies",
        "radical self-love",
        "catching feelings"
    ];
    $favSkill = $favSkillList[rand(0, 2)];
    ?>
    <!-- <pre>
        <?php echo print_r($mySkillsList) . "<br>";
        echo print_r($favSkillList) . "<br>";
        echo $favSkill . "<br>";
        ?>
    </pre> -->

    <?php
    function mySkills($array, $favSkill)
    {
        echo "My skills include: <ul class=\"list-group list-group-flush\">";
        foreach ($array as $skill) {
            echo "<li class=\"list-group-item\">" . $skill . "</li>";
        }
        echo "</ul><br>";
        echo "But my favorite skill is <b>" . strtolower($favSkill) . "!</b>";
    }
    // mySkills($mySkillsList, $favSkill);
    ?>