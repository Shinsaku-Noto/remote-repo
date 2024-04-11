<?php

include 'class/employee-act.php';

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
            <p class="text-center display-5 dw-bold">Employee Activity</p>
            <div class="row">
                <div class="col">
                    <form action="employee-UI.php" method="post">
                        <p class="mb-2 fw-bold">Name</p>
                        <input name="name" type="text" class="form-control mb-3">
                        <p class="mb-2 fw-bold">Civil Status</p>
                        <select name="civil_status" class="form-select mb-3">
                            <option value="" hidden>Select your Civil Status</option>
                            <option value="Single">Single</option>
                            <option value="Marriged">Married</option>
                        </select>
                        <div class="row mb-3">
                            <div class="col">
                                <p class="mb-2 fw-bold">Position</p>
                                <select name="position" class="form-select">
                                    <option value="" hidden>Select your Position</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Staff">Staff</option>
                                </select>
                            </div>
                            <div class="col">
                                <p class="mb-2 fw-bold">Employment Status</p>
                                <select name="employment_status" class="form-select">
                                    <option value="" hidden>Select your Emplyment Status</option>
                                    <option value="Contractual">Contractual</option>
                                    <option value="Probationaly">Probationaly</option>
                                    <option value="Regular">Regular</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col"></div>
                            <div class="col">
                                <p class="mb-2 fw-bold">Number of Hours Worked</p>
                                <input name="hours" type="number" class="form-control">
                            </div>
                            <div class="col"></div>
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary w-100">Calculate</button>
                    </form>
                </div>

                <?php 
                    if(isset($_POST['submit'])){
                        $name = $_POST['name'];
                        $civil_status = $_POST['civil_status'];
                        $position = $_POST['position'];
                        $employment_status = $_POST['employment_status'];
                        $hours = $_POST['hours'];

                        $employee = new Employee($civil_status, $position, $employment_status, $hours);

                ?>

                <div class="col">
                    <table class="table table-striped">
                        <tr>
                            <th>Name:</th>
                            <td><?php echo $name;?></td>
                        </tr>
                        <tr>
                            <th>Civil Status:</th>
                            <td><?php echo $civil_status;?></td>
                        </tr>
                        <tr>
                            <th>Position:</th>
                            <td><?php echo $position;?></td>
                        </tr>
                        <tr>
                            <th>Employment Status:</th>
                            <td><?php echo $employment_status;?></td>
                        </tr>
                        <tr>
                            <th class="bg-warning">Total Hours Worked:</th>
                            <td class="bg-warning"><?php echo $hours;?></td>
                        </tr>
                        <tr>
                            <th>Regular Pay:</th>
                            <td><?php echo $employee->getRegularPay();?></td>
                        </tr>
                        <tr>
                            <th>Overtime Hours:</th>
                            <td><?php echo $employee->getOvertimeHours();?></td>
                        </tr>
                        <tr>
                            <th>Overtime Pay:</th>
                            <td><?php echo $employee->getOvertimePay();?></td>
                        </tr>
                        <tr>
                            <th>Gross Income:</th>
                            <td><?php echo $employee->getGrossIncome();?></td>
                        </tr>
                        <tr>
                            <th class="bg-danger text-white">Tax Deductions:</th>
                            <th class="bg-danger text-white"><?php echo $employee->getTaxDeductions();?></th>
                        </tr>
                        <tr>
                            <th class="bg-primary text-white">Healthcare Deductions:</th>
                            <th class="bg-primary text-white"><?php echo $employee->getHealthcareDeductions();?></th>
                        </tr>
                        <tr>
                            <th class="bg-black text-white">Net Income:</th>
                            <th class="bg-black text-white"><?php echo $employee->getNetIncome();?></th>
                        </tr>
                    </table>
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
