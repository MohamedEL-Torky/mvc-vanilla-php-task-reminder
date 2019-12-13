<?php include("partials/header.php"); ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Task Description</th>
            <th scope="col">Completed</th>
        </tr>
        </thead>
        <tbody>

        <h3>Enter Task name</h3>

        <form method="POST" action="/task">
            <label>
                Description
                <input name="task"/>
            </label>
            <button type="submit" class="btn btn-success">SUBMIT</button>

        </form>


        <?php foreach ($tasks as $key => $task) : ?>
            <tr>
                <th scope="row"><?= $key ?></th>
                <?php if ($task->isCompleted()) : ?>

                    <td><strike><?= $task->getDescription(); ?></strike></td>
                    <td>YES</td>

                <?php else : ?>

                    <td><?= $task->getDescription(); ?></td>
                    <td>NO</td>


                <?php endif; ?>
            </tr>

        <?php endforeach; ?>


        </tbody>
    </table>
<?php include("partials/footer.php"); ?>