<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
</head>

<body>
<hr>
<div class="container">

    <div class="alert alert-primary" role="alert">
        Exercise - form
    </div>

    <form action="form.php" method="post">
        <label  class="sr-only" >Name : </label>
        <input   type="text"></p>
    </form>

    <div>
        <hr>

        <!-- The following content appears only when the form data is valid-->

        <div class="alert alert-primary" role="alert">
            Submit Result
        </div>

        <ul class="list-group">
            <li class="list-group-item">

                <!-- The value of each of the fields of the form is displayed using LI-->

            </li>
        </ul>

    </div>

</div>
<hr>
</body>

</html>