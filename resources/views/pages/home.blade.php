@include('layouts.head', ['title' => 'Home'])

<nav class="navbar navbar-expand-lg fixed-top" style="background: rgb(255, 223, 182);">
    <div class="container">
        <a class="navbar-brand fw-bold" style="color: #3b3b0d;" href="#">Sekaa Teruna Teruni</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto" style="margin-right: 10px">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <a class="btn btn-secondary" href="/login">
                <i class="bi bi-person-lock" style="font-size: 15px;"></i>
                <span>Login</span>
            </a>
        </div>
    </div>
</nav>

<div class="container py-2 mt-5">
    <div id="home" class="my-4 input-group mx-auto">
        <span style="background: rgb(255, 223, 182);" class="input-group-text" id="basic-addon1"><i
                class="bi bi-search"></i></span>
        <input type="text" class="form-control">
    </div>

    <div class="d-flex flex-wrap gap-3 justify-content-center my-3">
        @for ($i = 0; $i < 6; $i++)
            <div class="card" style="width: 20rem;">
                <img src="https://i.pinimg.com/736x/01/11/53/011153d1cc99a9f4c45feb71fa18a38b.jpg" class="card-img-top"
                    alt="picture">
                <div class="card-body">
                    <h5 class="card-title"><a href="#">Judul Berita</a></h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos veritatis
                        saepe....
                    </p>
                </div>
            </div>
        @endfor
    </div>
</div>

@include('layouts.foot')
