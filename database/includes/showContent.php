<?php
$sql = "SELECT * FROM cards ORDER BY RAND() LIMIT 1";
//echo ($sql . "<br>");
require_once ("connect-aws.php");
$result = $con->query($sql);
if ($result->num_rows > 0)
{
    echo PHP_EOL;
    echo '<div class="container">';
    while ($row = $result->fetch_assoc())
    {
        $name = $row["name"];
        $content = $row["content"];
    echo '<h2 class="text-center">' . $row[ "name" ] . '</h2>
        <div class="text">'.$row["content"].'</div>
        </div>';
    }
}
else
{
    echo "0 results";
}
echo PHP_EOL;
?>
