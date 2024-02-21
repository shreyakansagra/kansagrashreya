<html>
<head>

<meta http-equiv="refresh" content="1">
</head>
</html>

<?php

date_default_timezone_set('Asia/Kolkata');
echo "<table style=background-color:black>";
echo "<tr style=color:red;fontstyle:mono italic>";
echo "<td style=background-color:#3F000F>".date('h')."</td>";
echo "<td>:</td>";
echo "<td style=background-color:#3F000F>".date('i')."</td>";
echo "<td>:</td>";
echo "<td style=background-color:#3F000F>".date('s')."</td>";
echo "</tr>";
echo "</table>";

?>