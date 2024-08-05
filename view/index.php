<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  </head>

  <body>

    <section>
      <header>
        <nav class="navbar shadow-sm bg-light" id="navbar">
           <div class="row w-100 align-items-center">
             <div class="col d-flex justify-content-start px-4">
                        <div class="btn-group me-2" role="group" aria-label="Basic example">
                            <input type="radio" class="btn-check" name="options-outlined" id="success-outlined" autocomplete="off" checked>
                            <label class="btn btn-outline-primary" for="success-outlined">Estudiante</label>

                            <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off">
                            <label class="btn btn-outline-primary" for="danger-outlined">Docente</label>
                        </div>
                        <form  method="POST">
                            <div class="input-group me-2">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                                <input type="text" class="form-control" id="usuario" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                <input type="text" id="id-rut" class="form-control" placeholder="rut" aria-label="rut" aria-describedby="btnrut">

                            </div>
                        </form>
                        <p class="usuario"></p>
                        <p class="rut"></p>
                        <button class="btn btn-primary me-2" type="submit" id="form-id">Buscar</button>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <h6 class="px-3 mb-0">Jaime David Guszman Rojas</h6>
                    </div>
                </div>
            </nav>
        </header>
    </section>
    <div class="container mt-4" id="container-main">
        <!-- Primera y segunda fila combinadas -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="card shadow-sm h-100">
                    <h5 class="card-header">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary" type="button">Generar Alerta</button>
                            <button class="btn btn-primary" type="button">Generar Gestion</button>
                        </div>
                    </h5>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li>
                                <img src="image-url" alt="Profile Picture" class="img-fluid rounded-circle" width="50" height="50">
                            </li>
                            <li><strong>Name:</strong> Jaime David Guszman Rojas</li>
                            <li><strong>RUT:</strong> 12345678-9</li>
                            <li><strong>Email:</strong> <a href="mailto:jaime@example.com">jaime@example.com</a></li>
                            <li><strong>Phone:</strong> +56 9 8765 4321</li>
                            <li><strong>Cell Phone:</strong> +56 9 8765 4321</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Offcanvas Menu -->
    <div class="offcanvas offcanvas-start show bg-mi-color" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">logo</h5>
        </div>
        <div class="offcanvas-body">
            <div class="d-grid gap-2">
                <a href="index.php" class="btn btn-offcanvas btn-sm d-flex align-items-center" type="button">
                    <i class="bi bi-file-text me-2" style="font-size: 1.5rem;"></i> Bitacora
                </a>
                <a href="filters.php" class="btn btn-offcanvas btn-sm d-flex align-items-center" type="button">
                    <i class="bi bi-file-text me-2" style="font-size: 1.5rem;"></i> Informes y filtros
                </a>
                <button class="btn btn-offcanvas btn-sm d-flex align-items-center" type="button">
                    <i class="bi bi-graph-up me-2" style="font-size: 1.5rem;"></i> Seguimiento carreras
                </button>
                <button class="btn btn-offcanvas btn-sm d-flex align-items-center" type="button">
                    <i class="bi bi-mortarboard me-2" style="font-size: 1.5rem;"></i> Seguimiento asignaturas
                </button>
                <button class="btn btn-offcanvas btn-sm d-flex align-items-center" type="button">
                    <i class="bi bi-journal-text me-2" style="font-size: 1.5rem;"></i> Seguimiento áreas P.A.
                </button>
                <button class="btn btn-offcanvas btn-sm d-flex align-items-center" type="button">
                    <i class="bi bi-person-lines-fill me-2" style="font-size: 1.5rem;"></i> Contacto estudiante
                </button>
            </div>
        </div>
    </div>
    <script src="../js/ajax.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>