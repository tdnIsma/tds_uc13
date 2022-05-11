<html>

<body>

    <?php 

        /* 
        $array3 = array("nome" => "Maria", "idade"=> "40");

        var_dump($array3);
        echo "<br>";

        echo $array3['nome'];

        $array4 =[
            "nome" => "josé",
            "idade" => "50",
        ];
        
                
        print_r($array4);

        $a1   [][]   =    array();
        $a1   [0][0] =  "Pedro";
        $a1   [0][1] =  'pedro@senac.com.br';
        $a1   [0][2] =  21;
        $a1   [1][0] =  "Maria";
        $a1   [1][1] =  "maria@senac.com.br";
        echo "<pre>";
        print_r($a1);
        echo "</pre>";

        */
        $a2[0]["nome"] = "maria";
        $a2[0]["sobrenome"] = "silva";
        $a2[0]["email"] = "maria@senac";

        $a2[1]["nome"] = "pedro";
        $a2[1]["sobrenome"] = "souza";
        $a2[1]["email"] = "pedro@senac";

        $a2[2]["nome"] = "carol";
        $a2[2]["sobrenome"] = "silva";
        $a2[2]["email"] = "carol@senac";


        for($i = 0; $i < sizeof($a2); $i++){
            echo 'Nome: '.$a2[$i]["nome"].' ',$a2[$i]["sobrenome"].' - '.$a2[$i]["email"]."<br>";
        }
        
        
        


    ?>
    </table>
    
</body>

</html>