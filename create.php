<?php
// التحقق من أن كلمة المرور صحيحة قبل الوصول إلى صفحة create.php
$password = isset($_GET['password']) ? $_GET['password'] : '';
if ($password !== 'FAHED&RIO88801') {
    // كلمة المرور غير صحيحة، يمكن توجيه المستخدم لصفحة أخرى أو إجراء إجراء آخر
    echo "كلمة المرور غير صحيحة";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Project or Code</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <?php include 'nav.php'; ?>

    <main>
        <section>
            <h2>Create Project or Code</h2>
            <form action="create_process.php" method="post">
                <label for="project_type">Project or Code:</label>
                <select id="project_type" name="project_type" required>
                    <option value="project">Project</option>
                    <option value="code">Code</option>
                </select>

                <label for="project_name">Name:</label>
                <input type="text" id="project_name" name="project_name" required>

                <label for="code_version">Code Version:</label>
                <select id="code_version" name="code_version" required>
                    <option value="v13">Version 13</option>
                    <option value="v14">Version 14</option>
                </select>

                <label for="code_input">Enter Code:</label>
                <textarea id="code_input" name="code_input" rows="4" required></textarea>

                <input type="submit" value="Create">
            </form>
        </section>
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>