<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    </head>
    <body style="background-color: #f3e5ab;">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fd7e14;">
    <div class="container-fluid">
        <a style= "color: #fcf4a3;" class="navbar-brand" href="/"><i class="bi bi-book pe-2"></i><b>StudyIt!</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a style="color: #f3e5ab;" class="nav-link fw-bold" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
            <a style="color: #f3e5ab;" class="nav-link fw-bold" href="/customer">Pendaftar Kursus TOEFL</a>
            </li>
            
        </ul>
        <form class="d-flex" method="GET" action="/customer">
            <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-warning" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>
        <div class="container mt-3">
            @yield('content')
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
    </body>
</html>