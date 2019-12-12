<?php include("partials/header.php"); ?>
    <h3>
        Welcome
        <?php
        echo $_GET["name"];;
        ?>
    </h3>

    <ul>

        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->isCompleted()) : ?>

                    <strike><?= $task->getDescription(); ?></strike>

                <?php else : ?>

                    <?= $task->getDescription(); ?>

                <?php endif; ?>
            </li>

        <?php endforeach; ?>

    </ul>
<?php include("partials/footer.php"); ?>