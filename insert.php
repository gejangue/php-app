<!doctype html>
<html>
     <head>
          <title>Bücher erfassen</title>
          <meta charset="UTF-8">
     </head>

     <body>

     <?php
          
          print "Hello, World! php version is " . PHP_VERSION . "\n";
          

     ?>
       <h1>Ein Buch erfassen:</h1>

        <form method="POST">
        <p>
             <input type="text" name="titel" size="50" placeholder="Buchtitel">
        </p>

        <p>
             <input type="text" name="autor" size="50" placeholder="Autor">
        </p>

        <p>
             <input type="text" name="seiten" size="5" placeholder="Seitenanzahl">
        </p>

        <p>
             <input type="text" name="isbn" size="20" placeholder="ISBN">
        </p>

        <p>
            <input type="submit" value="Speichern">
        </p>
        </form>
        <footer>
            <p><a href="insert.php">Neues Buch</a> <a href="mysqlconnect.php">Buchliste</a></p>
        </footer>
     </body>
</html>
