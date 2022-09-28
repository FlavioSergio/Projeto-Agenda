<?php $pag='Adicionar'; include_once("template/header.php"); ?>
  <div class="container">
    <?php include_once("template/backbtn.php"); ?>
    <h1 id="main-title">Criar contato</h1>
    <form id="create-form" action="config/process.php" method="POST">
      <input type="hidden" name="type" value="create">
      <div class="form-group">
        <label for="name">Nome do contato:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
      </div>
      <div class="form-group">
        <label for="phone">Telefone do contato:</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" required>
      </div>
      <div class="form-group">
        <label for="observations">Observações</label>
        <textarea class="form-control" id="observations" name="observations" rows="3" placeholder="Insira as observações"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>
<?php include_once("template/footer.php") ?>