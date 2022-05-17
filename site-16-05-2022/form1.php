<html>

<body>


    <form name="frm_dados" action="processa-dados-form.php" method="POST">

    Nome: <input type="text" name="nome"/> <br>
    Idade : <input type="text" name="idade"/> <br>
    Telefone : <input type="text" name="telefone"/> <br>
    <input type="submit" name="btn_enviar" value="Enviador Dados"/> <br>
    Sexo: <label>Feminino</label> <input type="radio" name="sexo" value="F"> <label>Masculino</label> <input type="radio" name="sexo" value="M"><br><br>
    Interesses: <label>Java</label> <input type="checkbox" name="interesses[]" value="java">
    <label>BD</label> <input type="checkbox" name="interesses[]" value="bd">
    <label>PHP</label> <input type="checkbox" name="interesses[]" value="php">
    <label>JS</label>  <input type="checkbox" name="interesses[]" value="js"> 
    <label>HTML/CSS</label> <input type="checkbox" name="interesses[]" value="htmlscss"> <br><br>

    Foto: <input type="text" name="foto"> <input type="file" name="btn_selecionar" value="Selecionar"/> <br>
    
    
    
    
    

</form>
    
    
</body>

</html>