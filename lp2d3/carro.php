    <?php
    class Carro{
        //Criando atributos com os modificadores de acesso de acesso do tipo private
        private $marca;
        private $modelo;
        private $ano;

        function __construct($marca,$modelo,$ano){
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
        }
        //metodo construtor
        function set_marca($marca){
            $this->marca = $marca;
        }
        function set_modelo($modelo){
            $this->modelo = $modelo;
        }
        function set_ano($ano){
        /* if($ano < 2000){
                echo "ano inferior ao 2000 não permitido";
            }else {*/
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
            
        }
        function get_marca(){
            return $this->marca;
        }
        function get_modelo(){
            return $this->modelo;
        }
        function get_ano(){
            return $this->ano;
        }
    }         







?>