<html>

<head>
  <title>Is It Caturday??</title>
  <?php include_once("includes/php/stylesheet_internal.php") ?>

    <script>
      <?php 
      include_once("includes/js/functions.js");
      // JAVASCRIPT function isItCaturday()
      // returns TRUE if today is Caturday. FALSE if not.

      include_once("includes/php/functions.php");
      // PHP function generateCaturdayText($fileName, $defaultText)
      // returns a string, defaulting to $defaultText if not found
      ?>

      izCaturday = isItCaturday(); // TRUE if is Caturday (BOO if not)
      izCaturdayText = "<?php echo generateCaturdayText('izCaturday.txt','yaasssssss'); ?>";
      izNotCaturdayText = "<?php echo generateCaturdayText('izNotCaturday.txt','nope'); ?>";

      window.onload = function() {
        if (izCaturday) {
          document.getElementsByTagName("body")[0].className = "caturday";
          document.getElementsByTagName("p")[0].innerHTML = izCaturdayText;
          document.getElementsByTagName("p")[0].className = "caturday";
        } else {
          document.getElementsByTagName("p")[0].innerHTML = izNotCaturdayText;
        }
      };
    </script>
    <?php include_once("includes/php/analyticstracking.php") ?>
</head>

<body>
  <div id="content-wrapper">
    <p>maybe!</p>
  </div>
</body>

</html>