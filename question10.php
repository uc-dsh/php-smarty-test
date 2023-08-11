<form action="<?= $_SERVER["PHP_SELF"]; ?>">
    <input type="number" name="number" value="<?= @$_GET["number"]; ?>" />
    <input type="submit" value="Get Table" />
</form>
<?php
function check_number(int $number)
{
    $is_even = !($number % 2);
    echo $is_even ? "$number is <b>Even</b> Number" : "$number is <b>Odd</b> Number";
    echo "<br /><br />";
    $start = 1;
    for ($start; $start <= 10; $start++) {
        echo $number . "x" . $start . "=" . ($number * $start) . "<br />";
    }
}

if (isset($_GET["number"])) {
    check_number((int) $_GET["number"]);
}
?>