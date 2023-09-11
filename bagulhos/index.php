    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>atividade1</title>
    </head>
    <body>

    <?php
    require("Pessoa.php"); 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $profissao = $_POST['profissao'];
        
        $p1 = new Pessoa($nome, $idade, $profissao);

        echo "<p>" . $p1->apresentar() . "</p>";
    }
    $minSaldo = -18000; 
    $maxSaldo = 18000; 
    $valorSaldo = rand($minSaldo, $maxSaldo);

    if ($valorSaldo < 0) {
        echo "<p>Seu saldo da conta bancária é R$" . $valorSaldo. "
        <p>Veja algumas ofertas para você e alguns cursos:</p>";
        
        echo "<h2>Cursos</h2>";
        echo "<ul>";
        echo "<li> PHP básico - R$ <a href='https://www.youtube.com/watch?v=mRogW0vMJuI&ab_channel=ClubeFull-Stack/'a></li>";
        echo "<li>Java - R$ <a href='https://www.youtube.com/watch?v=sTX0UEplF54&ab_channel=CursoemV%C3%ADdeo'</a></li>";
        echo "<li>Cobol básico - R$ <a href='https://www.youtube.com/watch?v=UU9I9n9oQyc&ab_channel=AprendaCOBOL'</a></li>";
        echo "</ul>";

    } else {
        echo "<p>Seu saldo é R$" . $valorSaldo. "
        <p>Veja algumas ofertas para você e alguns cursos:</p>";
        
        echo "<h2>Cursos</h2>";
        echo "<ul>";
        echo "<li>`PHP básico` - R$ <a href='https://www.youtube.com/watch?v=mRogW0vMJuI&ab_channel=ClubeFull-Stack'</a></li>";
        echo "<li>Java- R$ <a href='https://www.youtube.com/watch?v=sTX0UEplF54&ab_channel=CursoemV%C3%ADdeo'</a></li>";
        echo "<li>Cobol básico - R$ <a href='https://www.youtube.com/watch?v=UU9I9n9oQyc&ab_channel=AprendaCOBOL'</a></li>";
        echo "</ul>";

        echo "<h2>Produtos com desconto</h2>";
        echo "<ul>";
        echo "<li>Produto A - R$ 665</li>";
        echo "<li>Produto B - R$ 666</li>";
        echo "<li>Produto C - R$ 667</li>";
        echo "</ul>";

    }

    ?>
    

    

    </body>
    </html>
