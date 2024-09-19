<?php
$titulo = "Notícias do meu site";
include "header.php";
?>
<main>
    <h1>Notícias</h1>
    <div class="container">
        <?php
        $maximo = 4;
        $i = 0;
        $noticias = [
            "Notícia 1",
            "Notícia 2",
            "Notícia 3",
            "Notícia 3",
            "Notícia 3",
            "Notícia 3",
            "Notícia 3",
            "Notícia 3",
            "Notícia 3",
        ];

        // while ($i < count($noticias)) {
        //     // echo $i;
        //     echo '<h1>';
        //     echo $noticias[$i];
        //     echo '</h1>';
        //     // $i = $i + 1;	
        //     $i++;
        // }
        // enquanto(i forMenor maximo){
        //     escreve i;
        //     i some voce com mais 1;
        // }

        include __DIR__ . "/config/db.php";
        // AGORA EU CONHEço PDO \o/
        $sql = "SELECT * FROM noticias";
        $resultado = $pdo->query($sql);
        // echo '<pre>';
        while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['id_not'];
            echo '<div>';
            echo "<a href='noticia.php?idnot=$id'>";
            echo $row['titulo'];
            echo '</a>';
            echo '</div>';
            // echo '<p>';
            // echo $row['descricao'];
            // echo "</p>";
        }
        // echo '</pre>';


        ?>
    </div>
</main>
<?php
include "footer.php";
?>