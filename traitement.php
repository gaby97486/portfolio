<?php require_once 'header.php'; ?>

<div class="container">
    <?php

    if(isset($_GET['nom'])){
        $nom= $_GET['nom'];
        if($nom==""){
            echo "veuillez saisir un nom ";
        }
    }else{
        $nom="";
    }
    echo "</br>";

    if(isset($_GET['prenom'])){
        $prenom= $_GET['prenom'];
        if($prenom==""){
            echo "veuillez saisir un prénom ";
        }
    }else{
        $prenom="";
    }
    echo "</br>";

    if(isset($_GET['email'])){
        $email= $_GET['email'];
        if($email==""){
            echo "veuillez saisir votre email ";
        }
    }else{
        $email="";
    }
    echo "</br>";

    if(isset($_GET['sujet'])){
        $sujet= $_GET['sujet'];
        if($sujet==""){
            echo "veuillez entrer un sujet ";
        }
    }else{
        $sujet="";
    }
    echo "</br>";

    if(isset($_GET['message'])){
        $message= $_GET['message'];
        if($message==""){
            echo "veuillez taper votre message ";
        }
    }else{
        $message="";
    }
    /// CGU
    if(isset($_GET['cgu'])){
        $cgu=TRUE;
    }else{
        $cgu=FALSE;
        echo"cgu non valider";
    }
    echo "<br/>";
    //test

    if($cgu==TRUE){
        //echo "cgu valider";

    ?>
        <div class="container">
                <?php  
                    echo " <strong>Bonjour,</strong>  </br>", $nom, "</br>",$prenom, " </br> merci de votre visite sur notre site,
                    nous allons prendre contact avec vous rapidement";
                    
                    //Envoie du mail                    
                    $message=$_GET['message'];

                    mail('gclotilde@fabdunum.fr','Mon sujet', $sujet,$message );
                ?>

        </div>

        <?php

    }else{
        echo"merci de cocher les CGU";
    }


    ?>

    <?php 
    // envoie du mail

     /*   $message=$_GET['message'];

        mail('gclotilde@fabdunum.fr','Mon sujet', $sujet,$message );*/


    ?>
</div>