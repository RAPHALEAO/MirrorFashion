<!DOCTYPE html>
<html>

<head>
    <title><?php print $cabecalho_title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <?php print @$cabecalho_css; ?>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/mobile.css" media="(max-width: 940px)">


    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<header class="container">

    <h1><img src="img/logo.png" alt="Mirror Fashion"></h1>

    <p class="sacola">
        Nenhum item na sacola de compras
    </p>

    <nav class="menu-opcoes">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#">Sua Conta</a></li>
            <li><a href="#">Lista de Desejos</a></li>
            <li><a href="#">Cartão Fidelidade</a></li>
            <li><a href="Sobre.php">Sobre</a></li>
            <li><a href="#">Ajuda</a></li>
        </ul>
    </nav>

</header>