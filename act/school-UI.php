<?php

include 'class/school-act.php';

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

        <div class="container-fluid">
            <div class="w-50 m-auto mt-5 p-3">
                <form action="school-UI.php" method="post">
                    <p class="mb-0">Students Name</p>
                    <input name="name" type="text" class="form-control mt-2">
                    <p class="mb-0 mt-3">Year Level</p>
                    <select name="year" class="form-select">
                        <option value="" hidden>Choose your year level</option>
                        <option value="1">first year</option>
                        <option value="2">second year</option>
                        <option value="3">third year</option>
                        <option value="4">fourth year</option>
                    </select>
                    <p class="mb-0 mt-3">Total Units</p>
                    <input type="text" name="units" class="form-control" placeholder="Maximum of 23" max="23">
                    <div class="text-center mt-3">
                        <input type="radio" name="lab" value="with"><span class="ms-2">With lab</span>
                        <input type="radio" name="lab" value="without" class="ms-2"><span class="ms-2">Without lab</span>
                    </div>
                    <button type="submit" name="submit" class="btn btn-dark w-100 p-2 mt-3">Submit</button>
                </form>
                <?php
                    if(isset($_POST['submit'])){
                        $name = $_POST['name'];
                        $year = $_POST['year'];
                        $units = $_POST['units'];
                        $lab = $_POST['lab'];

                        $school = new School($name, $year, $units, $lab);
                    
                ?>

                <div class="border p-2 mt-3">
                    <div class="pb-2">
                        <span>Student name: </span><p class="d-inline fw-bold"><?php echo $name ?></p>
                    </div>
                    <div class="pb-2">
                        <span>Year level: </span><p class="d-inline fw-bold"><?php echo $year ?></p>
                    </div>
                    <div class="pb-2">
                        <span>No. of units: </span><p class="d-inline fw-bold"><?php echo $units ?></p>
                    </div>
                    <div class="pb-2">
                        <p class="d-inline fw-bold">Total Price: <?php echo number_format($school->getPrice(), 2) ?></p><p class="d-inline fw-bold"><?php echo $school->getLab() ?></p>
                    </div>
                </div>

                <?php } ?>
                
                
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
