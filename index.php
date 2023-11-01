<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cachorro</title>
</head>
<body>

    <form action="">
    <label for="nome">Nome</label>
        <input type="text" name="nome">
        <br>
        <label for="nome">Raça</label>
        <input type="text" name="raca">
        <br>        
        <label for="nome">Cor</label>
        <input type="text" name="cor">
        <br>        
        <label for="nome">Peso</label>
        <input type="text" name="peso">
        <br>        
        <label for="nome">Idade</label>
        <input type="text" name="idade">
        <br>
        <label for="nome">Dono</label>
        <input type="text" name="dono">
        <br>
        <input type="submit" value="Salvar">
    </form>

    <?php
    
        include("class/cachorro.php");

        //$dog = new cachorro();
       // $dog->create("Cachorro Chupetão", "Pastor Alemão", "Marrom e com manchas pretas", 40, 10, "Farofa");

        //$dog->latir();

        //$dog = new cachorro();
       // $dog2->create("Snopey", "Dalmata", "Branco e com pintas pretas", 30, 09, "Charlie");

       // $dog2->latir();

       //$dog-rosnar("Farofa");
        //$dog-rosnar("Calipal");

        //$dog2-rosnar("Charlie");
        //$dog2-rosnar("Calipal");

        if (isset($_GET["nome"]))
        {
            $dog3 = new Cachorro();
            
            $dog3->create($_GET["nome"], $_GET["raca"], $_GET["cor"], 
                            $_GET["peso"], $_GET["idade"], $_GET["dono"]);

            $dog3->latir();

            $dog3->set_Nome("Jujuba");
            $dog3->latir();
            
            echo "<ul><li>" . $dog3->get_Raca() . "</li></ul>";
        }
    
    ?>
    
</body>
</html>