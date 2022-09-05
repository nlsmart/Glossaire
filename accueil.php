<main>
    <h2 class="text-center" style="height: 200px;">Site en construction</h2>
    <div class="container">
        <div class="row">
            <div class="col-12 m-auto border-top border-bottom p-3 ">
                <span class="alphabet">
                    <?php
                        foreach(range ('A','Z') as $premiereLettre){
                            echo"<a href='index.php?lettre=$premiereLettre'>$premiereLettre</a>";
                            if($premiereLettre != "Z") echo "|";
                        }
                    ?>
                </span>
            </div>
        </div>
    </div><br><br><br>
</main>
