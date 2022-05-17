<body>
    <table class="table"></table>
        <thead class="thread-dark">
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Idade</th>
            <th scope="col">Estado</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($dados_clientes as $item){ ?>
            <tr>
                <td><?php echo $item['nome']; ?></td>
                <td><?php echo $item['idade']; ?></td>
                <td><?php echo $item['estado']; ?></td>
            </tr>
            <?php } ?>

</tbody></table></body></html>