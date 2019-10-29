
    
    <?php
    try {  
        include 'dbconnexion.php';   
    } catch(Exception $e) {    
         die('Erreur : '.$e->getMessage());   
        }
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $phone=$_POST['phone']; 
        $mod = $cnx->exec("UPDATE students SET email='$email' WHERE firstname='$firstname'"); 
    echo $mod.'etudiant été modifiées !';
    ?>
