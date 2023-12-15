<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <?php include 'nav.php'; ?>

    <main>
        <section>
            <h2>تسجيل الدخول</h2>
            <form action="login_process.php" method="post">
                <label for="username">اسم المستخدم:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">كلمة المرور:</label>
                <input type="password" id="password" name="password" required>

                <input type="submit" value="تسجيل الدخول">
            </form>
        </section>
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>