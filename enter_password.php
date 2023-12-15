<?php
session_start();

// التحقق من وجود نوع البروجكت أو الكود، اسمه، الإصدار، والكود في الجلسة
if (!isset($_SESSION['project_type'], $_SESSION['project_name'], $_SESSION['code_version'], $_SESSION['code_input'])) {
    header("Location: create.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Password</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <?php include 'nav.php'; ?>

    <main>
        <section>
            <h2>Enter Password</h2>
            <form action="view_code.php" method="post">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <input type="submit" value="Access Code">
            </form>
        </section>
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>