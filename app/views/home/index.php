<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
    <title>Hospital Management System</title>
</head>

<body>
    <div class="container">
        <h3 class="text-center text-uppercase text-success my-3">Quan ly benh nhan</h3>
        <a href="<?= DOMAIN . '/app/views/patient/add.php'; ?>" class="btn btn-success">Them benh nhan</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Full name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($patients as $patient) {
                ?>
                    <tr>
                        <th scope="row"><?= $patient->getId(); ?></th>
                        <td><?= $patient->getFullname(); ?></td>
                        <td><?= $patient->getGender(); ?></td>
                        <td><?= $patient->getDateOfBirth(); ?></td>
                        <td><?= $patient->getAddress(); ?></td>
                        <td><?= $patient->getMobile(); ?></td>
                        <td>
                            <a href="<?= DOMAIN . '/app/views/patient/edit.php?id=' . $patient->getId(); ?>">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td><a href="<?= DOMAIN . '/app/views/patient/remove.php?id=' . $patient->getId(); ?>">
                                <i class="bi bi-trash3-fill"></i>
                            </a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>