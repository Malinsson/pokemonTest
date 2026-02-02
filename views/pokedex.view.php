<?php

declare(strict_types=1);

?>

<ul>
    <?php foreach ($monsters as $monster): ?>
        <li>
            <a href="/pokemon?id=<?= $monster->id; ?>">
                <?= $monster->name; ?>
            </a>
        </li>
    <?php endforeach ?>
</ul>