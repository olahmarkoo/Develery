<!DOCTYPE html>
<html lang="hu">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Develery</title>
</head>
<body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <div class="container-fluid hatter">
        <div class="row justify-content-center align-items-center">
            <div class="col">

            </div>
            <div class="col">

            </div>
            <div class="col">

            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col">

            </div>
            <div class="col">
            <form action="feldolgozo.php" class="urlap" method="post">
                <div>
                    <label for="nevMezo" class="form-label">Neved</label>
                    <input type="textbox" class="form-control" id="nevMezo" name="nevMezo" placeholder="Kiss József">
                </div>

                <div>
                    <label for="emailMezo" class="form-label">Email címed</label>
                    <input type="email" class="form-control" id="emailMezo" name="emailMezo" placeholder="kiss.jozsef@email.com">
                </div>

                <div>
                    <label for="uzenetMezo" class="form-label">Üzenet szövege</label>
                    <textarea class="form-control" id="uzenetMezo" name="uzenetMezo" rows="10" placeholder="Kérlek írd le röviden a kérdésedet!"></textarea>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" id="submitGomb" name="submitGomb" class="btn btn-primary">Küldés</button>
                </div>

            </form>
            </div>
            <div class="col">

            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col">

            </div>
            <div class="col">

            </div>
            <div class="col">

            </div>
        </div>
    </div>

</body>
</html>