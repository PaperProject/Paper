<?php

    // die;

    try {
        $dbh = new PDO('mysql:host=tritriper.noip.me;port=22;dbname=Paper', "root", "rennes");
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

     if(!empty($_POST)) {
        //echo "Tu as utiliser un formulaire de type POST <br>";
        $sql =  'INSERT INTO `snirweb` (`nom`, `companie`, `mail`, `telephone`, `commentaire`) VALUES ("' . $_POST["nom"] . '", "' . $_POST["companie"] .'", "' . $_POST["mail"] . '", "'. $_POST["telephone"] . '", "'. $_POST["commentaire"] . '")';
        //echo $sql;
        $dbh->exec($sql);
    } else {

    }

    // $sql =  'SELECT nom, companie, mail, telephone, commentaire FROM snirweb';
    // // $resultat = $dbh->query($sql, PDO::FETCH_ASSOC);

    // foreach ($dbh->query($sql) as $row) {
    //     echo "<H1>" . $row['nom'] . "</H1>";
    //     print $row['companie'] . "\t";
    //     print $row['mail'] . "\t";
    //     print $row['telephone'] . "\t";
    //     print $row['commentaire'] . "<br>";
    // }

    // die;


?>
