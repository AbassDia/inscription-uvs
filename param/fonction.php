<?php 
    function modifierr($prenom,$nom,$cni,$telephone,$id)
    {
        //Verifier si le site est connecter a la BDD
        if (require("connexion.php"))
        {
            //on prepare la requete req pour inserer dans la table piece les valeurs recuperées depuis les champs
            $req=$access->prepare("UPDATE membre SET prenom=?,nom=?,cni=?,telephone=? WHERE id=?");
            $req->execute(array($prenom,$nom,$cni,$telephone,$id));
            $req->closeCursor();
        }
    }
    function editer($id){
        if (require("connexion.php")){
            {
                //on prepare la requete req pour inserer dans la table user les valeurs recuperées depuis les champs
                $req=$access->prepare("SELECT * FROM membre WHERE id=?");
                $req->execute(array($id));
                if($req->rowcount()== 1){
                    $data=$req->fetchALL(PDO::FETCH_OBJ);
                    return $data;
                }else{
                    return false;
                }
                $req->closeCursor();
            }
        }
    }
    //Editer region
    function modifier($nom,$id)
    {
        //Verifier si le site est connecter a la BDD
        if (require("connexion.php"))
        {
            //on prepare la requete req pour inserer dans la table piece les valeurs recuperées depuis les champs
            $req=$access->prepare("UPDATE region SET nom=? WHERE id=?;");
            $req->execute(array($nom,$id));
            $req->closeCursor();
        }
    }
    function editerr($id){
        if (require("connexion.php")){
            {
                //on prepare la requete req pour inserer dans la table user les valeurs recuperées depuis les champs
                $req=$access->prepare("SELECT * FROM region WHERE id=?");
                $req->execute(array($id));
                if($req->rowcount()== 1){
                    $data=$req->fetchALL(PDO::FETCH_OBJ);
                    return $data;
                }else{
                    return false;
                }
                $req->closeCursor();
            }
        }
    }


   
   //Pour enregistrer un membre
   function ajouterm($ine,$nom,$prenom,$email,$telephone,$genre)
   {
       //Verifier si le site est connecter a la BDD
       if (require("connexion.php"))
       {
           //on prepare la requete req pour inserer dans la table region les valeurs recuperées depuis les champs
           $req=$access->prepare("INSERT INTO etudiant(ine,nom,prenom,email,telephone,genre) VALUES('$ine','$nom','$prenom','$email','$telephone','$genre')");
           $req->execute(array($ine,$nom,$prenom,$email,$telephone,$genre));
           $req->closeCursor();
       }
   }
   //fonction pour afficher tous les regions enregistrer de la BDD
   function affiche()
   {
       if (require("connexion.php"))
       {
            $req=$access->prepare("SELECT * FROM etudiant ORDER BY id DESC");
            $req->execute();
            $data=$req->fetchAll(PDO::FETCH_OBJ);
            return $data;
            $req->closeCursor();
       }
   }
    //fonction pour afficher tous les departements enregistrer de la BDD
    
     //fonction pour afficher tous les membres enregistrer de la BDD
    function afficher()
    {
        if (require("connexion.php"))
        {
             $req=$access->prepare("SELECT * FROM etudiant ORDER BY id DESC");
             $req->execute();
             $data=$req->fetchAll(PDO::FETCH_OBJ);
             return $data;
             $req->closeCursor();
        }
    }
   //Pour supprimer une region
   



?>