<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <h1>editer etudiant</h1>
    <form action="store.php" method="post" class="form-inline" accept-charset="utf-8">
      
      <label>ID<input type="text" name="id"  class="form-control"></label>

        <label>Nom<input type="text" name="firstname" class="form-control" ></label>

        <label>prenom<input type="text" name="lastname" class="form-control"></label>     

        
        <label>email<input type="text" name="email" class="form-control"></label>  

        <label>tel<input type="number" max="10" name="phone" value="" class="form-control"></label>
        

    <button type="submit" class="btn btn-primary">enregister</button>
    <button type="reset" class="btn btn-secondary">annuler</button>
    
    

    <?php
    include'dbconnexion.php';
         $firstname = $_POST['firstname'] ; 
         $lastname = $_POST['lastname'] ;  
          $email = $_POST['email'] ; 
          $phone = $_POST['phone'] ; 

         // On ajoute une entrée dans la table personne 
         $nb_mod = $cnx->exec("UPDATE studants SET email='$email' WHERE nom='$nom' "); 
 
    echo $nb_mod . ' etudiant  été modifiée !'; 
      ?> 
</form>
    </div>
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>