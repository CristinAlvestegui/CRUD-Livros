<?php
    namespace Livraria\PHP\Modelo\DAO;

    require_once('Conexao.php');

    use Livraria\PHP\Modelo\DAO\Conexao;

    class InPessoa{
        
        public function cadastrar(Conexao $conex, string $Pessoa, string $nome, string $tele, string $nasci, string $login, string $senha){
            try{
                $conn = $conex->conectar();//Fazendo conexão com a base de dados
                $sql = "insert into $Pessoa (codigo, nome, tele, nasci, login, senha) values ('','$nome','$tele','$nasci','$login','$senha')";//Comando script do MySQL para inserir na tabela é nessa ordem que vai ser preenchida nossa tabela!!!!
                $result = mysqli_query($conn, $sql);//Executa ação do script no banco q salvamos em sql e conn

                if($result){
                    return "<br><br>Usuário cadastrado com sucesso!";
                }else{
                    return "<br><br>Algo deu Errado! :(";
                }
                mysqli_close($conn);//Fechado a conexão.
                
            }catch(Except $erro){
                echo $erro;
            }
        }

    }//Fim da classe pessoa

?>