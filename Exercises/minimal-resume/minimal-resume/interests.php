<?php
$interest = [
    ["field" => "Scripting languages",
        "tech" => "PHP, JS, Bash, Python",
    ],
    ["field" => "Hacking",
        "tech" => "Linux, Crawlers, Bots, Network",
    ]
]
?>


<div class="sections">
<h2 class=" section-title">Interests</h2>
<?php
foreach ($interest as $interests)
{
?>
<div class="list-card">
    <div>
        <h3><?= $interests["field"] ?></h3>
        <span><?= $interests["tech"] ?></span>
    </div>
</div>
<?php }
?>
</div>