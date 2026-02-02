<?php

declare(strict_types=1);

?>

<h2><?= $pokemon->name ?></h2>
<img src=<?= $pokemon->getImageUrl() ?>>
<p>
    <a href="/">Go back</a>
</p>