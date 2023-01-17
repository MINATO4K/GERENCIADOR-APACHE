<html>
   <head>
      <title>AULA001</title>
      <meta charset="utf-8">
   </head>
   <body>
      <?php
      $Sobre = $_GET['sobre'];
      $Nome = $_GET['name'];
      $Tel = $_GET['contato'];
      echo "<br>Olá:$Nome de $Sobre<br>Telefone para contato:$Tel<br>Bem vindo A mt-plus";
      ?>
      <form method="GET">
         <input type="text" placeholder="Primeiro nome" name="name"><br>
         <input type="text" placeholder="sobre nome:" name="sobre"><br>
         <input type="text" placeholder="idade:" name="idade"><br>
         <input type="text" placeholder="Telefone:" name="contato"><br>
         <input type="submit" value="enviar">
      </form>
   </body>
</html>