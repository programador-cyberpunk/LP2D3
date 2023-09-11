    <?php
    class contaBancaria{
        private Titular;
        private Numero;
        private Saldo;
        function __construct($titular,$conta,$saldo){
        $this->titular = $Titular;
        $this->numero = $Numero;
        $this->saldo = $Saldo;
    }
    
    function set_titular($Titular){
        $this->titular = $Titular;
    }
    function get_titular(){
        return this->titular;
    }
    
    function set_numero($Numero){
        $this->numero = $Numero;
    }
    function get_numero(){
        return this->numero;
    }
    
    function set_saldo($Saldo){
        $this->saldo = $Saldo;
    }
    function get_saldo(){
        return this->saldo;
    }
    
    }

    $catalogoProdutos = array(
        new Produto("Colete Thrasher", 665.99),
        new Produto("Calça Jeans", 665.99),
        new Produto("Pisante", 665.99),
        new Produto("Juliete", 665.99)
    );

    function exibirCatalogo($catalogo) {
        echo "Catálogo de Produtos:" . PHP_EOL;
        foreach ($catalogo as $produto) {
            echo "Nome: " . $produto->getNome() . " | Preço: R$" . $produto->getPreco() . PHP_EOL;
        }
    }

    exibCatalogo($catalogoProdutos);

    ?>