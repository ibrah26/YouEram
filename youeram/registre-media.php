<?php include 'templates/header.php';?>

    <div class="container">
        <div class="col-md-10">
            <form action="api/registre-media.php" method="post">
                <div class="col">
                    <input  type="text" class="form-control" name="titol" placeholder="titol">
                </div>
                <div class="col">
                    <input  type="text" class="form-control" name="descripcio" placeholder="descripció">
                </div>
                <div class="col">
                    <input  type="text" class="form-control" name="assignatura" placeholder="assignatura">
                </div>
                <div class="col">
                    <input  type="text" class="form-control" name="nomtreball" placeholder="nom treball">
                </div>
                <div class="col">
                    <input  type="number" class="form-control" name="any-entrada" placeholder="promocio">
                </div>
                <div class="col">
                    <input  type="number" class="form-control" name="curs" placeholder="curs">
                </div>
                <div class="col">
                    <input  type="text" class="form-control" name="url" placeholder="url">
                </div>


                <button type="submit" class="btn btn-default">Enviar</button>
            </form>
        </div>
    </div>

<!--<script src="lib/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="lib/bootstrap/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
--></body>
</html>
