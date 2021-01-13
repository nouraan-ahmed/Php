<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table width="270px" cellspacing="0px" cellpadding="0px" border="1px" style="margin:auto;text-align:center;">
        <caption style="font-weight: 700; font-size:25px;margin:15px;">Pattern</caption>
        <?php
        for ($i = 1; $i <= 8; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 8; $j++) {
                if ($i == 9 - $j || $i == $j) {
                    echo "<td height=30px width=30px bgcolor=#999999 >$i</td>";
                } else {
                    echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
                }
            }
            echo "</tr>";
        }

        ?>
    </table>
    <br>

    <table width="270px" cellspacing="0px" cellpadding="0px" border="1px" style="margin:auto;text-align:center;">
        <caption style="font-weight: 700; font-size:25px;margin:15px;">Chess Board</caption>
        <?php
        for ($i = 1; $i <= 8; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 8; $j++) {
                if (($i + $j) % 2 == 0) {
                    echo "<td height=30px width=30px bgcolor=#999999 ></td>";
                } else {
                    echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
                }
            }
            echo "</tr>";
        }

        ?>
    </table>
</body>

</html>