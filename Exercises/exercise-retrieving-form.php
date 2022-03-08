<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
</head>

<body>
<?php $isFormDataValid = true; ?>
<hr>
<div class="container">

    <div class="alert alert-primary" role="alert">
        Exercise - form
    </div>

    <form action="exercise-retrieving-form.php" method="post" class="was-validated">
        <!--            Div for name-->
        <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="userName" placeholder="Name">
                <?php
                if (isset($_POST['userName'])) {
                    if (strlen($_POST['userName']) > 50) { ?>
                        <div class="invalid-feedback d-block">Length of name should not be greater than 50</div>
                        <?php
                        $isFormDataValid = false;
                    }
                }
                ?>
            </div>
        </div>
        <!--            Div for age-->
        <div class="form-group row">
            <label for="inputAge" class="col-sm-2 col-form-label">Age</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="userAge" placeholder="Age">

                <?php
                if (isset($_POST['userAge'])) {
                    if ((intval($_POST['userAge']) < 18 || intval($_POST['userAge']) > 150)) {
                        ?>
                        <div class="invalid-feedback d-block">Age should be Between 18 to 150</div>
                        <?php
                        $isFormDataValid = false;
                    }
                }
                ?>

            </div>

        </div>
        <!--                                                Div for email-->
        <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="userEmail" placeholder="Email" name="userEmail">
                <?php
                if (isset($_POST['userEmail']) && strlen($_POST['userEmail']) != 0) {
                    if (!str_contains(($_POST['userEmail']), "@")) {
                        ?>
                        <div class="invalid-feedback d-block">Email needs to contain "@" symbol</div>
                        <?php
                        $isFormDataValid = false;
                    }
                }
                ?>
            </div>
        </div>
        <!--                                                    Div for passwords-->
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="userPassword" name="userPassword"
                       placeholder="password">

                <?php
                if (isset($_POST['userPassword'])) {
                    if (strlen($_POST['userPassword']) > 50) {
                        ?>
                        <div class="invalid-feedback d-block">Password can only have maximum 50 Characters</div>
                        <?php
                        $isFormDataValid = false;
                    }
                }
                ?>
            </div>
        </div>
        <!--                                        Div for Birthday-->
        <div class="form-group row">
            <label for="inputBirthday" class="col-sm-2 col-form-label">Date Of Birth</label>
            <div class="col-sm-10">
                <input type="date" value="YYYY-MM-DD" class="form-control " id="userBirthday" name="userDOB"
                       data-date-format="yyyy-mm-dd">
                <div class="invalid-feedback">Must be 18 years old and above</div>
                <?php
                if (isset($_POST['userDOB'])) {
                    $birthDate = ($_POST['userDOB']);
                    $toArray = explode("-", $birthDate);
                    $currentYear = date("Y");
                    $differenceInYear = intval($currentYear) - intval($toArray[0]);


                    if ($differenceInYear < 18) {
                        ?>
                        <div class="invalid-feedback d-block">Age should be greater than 18 years</div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
        <!--                Div for Simple Selection-->
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Simple Selection</label>
            <select class="form-select form-select-sm col-sm-10" name="simpleSelect">
                <option selected> Option 1</option>
                <option value="1">Option 2</option>
                <option value="2">Option 3</option>
                <option value="3">Option 4</option>
            </select>
        </div>
        <!--                Div for Multiple Selection-->

        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Multiple Selection</label>

            <div class="col-sm-10">
                <select class="form-control" multiple="multiple" name="multipleSelection[]">
                    <option selected value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                    <option value="4">Option 4</option>
                </select>
                <?php
                if (isset($_POST["multipleSelection"]) && sizeof($_POST["multipleSelection"]) < 2) { ?>
                    <div class='invalid-feedback d-block'>Minimum of 2 options to be selected</div>
                <?php }
                ?>
            </div>
        </div>
        <!                                                  --Message -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Message</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
            </div>
        </div>
        <!                                              --Radio Button-->
        <fieldset class="form-group">
            <div class="form-group row">
                <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                               value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                            First radio
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                               value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Second radio
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3"
                               value="option3">
                        <label class="form-check-label" for="gridRadios3">
                            Third Radio
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <!--                                                    Checkbox-->
        <div class="form-group row">
            <div class="col-sm-2">Checkbox</div>

            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1" name="checkbox[]" checked>
                    <label class="form-check-label" for="gridCheck1">
                        Example checkbox 1
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck2" name="checkbox[]">
                    <label class="form-check-label" for="gridCheck2">
                        Example checkbox 2
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck3" name="checkbox[]">
                    <label class="form-check-label" for="gridCheck3">
                        Example checkbox 3
                    </label>
                    <div class="invalid-feedback"> Select atleast 2 check boxes</div>

                </div>
                <?php
                if (isset($_POST["checkbox"]) && sizeof($_POST["checkbox"]) < 2) { ?>
                    <div class='invalid-feedback d-block'>Minimum of 2 options to be selected</div>
                <?php }
                ?>

            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </div>

    </form>

    <div>
        <hr>

        <!--                     The following content appears only when the form data is valid-->
        <?php
        if ($isFormDataValid) {
            ?>

            <div class="alert alert-primary" role="alert">
                Submit Result
            </div>

            <ul class="list-group">

                <?php
                foreach ($_POST as $key => $value
                ) {
                    ?>
                    <li class="list-group-item">
                        <!-- The value of each of the fields of the form is displayed using LI-->
                        <?php
                        if (gettype($value) == "string")
                            echo $key . " : " . $value;
                        else
                            echo $key . ": " . implode($value);
                        ?>

                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>

</div>
<hr>
</body>

</html>