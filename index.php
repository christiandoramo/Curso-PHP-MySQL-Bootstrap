<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>instalando xampp</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <form>
      <div class="form-group">
        <label for="numero">Nº do Produto</label>
        <input type="numero" class="form-control" id="numero" aria-describedby="numero"
          placeholder="Insira o numero do produto">
        <small id="numero" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="produto">Nome do produto</label>
        <input type="text" class="form-control" id="produto" placeholder="Insira o nome do produto">
      </div>
      <div class="form-group">
        <label for="categoria">Categoria</label>
        <select class="form-control" id="categoria">
          <option>Periféricos</option>
          <option>Hardware</option>
          <option>Software</option>
          <option>Celulares</option>
          <option>Notebooks</option>
        </select>
      </div>
      <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input type="number" class="form-control" id="quantidade" placeholder="Insira a quantia">
      </div>
      <div class="form-group">
        <label for="fornecedor">Fornecedor</label>
        <select class="form-control" id="fornecedor">
          <option>Fornecedor A</option>
          <option>Fornecedor B</option>
          <option>Fornecedor C</option>
          <option>Fornecedor D</option>
          <option>Fornecedor E</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>
  </div>















  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>