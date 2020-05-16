<?php
// DELETE FROM table WHERE id=xx;
// DELETE FROM table WHERE xx='aa' && yy='bb';
include_once "base.php";

delete('invoice',['id'=>2]);
echo "<br>";
delete('invoice',2);
echo "<br>";
delete('invoice',['period'=>1,'code'=>'AA']);
echo "<br>";
delete('invoice',7);

function delete($table, $arg)
{
    global $pdo;
    $sql = "DELETE FROM $table ";

    if (is_array($arg)) {
        $tmp = [];
        foreach ($arg as $key => $value) {
            $tmp[] = sprintf("`%s`='%s'", $key, $value);
        }
        $sql = $sql . " WHERE " . implode(" && ", $tmp);
    } else {
        $sql = $sql . " WHERE id = '$arg'";
    }
    echo $sql;
    return $pdo->exec($sql);
}

