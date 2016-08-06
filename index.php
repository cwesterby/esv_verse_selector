<?php 
// require php files
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ESV Bible Selector<</title>



    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom style sheet -->
    <link href="assets/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Dancing+Script" />
  </head>
  <body>
    <table class="table1">
      <tr>
        <th>From</th>
        <th>To</th>
      </tr>
      <tr>
        <td>
          <form action="" class="form1">
            <select name="booksFrom1">
              <option value="blank"></option>
            </select>
            <br>
            <select name="chaptersFrom1">
            </select>
            <br>
            <select name="versesFrom1">
            </select>
          </form>
        </td>

        <td>
          <form action="" class="form1.2">
            <select name="booksTo1.2">
              <option value="blank"></option>
            </select>
            <br>
            <select name="chaptersTo1.2">
            </select>
            <br>
            <select name="versesTo1.2">
            </select>
          </form>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <div class="output1"></div>
          <div class="cw1"></div>
        </td>
      </tr>
    </table>
    <br>
    <br>
    <div id="addVerse">Add another verse</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/jquery/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/verseselect.js"></script>
  </body>
</html>