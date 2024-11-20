<?php
    namespace PHP\Modelo\DAO;
    require_once('DAO\Conexao.php');
    require_once('DAO\Consultar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\MOdelo\DAO\Consultar;

?>


<!Doctype HTML>
            <head>
                <meta chartset="UTF-8"/>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" type="text/css" href="estilo1.css">
                <title>Página de Consulta</title>
            </head>
            <body style="background-image:url('imagem/discos1.jpg');">
                    <form metho="POST">
                        <label>Código: </label>
                        <input type="number" name="codigo" id="codigo"><br><br>

                        <button type="submit">Cadastrar
                                    <?php
                                        $cadastrar = new consultarIndividual();

                                        $codigo = $_POST['codigo'];

                                    ?>
                                </button>
                    </form>
                    <br><br>
                            <a href="index.php"><<button>Voltar</button></a>
    
            </body>
</html>
