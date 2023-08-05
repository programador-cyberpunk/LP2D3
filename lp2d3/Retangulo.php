    <?php
    class Retangulo{
        private $largura;
        private $altura;

    function __construct($l, $a){
        $this->largura = $l;
        $this->altura = $a;

    
    }
    function calculo_area(){

        return $this->largura * $this->altura;
    }

    function calculo_perimetro(){
        return 2*$this->largura + 2*$this->altura;
    }
    }








    ?>