<?php
include 'templates/header.php';
include 'api/media-singular.php';?>

<div class="col-12">
    <div class="container">
        <h1></h1>

            <?php echo $text; ?>
        <div class="col-md-10">
            <form action="api/votacio-media.php?id='<?php echo $id_get_url ?>'" method="post">
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio1" id="inlineRadio1" value="1"> 1
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio1" id="inlineRadio2" value="2"> 2
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio1" id="inlineRadio3" value="3"> 3
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio1" id="inlineRadio4" value="4"> 4
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio1" id="inlineRadio5" value="5"> 5
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio1" id="inlineRadio6" value="6"> 6
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio1" id="inlineRadio7" value="7"> 7
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio1" id="inlineRadio8" value="8"> 8
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio1" id="inlineRadio9" value="9"> 9
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio1" id="inlineRadio10" value="10"> 10
                    </label>
                </div>
                <br>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio2" id="inlineRadio1" value="1"> 1
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio2" id="inlineRadio2" value="2"> 2
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio2" id="inlineRadio3" value="3"> 3
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio2" id="inlineRadio4" value="4"> 4
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio2" id="inlineRadio5" value="5"> 5
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio2" id="inlineRadio6" value="6"> 6
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio2" id="inlineRadio7" value="7"> 7
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio2" id="inlineRadio8" value="8"> 8
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio2" id="inlineRadio9" value="9"> 9
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio2" id="inlineRadio10" value="10"> 10
                    </label>
                </div>
                <br>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio3" id="inlineRadio1" value="1"> 1
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio3" id="inlineRadio2" value="2"> 2
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio3" id="inlineRadio3" value="3"> 3
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio3" id="inlineRadio4" value="4"> 4
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio3" id="inlineRadio5" value="5"> 5
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio3" id="inlineRadio6" value="6"> 6
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio3" id="inlineRadio7" value="7"> 7
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio3" id="inlineRadio8" value="8"> 8
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio3" id="inlineRadio9" value="9"> 9
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio3" id="inlineRadio10" value="10"> 10
                    </label>
                </div>
                <br>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio4" id="inlineRadio1" value="1"> 1
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio4" id="inlineRadio2" value="2"> 2
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio4" id="inlineRadio3" value="3"> 3
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio4" id="inlineRadio4" value="4"> 4
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio4" id="inlineRadio5" value="5"> 5
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio4" id="inlineRadio6" value="6"> 6
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio4" id="inlineRadio7" value="7"> 7
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio4" id="inlineRadio8" value="8"> 8
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio4" id="inlineRadio9" value="9"> 9
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="valoracio4" id="inlineRadio10" value="10"> 10
                    </label>
                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
            </form>
        </div>
    </div>







</div>

<?php include 'templates/footer.php';?>

