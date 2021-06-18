<?php require_once 'header.php'; ?>


<div class="container">
    <h1>Formulaire</h1>

        <form action="traitement.php" method="GET">

            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" name="nom" class="form-control" >
            
            </div>

            <div class="form-group">
                <label for="">Prénom</label>
                <input type="text" name="prenom" class="form-control"/>
            
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control"/>
            
            </div>

            <div class="form-group">
                <label for="" name="sujet">Sujet</label>
                <input type="text" name="sujet" class="form-control"/>
            
            </div>

            <div class="form-group">
                <label for="" name="message"  >Message</label>
                <textarea name="message"></textarea>
            
            </div>

            <div class="form-group">
            <input type="checkbox" id="cgu" name="cgu" />
            <label for="cgu">Valider CGU 1</label>
            
            </div>

            <button type="submit" class="btn btn-primary"> Envoyer</button>

        </form>
</div>