
<?php 
include_once __DIR__ . '/../src/boostrap.php';
include_once __DIR__ . '/suiviPaquet.php';

try {
    $emisDonnees=$_SESSION['donnees']['emis'];
    $recuDonnees=$_SESSION['donnees']['recu'];
    $emis=paquetEmis($emisDonnees);
    $recu = paquetRecus($recuDonnees);
    
    $sql = 'INSERT INTO paquet (dateenreg,emis, recu) VALUES (:dateenreg, :emis, :recu)';

    $statement = db()->prepare($sql);

    $statement->bindValue(':dateenreg', strtotime(date('l jS \of F Y h:i:s A')), PDO::PARAM_STR);
    $statement->bindValue(':emis', $emis, PDO::PARAM_STR);
    $statement->bindValue(':recu', $recu,PDO::PARAM_STR);


    return $statement->execute();
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

 


    ?>