<?php 

/**
 *      Construction du menu
 */
function getMenu(){
    return
    [
        ["pistache", 10],
        ["fraise", 9],
        ["vanille", 11],
        ["framboise", 9],
        ["caramel", 12],
        ["Crêpe spéciale", 12]

    ];
}

/**
 * Fonction qui donne une liste de gaufres
 */
function getGaufres() {
    return ['Gaufre Sucre', 'Gaufre au chocolat', 'Sarrasin', 'Banane', 'Mikado'];
}



function getGaufresTexte(){
    return 'Liste gaufres';
}

function inserer_utilisateur($mySqlClient, $nouvelUtilisateur){


    $requete= '
        
                INSERT INTO utilisateurs VALUES (:username, :password)'; 
    
            $requeteInsertion = $mySqlClient->prepare($requete);
            $requeteInsertion->execute(array(':username' => $nomUtilisateur, ':password' => $passwd));

}


?>