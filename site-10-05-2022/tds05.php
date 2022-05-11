<html>

<body>


    <h1>Cadastro de usuário</h1>
    
    <table border="1">
    <?php 

        $dados  = ['Ismael','Lucas','Gabriel','Felipe','Rodrigo','Maycon','Pedro','José','Suenzo','Rodolfo'];

        for($i = 0; $i < sizeof($dados); $i++){

            echo '<tr><td>'.$dados[$i].'</tr></td>';
        }
    ?>
    </table>
    
</body>

</html>