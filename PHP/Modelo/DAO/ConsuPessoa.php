<?php

    namespace Livraria\PHP\Modelo\DAO;

    require_once('Conexao.php');

    use Livraria\PHP\Modelo\DAO\Conexao;

    class ConsuPessoa{

        public function ConsuIndi(Conexao $conne, string $Pessoa, int $codigo){
            try{
                $conn = $conne->conectar();
                $sql = "select * from $Pessoa where codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["ISBN"] == $ISBN){
                        echo "<br><br>Código: ".$dados["codigo"]."<br>Nome: ".$dados["nome"]."<br>Telefone: ".$dados["tele"]."<br>Nascimento: ".$dados["nasci"]."<br>Login: ".$dados["login"]."<br>Senha: ".$dados["senha"]."<br><br>";
                        return;//return vazio só para sair do if
                    }//Fim do if
                }//Fim do while
                echo "Usuário não foi encontrado! :(";
            }
            catch(Except $erro){
                echo $erro;
            }
        }//Fim do método para consultar um usuário por vez

        public function consuTudo(Conexao $connect, string $Pessoa){
            try{
                $conn = $connect->conectar();
                $sql = "select * from $Pessoa";
                $result = mysqli_query($conn, $sql);
                while($dados = mysqli_fetch_Array($result)){
                    echo "<br><br>Código: ".$dados["codigo"]."<br>Nome: ".$dados["nome"]."<br>Telefone: ".$dados["tele"]."<br>Nascimento: ".$dados["nasci"]."<br>Login: ".$dados["login"]."<br>Senha: ".$dados["senha"]."<br><br>";
                }//Fim do while
                mysqli_close($conn);
            }
            catch(Except $erro){
                echo $erro;
            }//Fim do Try Catch
        }//Fim do método para Consultar todos os Usuários
    }//Fim da classe para Consultar Pessoa
?>