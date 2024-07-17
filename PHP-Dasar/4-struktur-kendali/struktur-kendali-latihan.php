<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Struktur Kendali</title>
    <style>
      .genap {
        background-color: blueviolet;
      }
      .ganjil {
        background-color: aqua;
      }
    </style>
  </head>
  <body>
    <table cellpadding="10" cellspacing="0" border="1">
      <?php for($i = 1; $i <= 5; $i++) : ?>
        <?php if($i % 2 == 0) :?>
          <tr class="genap">
            <?php for($j = 1; $j <= 5; $j++) : ?>
              <td><?php echo "$i, $j"?></td>
            <?php endfor;?>
          </tr>
          <?php else : ?>
          <tr class="ganjil">
            <?php for($j = 1; $j <= 5; $j++) : ?>
              <td><?php echo "$i, $j"?></td>
            <?php endfor;?>
          </tr>
        <?php endif;?>
      <?php endfor;?>
    </table>
  </body>
</html>
