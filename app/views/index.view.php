<?php include("partials/header.php"); ?>
    <h3>
        Welcome
        <?php
        echo $_GET["name"];;
        ?>
    </h3>

    <br>



    <br>
    <br>
    <h3>Enter user name</h3>
    <form method="POST" action="/name">
        <label>
            Name
            <input name="name"/>
        </label>
        <button type="submit" class="btn btn-success">SUBMIT</button>

    </form>
<?php include("partials/footer.php"); ?>