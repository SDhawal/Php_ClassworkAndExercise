<?php
//Not the idealist associative array but one required for learning. DO NOT MODIFY
$forms = [
    ["action" => "management.php", "method" => "post"],
    ["type" => "text", "id" => "lastName", "name" => "lastName", "label" => "Last Name"],
    ["type" => "text", "id" => "firstName", "name" => "firstName", "label" => "First Name"],
    ["type" => "password", "id" => "pwd", "name" => "pwd", "label" => "Password"],
    ["type" => "checkbox", "id" => "enroll", "name" => "enroll", "label" => "Enroll"],
    ["type" => "checkbox", "id" => "terms", "name" => "terms", "label" => "Accept Terms & Conditions"],
    ["type" => "submit", "id" => "submit", "name" => "input", "label" => "Sent"],
    ["type"=> $_POST['type'],"id"=> $_POST['id'],"name"=>$_POST['name'],"label"=>$_POST['label']]
];

?>
<html>
<title>form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container w3-blue">
    <h2>My Form</h2>
</div>

<form class="w3-container w3-card-4 w3-grey"  action="<?= $forms[0]['action']?>" method="<?= $forms[0]['method']?>" >


    <p>
        <label class="w3-text-white"><b><?php echo $forms[1]['label']?></b></label>
        <input class="w3-input w3-border" name="<?php echo $forms[1]['name']?>" type="text"></p>
    <p>
        <label class="w3-text-white"><b><?php echo $forms[2]['label']?></b></label>
        <input class="w3-input w3-border" name="<?php echo $forms[2]['name']?>" type="text"></p>
    <p>
        <label class="w3-text-white"><b><?php echo $forms[3]['label']?></b></label>
        <input class="w3-input w3-border" name="<?php echo $forms[3]['name']?>" type="password"></p>
    <label class="w3-text-white" > <?php echo $forms[4]['label']?></label>
    <input type="checkbox" name="<?php echo $forms[4]['name']?>" >
    <br>
    </p>
    <p>
        <label class="w3-text-white"><?php echo $forms[5]['label']?></label>
        <input type="checkbox" name="<?php echo $forms[5]['name']?>">
    </p>
    <p>
        <label class="w3-text-white"><?php echo $forms[7]['label']?></label>
        <input type="<?= $forms[7]['type']?>" name="<?php echo $forms[7]['name']?>" id="<?php echo $forms[7]['id']?>">
    </p>
    <button class="w3-btn w3-Indigo" style="width: 1340px" type="submit"><?php echo $forms[6]['id']?></button></p>
</form>




</body>
</html>