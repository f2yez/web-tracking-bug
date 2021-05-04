<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Drugs Shop</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    

<style>
    body {
        font-family: "Nunito", sans-serif;
        background-color: #eeeeee;
    }
    .container-space {
        margin-top: 2rem;
    }
    .product-thumbnails {
        display: flex;
        margin-top: 2rem;
    }
    .product-thumbnails > ul {
        display: flex;
        list-style: none;
        padding-left: 0;
    }
    .product-thumbnails > li {
        margin-right: 10px;
    }
    .product-thumbnails > ul > li > img {
        width: 100px;
        cursor: pointer;
    }
    .thumbnail-active {
        border: 2px solid #000;
    }
    .nav-link > img {
        width: 40px;
        border-radius: 8px;
        margin-right: 10px;
    }
    .btn-custom-color {
        border: 2px solid #4fc08d;
        color: #4fc08d;
    }
    .btn-custom-color:hover {
        border: 2px solid #4fc08d;
        background-color: #4fc08d;
        color: #ffffff;
    }

</style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
            <a class="navbar-brand" href="{{url('/')}}">Drugs Shop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/about-us')}}">About Us</a>
                </li>
                </ul>
                <form class="d-flex">
                <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            </div>
        </nav>
        <div class="container my-5">
            @yield('content')
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    </body>
</html>