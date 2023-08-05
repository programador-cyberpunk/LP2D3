    <?php
    require ("carro.php");
    require ("Retangulo.php");
    require ("pessoa.php");
    class Fruta{
        // atributos de crasse

        private $nome;
        public $cor;

          //metodos
        function __construct($nome, $cor){
            $this->nome = $nome;
            $this->cor = $cor;
        }
        function set_nome($nome){
            if($nome =="laranja"){
                $this->nome = "invalido!";     
            }
            $this->nome = $nome;
        }

        function set_cor($cor){
            $this->cor = $cor;
        }

        function get_nome(){
            return $this->nome;
        }

        function get_cor(){
            return $this->cor;
        }


    }
    // criando objetos
    $maca = new Fruta("maçã","vermelha");
    $limao = new Fruta("limão","verde");
    $tomate = new Fruta("tomate","vermelho");

    // criar um objeto do tipo carro
    $carro1 = new Carro("Chevrolet","interceptor", 1980);
    echo "<br>Carro 1 - marca = ".
    $carro1->get_marca().
    "<br> modelo = ".
    $carro1->get_modelo().
    "<br> ano = ".
    $carro1->get_ano();

    //criando um retangulo

    $retangulo = new Retangulo(2,4);
    echo "<br> àrea do trianguiloxx =".
    $retangulo->calculo_area();
    echo "<br> perímetro retanguloxx =".
    $retangulo->calculo_perimetro();

    //criando um bipede
   $pessoa = new Pessoa("Van Damme",56,"Lutador");
   echo $pessoa->apresentar();
    // impressao dos nomes
    //echo $maca->cor = "vermelho";
    //echo $maca->nome = "maçã";
    //$maca->set_nome("maçã fuji");
    echo "<br>".$maca->get_nome();
    echo "<br>".$maca->get_cor();

    //$limao->cor = "verde";
    //$limao->nome = "limao";

    ?>