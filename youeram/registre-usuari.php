<?php include 'templates/header.php';?>

    <div class="container">
        <div class="col-md-10">
            <form action="api/registre-usuari.php" method="post">
                <div class="col">
                    <input  type="text" class="form-control" name="nom" placeholder="nom">
                </div>
                <div class="col">
                    <input  type="number" class="form-control" name="any-entrada" placeholder="any_entrada">
                </div>
                <div class="col">
                    <input  type="text" class="form-control" name="especial" placeholder="especialització">
                </div>
                <div class="col">
                    <input type="password" class="form-control" name="pwd" placeholder="password">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"> Mantenir sessió oberta</label>
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
