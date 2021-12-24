<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Proizvodi</title>

</head>

<body>
    <nav class="navbar navbar-expand nav-color ">
        <div class="container">
            <div class="nav navbar-nav">
                <a class="nav-item nav-link active" href="proizvodi.php">Proizvodi <span class="visually-hidden">(current)</span></a>
                <a class="nav-item nav-link" id="korpa" href="korpa.php">Korpa <span id="broj_proizvoda"></span></a>
                <a class="nav-item nav-link" href="provera_porudzbine.php">Provera porudzbine</a>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="col-4">
            <div class="mb-3">
                <label for="" class="form-label"></label>
                <select class="form-control" name="" id="kategorija-select">
                    <option value="0">Izaberite kategoriju...</option>
                    <option value="1">Apoteka</option>
                    <option value="2">Nega i lepota</option>
                    <option value="3">Deciji kutak</option>
                </select>
            </div>
        </div>
        <div class="row mt-2 nav-color p-4" id="proizvodi">
            <div class="col-4 mt-2">
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Proizvod</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto,
                            voluptatibus non ex officia id vel. Illum consectetur nemo inventore corrupti?</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mt-2">
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Proizvod</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto,
                            voluptatibus non ex officia id vel. Illum consectetur nemo inventore corrupti?</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mt-2">
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Proizvod</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto,
                            voluptatibus non ex officia id vel. Illum consectetur nemo inventore corrupti?</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mt-2">
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Proizvod</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto,
                            voluptatibus non ex officia id vel. Illum consectetur nemo inventore corrupti?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>