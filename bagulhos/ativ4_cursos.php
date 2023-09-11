    <?php

    class Curso{
    private Nome;
    private Link;
    }
    public function __construct($nome, $link){
        $this->nome = $nome;
        $this->link = $link;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getLink(){
        return $this->link;
    }


    // os cursos,que são uns video aleatorio que eu peguei no youtube,mas pelo menos tem cobol

    catalogoCursos = array {
        new Cruso ("Curso de programação PHP", "https://www.youtube.com/watch?v=mRogW0vMJuI&ab_channel=ClubeFull-Stack"),
        new Curso ("Curso de programação JAVA", "https://www.youtube.com/watch?v=sTX0UEplF54&ab_channel=CursoemV%C3%ADdeo"),
        new Curso ("Curso de programação COBOL", "https://www.youtube.com/watch?v=UU9I9n9oQyc&ab_channel=AprendaCOBOL")
    }
    ?>