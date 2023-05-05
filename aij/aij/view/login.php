<html>
   <form action="../control/usuarioControl.php" method="post">
       <input type="hidden" name="acao" value="0">
       <input type ="text" name="usr"><br>
       <input type="password" name="pass"><br>
       <input type="submit" value="entrar">
   </form>
   <?php
       if(isset($_GET["erro"])){
           if($_GET["erro"]==1){
               echo "Acesso negado";
           }
       }
   ?>
</html>
