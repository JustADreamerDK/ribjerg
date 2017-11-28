<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="UTF-8">
        <title>Stald Ribjerg</title>
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/include.css" rel="stylesheet">
        <link href="css/index.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="img/head.png">
    </head>
    <body>
        <?php
        include "include/header.php";
        ?>

        <section class="row flex">
          <div>
            <img class="mySlides slide" src="img/1.jpg">
            <img class="mySlides slide" src="img/2.jpg">
            <img class="mySlides slide" src="img/3.jpg">
          </div>

          <script>
          var myIndex = 0;
          carousel();

          function carousel() {
              var i;
              var x = document.getElementsByClassName("mySlides");
              for (i = 0; i < x.length; i++) {
                 x[i].style.display = "none";
              }
              myIndex++;
              if (myIndex > x.length) {myIndex = 1}
              x[myIndex-1].style.display = "block";
              setTimeout(carousel, 5000);
          }
          </script>
        </section>

        <?php
        include "include/footer.php";
        ?>
    </body>
</html>
