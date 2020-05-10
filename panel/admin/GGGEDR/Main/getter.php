<?php
function getDataS($id, $conn, $desc)
{
    $queryd = "SELECT `message` FROM `$id` WHERE id = ?";


    if ($stmtj = $conn->prepare($queryd)) {

        $stmtj->bind_param('s', $desc);

        $stmtj->execute();
        $intsr = "";
        $stmtj->bind_result($intsr);
        $stmtj->fetch();
        if($intsr == null){
            echo "-";
        } else {
            echo "$intsr";
        }


    } else {

        return false;
    }
}


?>