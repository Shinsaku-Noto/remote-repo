<?php

include 'class/calculator-act.php';

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

        <div class="contianer">
            <div class="card w-75 m-auto">
                <div class="card-header">
                    <p class="fs-5 mb-0">Calculator with OOP</p>
                </div>
                <div class="card-body">
                    <form action="calculator-UI.php" method="post">
                        <p class="mb-0">Enter first number</p>
                        <input type="text" name="num1" class="form-control mt-3">
                        <p class="mb-0">Enter second number</p>
                        <input type="text" name="num2" class="form-control my-3">
                        <input type="radio" name="cal" value="add"><span>Addition</span>
                        <input type="radio" name="cal" value="sub"><span>Subtraction</span>
                        <input type="radio" name="cal" value="mul"><span>Multiplication</span>
                        <input type="radio" name="cal" value="div"><span>Division</span>
                        <button type="submit" name="submit" class="btn btn-primary mt-3 d-block">Calculate</button>
                    </form>
                    <?php
                        if(isset($_POST['submit'])){
                            $num1 = $_POST['num1'];
                            $num2 = $_POST['num2'];
                            $cal = $_POST['cal'];

                            $calculator = new Calculator($num1, $num2, $cal);
                    ?>
                    <p class="p-2 bg-success bg-opacity-25 mt-3">
                        The Answer is <?php echo $calculator->getResult();?>
                    </p>



                    <?php  } ?>
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
