<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UNAB Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar { background-color: #f7931e; }
        .navbar-brand, .nav-link { color: white !important; }
        .carousel-item { text-align: center; background: #8dc63f; color: white; padding: 50px; }
        .category-card { border: 2px solid #f7931e; border-radius: 10px; text-align: center; padding: 20px; }
        .category-card h5 { color: #f7931e; }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">UNAB Tienda</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Promociones</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Categorías</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Carrusel -->
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <h1>Nuestra Gente UNAB</h1>
            <p>Comunidad diversa y unida</p>
        </div>
        <div class="carousel-item">
            <h1>Descubre nuestros productos</h1>
            <p>Desde electrónica hasta libros y moda</p>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- Categorías -->
<div class="container mt-5">
    <h2 class="text-center">Categorías de Productos</h2>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="category-card">
                <h5>Electrónica</h5>
                <p>Descubre los últimos dispositivos electrónicos.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="category-card">
                <h5>Libros</h5>
                <p>Explora nuestra colección de libros.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="category-card">
                <h5>Ropa</h5>
                <p>Encuentra la mejor ropa y accesorios.</p>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <p>&copy; 2025 UNAB Tienda. Todos los derechos reservados.</p>
        <p>
            <a href="#">Aviso Legal</a> | 
            <a href="#">Política de Privacidad</a> | 
            <a href="#">Términos y Condiciones</a>
        </p>
        <p>Síguenos en:
            <a href="#">Facebook</a> | 
            <a href="#">Instagram</a> | 
            <a href="#">Twitter</a>
        </p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

