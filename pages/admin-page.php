<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Css länkar -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css">

    <!-- Styling länkar -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&family=Playfair+Display&display=swap">
    <link rel="stylesheet" href="./assets/style.css">

    <title>Startsida</title>
</head>
<body>
    <?php require_once('./scripts/check-login-user.php'); ?>

    <?php if($user && isset($_GET['id'])) : ?>

        <?php require_once('./crud/get-todo.php'); ?>

        <form action="/crud/update-todo.php?id=<?= $todo["id"] ?>" method="post">
            <h4 class="text-center p-3">Update task</h4>
            <div class="input-group mb-3">
                <input class="form-control" type="text" name="title" placeholder="Need to do..." value="<?= $todo["title"] ?>" required>
                <input class="form-control" type="date" name="date" aria-label="Task date" value="<?= $todo["date"] ?>" required>
                <button class="btn btn-outline-primary" type="submit">Update</button>
            </div>
        </form>

    <?php endif; ?>
</body>
</html>