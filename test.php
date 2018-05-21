<?php

include 'connection.php';

    $db = Database::getInstance();
    $mysqli = $db->getConnection(); 
    $sql_query = "SELECT m_id, m_description
				  FROM measure";
    $result = $mysqli->query($sql_query);

   while( $row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	echo '<p class="column"> <input type="checkbox"  name="measures[]" value="'.$row["m_id"].'">'.$row["m_description"].'</checkbox></p>';
}

echo '<style>
* {
    box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
   /* padding: 10px;
    height: 30px;  Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
</style>';
?>