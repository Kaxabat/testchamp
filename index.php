<?php
include 'src/setGrid.php';
include './data/getTeams.php';
$teams = getTeams();
$circle1 = circle1();
$circle2 = circle2();
?>

<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <title>Календарь матчей</title>
    <script src="jquery.js"></script>
    <script> 
    $(document).ready(function(){
    $("td.team").click(function(){
        $(`td`).css("background-color", "rgb(235, 207, 165)");
        var id = parseInt(event.target.className);
        $(`td.${id}`).css("background-color", "#f66d52");
    });
});
</script>
 </head>
 <body>
 <table>
  <tbody>
    
    <?php
    $k = 0;
    $i = 1;
    ?>
    <tr><th></th><th>Круг 1</th><th></th></tr>
    <?php
        foreach ($circle1 as $key => $tour) {
            foreach ($tour as $key1 => $match) {
                $k = 0;
                $count = 1;
                for ($n = 0; $n <= 9; $n++){
                    if ($i == 1){
                        ?><tr><th></th><th>Тур 1</th><th></th></tr><?php
                    }
                    ?><tr><th></th><th>Матч <?=$count?></th><th></th></tr>
                    <tr>
                    <td class="<?=$match[$k]?> team"><?=$teams[$match[$k]]['name']?></td> <td> - </td> <td class="<?=$match[$k + 1]?> team"><?=$teams[$match[$k + 1]]['name']?></td><?php
                    ?></tr><?php
                    $k += 2;
                    $count++;
                    if ($i % 10 == 0){
                        if ($i == 190){
                            continue;
                        }
                        ?><tr><th></th><th>Тур <?=$i/10 + 1?></th><th></th></tr><?php
                    }
                    $i++;
                }
            }
        }
    ?>
  </tbody>
</table><br><hr style="height:50px; background-color:gray"><br>
<table>
  <tbody>
    <?php
    $k = 0;
    $i = 1;
    ?>
    <tr><th></th><th>Круг 2</th><th></th></tr>
    <?php
        foreach ($circle2 as $key => $tour) {
            foreach ($tour as $key1 => $match) {
                $k = 0;
                $count = 1;
                for ($n = 0; $n <= 9; $n++){
                    if ($i == 1){
                        ?><tr><th></th><th>Тур 1</th><th></th></tr><?php
                    }
                    ?><tr><th></th><th>Матч <?=$count?></th><th></th></tr>
                    <tr>
                    <td class="<?=$match[$k]?> team"><?=$teams[$match[$k]]['name']?></td> <td> - </td> <td class="<?=$match[$k + 1]?> team"><?=$teams[$match[$k + 1]]['name']?></td><?php
                    ?></tr><?php
                    $k += 2;
                    $count++;
                    if ($i % 10 == 0){
                        if ($i == 190){
                            continue;
                        }
                        ?><tr><th></th><th>Тур <?=$i/10 + 1?></th><th></th></tr><?php
                    }
                    $i++;
                }
            }
        }
    ?>
  </tbody>
</table>
 </body>
</html>
