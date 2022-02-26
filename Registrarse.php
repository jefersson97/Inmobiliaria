<?php
if ($_POST) {
    ?>
    <form>
        <fieldset>
            <legend>Registrarse</legend>



            <div class="form-group">
                <label for="exampleSelect1" class="form-label mt-4">Example select</label>
                <select class="form-select" id="exampleSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>



            </div>
            <div class="form-group">
                <label for="exampleSelect2" class="form-label mt-4">Example multiple select</label>
                <select multiple="" class="form-select" id="exampleSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleTextarea" class="form-label mt-4">Example textarea</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="formFile" class="form-label mt-4">Default file input example</label>
                <input class="form-control" type="file" id="formFile">
            </div>
            <fieldset class="form-group">
                <legend class="mt-4">Radio buttons</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                        Option one is this and that—be sure to include why it's great
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                        Option two can be something else and selecting it will deselect option one
                    </label>
                </div>
                <div class="form-check disabled">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
                        Option three is disabled
                    </label>
                </div>
            </fieldset>
            <fieldset class="form-group">
                <legend class="mt-4">Checkboxes</legend>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Default checkbox
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                    <label class="form-check-label" for="flexCheckChecked">
                        Checked checkbox
                    </label>
                </div>
            </fieldset>
            <fieldset>
                <legend class="mt-4">Switches</legend>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                </div>
            </fieldset>
            <fieldset class="form-group">
                <legend class="mt-4">Ranges</legend>
                <label for="customRange1" class="form-label">Example range</label>
                <input type="range" class="form-range" id="customRange1">
                <label for="disabledRange" class="form-label">Disabled range</label>
                <input type="range" class="form-range" id="disabledRange" disabled="">
                <label for="customRange3" class="form-label">Example range</label>
                <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
            </fieldset>
            <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
    </form>






    Segunda parte
    <div class="form-group">
        <fieldset disabled="">
            <label class="form-label" for="disabledInput">Disabled input</label>
            <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled="">
        </fieldset>
    </div>

    <div class="form-group">
        <fieldset>
            <label class="form-label mt-4" for="readOnlyInput">Readonly input</label>
            <input class="form-control" id="readOnlyInput" type="text" placeholder="Readonly input here..." readonly="">
        </fieldset>
    </div>

    <div class="form-group has-success">
        <label class="form-label mt-4" for="inputValid">Valid input</label>
        <input type="text" value="correct value" class="form-control is-valid" id="inputValid">
        <div class="valid-feedback">Success! You've done it.</div>
    </div>

    <div class="form-group has-danger">
        <label class="form-label mt-4" for="inputInvalid">Invalid input</label>
        <input type="text" value="wrong value" class="form-control is-invalid" id="inputInvalid">
        <div class="invalid-feedback">Sorry, that username's taken. Try another?</div>
    </div>



    <div class="form-group">
        <label class="col-form-label mt-4" for="inputDefault">Default input</label>
        <input type="text" class="form-control" placeholder="Default input" id="inputDefault">
    </div>

    <div class="form-group">
        <label class="col-form-label col-form-label-sm mt-4" for="inputSmall">Small input</label>
        <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" id="inputSmall">
    </div>

    <div class="form-group">
        <label class="form-label mt-4">Input addons</label>
        <div class="form-group">
            <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">.00</span>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-primary" type="button" id="button-addon2">Button</button>
            </div>
        </div>
    </div>


    
    
    
    
    
    
    
    
    
    
        <div class="form-group">
        <label class="col-form-label col-form-label-lg mt-4" for="inputLarge"></label>
        <input class="form-control form-control-lg" type="text" placeholder="Nombres y apellidos" id="inputLarge">
    </div>
    
        <div class="form-group">
        <label class="col-form-label col-form-label-lg mt-4" for="inputLarge"></label>
        <input class="form-control form-control-lg" type="text" placeholder="Numero de celular o telefono" id="inputLarge">
    </div>

    <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Correo electronico</label>
        <div class="col-sm-10">
            <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="Ejemplo@misena.edu.co">
        </div>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label mt-4">Correo electronico</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1" class="form-label mt-4">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
<center> <button type="button" class="btn btn-primary">Registarte </button> </center>
    <?php
} else {
    header("location:.././");
}
?>