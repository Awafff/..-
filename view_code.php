<?php
session_start();

// التحقق من وجود نوع البروجكت أو الكود، اسمه، الإصدار، الكود وكلمة المرور في الجلسة
if (!isset($_SESSION['project_type'], $_SESSION['project_name'], $_SESSION['code_version'], $_SESSION['code_input']) || !isset($_POST['password']) || $_POST['password'] !== 'FAHED&RIO88801') {
    header("Location: create.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Code</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <?php include 'nav.php'; ?>

    <main>
        <section>
            <h2>View Code</h2>
            <p><?php echo ($_SESSION['project_type'] === 'project') ? 'Project' : 'Code'; ?> Name: <?php echo $_SESSION['
            project_name']; ?> Code Version:    <?php include 'footer.php'; ?>