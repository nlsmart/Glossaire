<div >
    <div class="container d-flex justify-content-start fw-bold">
        <div class="row">
            <div class="col-lg-12">

    <br>

    Identifiants et mots de passe :

    <br><br>

            </div>
        </div>
    </div>

<?php

    $query = "SELECT * FROM users ORDER BY ident " ;

    $req = $bdd -> prepare($query);

    $req -> execute() ;

    while ($data = $req -> fetch()) {        // le plus utilisé pour faire apparaitre les données.

        ?>

        <div class="container d-flex justify-content-start flex-wrap">
            <div class="row border-primary border-2">
                <div class="col-lg-12">
                    <div class="border border-primary border-2 rounded-2 p-2 m-2 w-auto">

        <?php
        echo' '.$data['ident'].' <br> '.$data['mdp'].' <br> '.$data['dates_user'].' ';
        ?>

                    </div>
                </div>
            </div>
        </div>

    <?php
    }
?>

<div class="container d-flex justify-content-start fw-bold">
    <div class="row">
        <div class="col-lg-12">

            Glossaire :

        </div>
    </div>
</div>

<?php
    echo'<br>';

    $query = "SELECT * FROM liste ORDER BY mot " ;

    $req = $bdd -> prepare($query);

    $req -> execute() ;

    ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">

            <div class="border border-primary border-2 rounded-3">

            <style>

                th{
                    height: 50px;
                    width: 100px;
                }
                .essai{
                    height: 50px;
                    width: 50px;
                }

            </style>

                <?php
                while ($data = $req -> fetch()) {        // le plus utilisé pour faire apparaitre les données.
                    ?>

                <div class="container mt-3">
                    <table class="table table-bordered border border-primary border-2">
                        <tr>
                            <th class="table-success border border-primary border-2 align-middle text-center">Mot </th>
                            <td class="border border-primary border-2 align-middle">
                                <?php
                                echo' '.$data['mot'].' ';
                                ?>
                            </td>
                            <th class="table-success border border-primary border-2 align-middle text-center">Définition </th>
                            <td class="border border-primary border-2 align-middle">
                                <?php
                                echo mb_strimwidth($data['def'], 0, 40, "...") ; // réduit à 30 caracteres la définition.
                                // echo' '.$data['def'].' ';
                                ?>
                            </td>
                            <th class="essai table-warning border border-primary border-2 align-middle text-center">
                            <a href="../PHP/index.php?page=6&id=<?php echo $data['id']; ?>" > <!-- lien vers la page de modification -->
                            <i  class="icon fa-solid fa-pen"></i>
                            </a>
                            </th>
                            <th class="essai table-danger border border-primary border-2 align-middle text-center">
                                <i class="fa-solid fa-trash-can"></i>
                            </th>
                        </tr>
                    </table>
                </div>

                    <!-- echo' '.$data['mot'].' :<br> '.$data['lettre'].' <br> '.$data['def'].' <br> '.$data['dates_list'].' '; -->
                    <!-- $query = " UPADTE liste SET mot=:mot, def=:def WHERE id=:id "; -->

                    <!-- $query = " DELETE FROM liste WHERE id=:id "; -->

                <?php
                }
                ?>

            </div>
        </div>
    </div>
</div>

<?php

    echo'<br><br>';
        
    // $query = "SELECT * FROM tables" ;

    // $req = $bdd -> prepare($query);

    // $req -> execute() ;

    // while ($data = $req -> fetch()) {        // le plus utilisé pour faire apparaitre les données.
    //     echo' '.$data['ident'].' '.$data['mdp'].' '.$data['mot'].' '.$data['lettre'].' '.$data['def'].'<br>';
    // }

    // $data = $req -> fetchAll(); // tableaux à 2 dimensions pour afficher l'intégralité des données de la table

    // foreach($data as $index){
    //     echo' nom : '.$index['nom'].' âge : '.$index['age'].' date d\'inscription '.$index['dates'].' <br> ';
    // }

    // var_dump($data);
    ?>

</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">

            <div class="border border-primary border-2 rounded-3">

                <div class="d-flex align-items-start flex-wrap" style="height: auto;">

                    <div class="p-2 m-2 border border-dark border-2 rounded-3">Flex item Flex item Flex item</div>
                    <div class="p-2 m-2 border border-danger border-2 rounded-3">Flex item</div>
                    <div class="p-2 m-2 border border-warning border-2 rounded-3">Flex item</div>
                    <div class="p-2 m-2 border border-primary border-2 rounded-3">Flex item Flex item Flex item</div>
                    <div class="p-2 m-2 border border-primary border-2 rounded-3">Flex item</div>
                    <div class="p-2 m-2 border border-primary border-2 rounded-3">Flex item</div>
                    <div class="p-2 m-2 border border-primary border-2 rounded-3">Flex item</div>
                    <div class="p-2 m-2 border border-primary border-2 rounded-3">Flex item</div>
                    <div class="p-2 m-2 border border-primary border-2 rounded-3">Flex item Flex item Flex item</div>
                    <div class="p-2 m-2 border border-primary border-2 rounded-3">Flex item Flex item Flex item</div>
                    <div class="p-2 m-2 border border-primary border-2 rounded-3">Flex item</div>
                    <div class="p-2 m-2 border border-primary border-2 rounded-3">Flex item</div>
                    
                </div>

            </div>

        </div>
    </div>
</div>
