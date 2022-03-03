<?php
$skills = [
    [
        "exp" => "+ 5 years",
        "title" => "Object programming & frameworks",
        "tech" => "PHP, Symfony, Laravel, Silex, …"
    ],
    [
        "exp" => "+ 3 years",
        "title" => "Design integration",
        "tech" => "Style and tools, JS Frameworks"
    ],
    [
        "exp" => "+ 6 years",
        "title" => "Linux",
        "tech" => "Scripting, Servers management and protocols, Automation"
    ]
]
?>

<div class="sections">
    <h2 class="section-title">Skills</h2>

    <?php
    foreach ($skills as $skill) {
        ?>

        <div class="list-card">
            <span class="exp"><?= $skill["exp"] ?></span>
            <div>
                <h3><?= $skill["title"] ?></h3>
                <span><?= $skill["tech"] ?></span>
            </div>
        </div>

    <?php } ?>

</div>