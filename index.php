<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>On the Fly</title>
  </head>
  <body>
    <h1>On the Fly</h1>
    <script type="text/javascript">
      //recieve POST from Java app
      var data = <?php echo $_POST[‘my_post’] ?>;
      console.log(data);

      //
    </script>
  </body>
</html>
