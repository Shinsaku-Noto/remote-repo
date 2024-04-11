<?php

include 'class/age-act.php';

?>


<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>

        <div class="container">
            <div class="w-50 m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <p>DETERMINE AGE APP v1.0</p>
                    </div>
                    <div class="card-body p-2">
                        <form action="age-UI.php" method="post">
                            <input name="first_name" type="text" class="form-control mt-3" placeholder="FIRSTNAME">
                            <input name="last_name" type="text" class="form-control mt-3" placeholder="LASTNAME">
                            <input name="birth_year" type="text" class="form-control mt-3" placeholder="BIRTH YEAR">
                            <input name="current_year" type="text" class="form-control mt-3" placeholder="CURRENT YEAR">
                            <button name="submit" type="submit" class="btn btn-outline-primary mt-3">submit</button>
                        </form>
                        <?php if(isset($_POST['submit'])){
                            $first_name = $_POST['first_name'];
                            $last_name = $_POST['last_name'];
                            $birth_year = $_POST['birth_year'];
                            $current_year = $_POST['current_year'];

                            $age = new AGE ($first_name, $last_name, $birth_year, $current_year);
                        ?>
                        <p class="p-2 bg-success bg-opacity-25 mt-4">The name is <?php echo $age->getFirstName();?></p>
                        <p class="p-2 bg-success bg-opacity-25 mt-2">The last name is <?php echo $age->getLastName();?></p>
                        <p class="p-2 bg-success bg-opacity-25 mt-2">The age is <?php echo $age->getAge();?></p>

                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
