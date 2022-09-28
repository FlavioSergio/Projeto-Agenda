<?php  
    include_once("config/process.php"); 
    $pag= $contact["name"];
    include_once("template/header.php"); 
?>
    <div class="conteiner" id="view-contact-container">
        <?php include_once("template/backbtn.php");?>
        <h1 id="main-title"><?= $contact["name"] ?></h1>
        <p class="bold">Telefone:</p>
        <p><?= $contact["phone"]?></p>
        <p class="bold">Observação:</p>
        <p><?= $contact["observations"]?></p>
    </div>

<?php include_once("template/footer.php"); ?>