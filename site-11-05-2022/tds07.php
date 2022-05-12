
<html>

<body>

    <?php 

        $dados[] = array("nome" => "Maria","data_nasc" => "10/05/2001", "salario" => "2500", "cod" => "1");
        $dados[] = array("nome" => "Ismael","data_nasc" => "15/03/2002", "salario" => "32500", "cod" => "2");
        $dados[] = array("nome" => "Rodolfo","data_nasc" => "14/01/2001", "salario" => "32500", "cod" => "3");

        for($i = 0; $i < sizeof($dados); $i++){

            echo '----------------------------<br>';
            echo 'Nome: '.$dados[$i]["nome"].'<br> Data: ',$dados[$i]["data_nasc"].' <br> Salário'.$dados[$i]["salario"].'<br> Código:'.$dados[$i]["cod"]."<br>";

            if($dados[$i]["cod"] == 1){
                $salario_atual = $dados[$i]["salario"];
                $soma = $salario_atual * 0.10;
                $salario_atualizado = $salario_atual + $soma;
                
                echo '------------Salario att-------------<br>';
                echo 'Nome: '.$dados[$i]["nome"].'<br> Data: ',$dados[$i]["data_nasc"].' <br> Salário'.$salario_atualizado.'<br> Código:'.$dados[$i]["cod"]."<br>";
            }

        }



    ?>
    </table>
    
</body>

</html>