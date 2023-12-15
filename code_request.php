<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>طلب الأكواد</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <?php include 'nav.php'; ?>

    <main>
        <section>
            <h2>طلب الأكواد</h2>
            <form action="code_request_process.php" method="post">
                <label for="code_description">وصف الكود المطلوب:</label>
                <textarea id="code_description" name="code_description" rows="4" required></textarea>

                <label for="additional_info">معلومات إضافية:</label>
                <input type="text" id="additional_info" name="additional_info">

                <input type="submit" value="إرسال الطلب">
            </form>
        </section>
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>