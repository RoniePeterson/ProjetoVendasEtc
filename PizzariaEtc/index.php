<?php require_once "view/layouts/header.php"; ?>
<nav class="navbar navbar-expand-lg mb-3" style="background-color: #1e81b0;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/Assets/imagens/pizza-logo.png" alt="Logo" width="50" height="30" class="d-inline-block align-text-top">
      <a href="../view" class="btn"><strong>Pizzaria ETC</strong></a>
    </a>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Carrinho</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="view/login.php">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<main class="container">
  <section id="pizzas">
    <h2>Pizzas</h2>
    <div class="row">
      <div class="col-4">
        <div class="card" style="width: 14rem;">
          <img src="/Assets/imagens/pizza-logo.png" class="card-img-top" alt="Imagem de pizza">
          <div class="card-body">
            <h5 class="card-title">Pizza 1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Adicionar</a>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class="card" style="width: 14rem;">
          <img src="/Assets/imagens/pizza-logo.png" class="card-img-top" alt="Imagem de pizza">
          <div class="card-body">
            <h5 class="card-title">Pizza 1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Adicionar</a>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class="card" style="width: 14rem;">
          <img src="/Assets/imagens/pizza-logo.png" class="card-img-top" alt="Imagem de pizza">
          <div class="card-body">
            <h5 class="card-title">Pizza 1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Adicionar</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <hr>
  <section id="esfirras">
    <h2>Esfirras</h2>
    <div class="row">
      <div class="col-4">
        <div class="card" style="width: 14rem;">
          <img src="/Assets/imagens/esfirras.png" class="card-img-top" alt="Imagem de esfirras">
          <div class="card-body">
            <h5 class="card-title">Esfirras</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Adicionar</a>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class="card" style="width: 14rem;">
          <img src="/Assets/imagens/esfirras.png" class="card-img-top" alt="Imagem de esfirras">
          <div class="card-body">
            <h5 class="card-title">Esfirras 1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Adicionar</a>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class="card" style="width: 14rem;">
          <img src="/Assets/imagens/esfirras.png" class="card-img-top" alt="Imagem de esfirras">
          <div class="card-body">
            <h5 class="card-title">Esfirras 1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Adicionar</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <hr>
  <section id="bebidas">
    <h2>Bebidas</h2>
    <div class="row">
      <div class="col-4">
        <div class="card" style="width: 14rem;">
          <img src="/Assets/imagens/bebidas.png" class="card-img-top" alt="Imagem de bebidas">
          <div class="card-body">
            <h5 class="card-title">Bebidas 1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Adicionar</a>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class="card" style="width: 14rem;">
          <img src="/Assets/imagens/bebidas.png" class="card-img-top" alt="Imagem de bebidas">
          <div class="card-body">
            <h5 class="card-title">Bebidas 1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Adicionar</a>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class="card" style="width: 14rem;">
          <img src="/Assets/imagens/bebidas.png" class="card-img-top" alt="Imagem de bebidas">
          <div class="card-body">
            <h5 class="card-title">Bebidas 1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Adicionar</a>
          </div>
        </div>
      </div>
    </div>

  </section>

</main>
<?php require_once "view/layouts/footer.php"; ?>
