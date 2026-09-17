<?php

//Database Connection
$host = "localhost';
$db =   'library_db';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
]
try{

    $pdo = new PDO($dsn, $user, $pass, $options);
    echo 'connection successful';
} catch (\PDOException $e) {
    die("Database connection failed" . $e->getMessage());
}

// Session
session_start();

//Determine the current section
$section = $_GET['section'] ?? 'students';

// Determine the CRUD operation
$action = $_GET['action'] ?? '';

// Fetch Students
if($section==='students'){

    $stmt = $pdo->("
SELECT * 
FROM students
ORDER BY student_id DESC
");

$students = $stmt->fetchAll();
}



?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library System</title>
</head>
<body>
    <hi>Simple Library System</h1>
    <nav>
        <a href="index.php?section=studentsstudents">Students</a> 
        <A href="index.php?section=books">Books</a>
        <a href="index.php?section=borrow">Borrow</a>
    </nav>
    <hr>
    <?php if($section === 'students'): ?>
        <h1>Students</h1>
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Course</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($students as student): ?>
                    <tr>
                        <td>
                            <?=htmlspecialchars($student['student_id'])?>
                        </td>
                    <tr>
                <thead>
                <tbody>
                    <?php foreach($students as $student): ?>
                        <tr>
                            <td><?=htmlspecialchars($student['student_id'])?></td>
                            <td><?=htmlspecialchars($student['first_name'])?></td>
                            <td><?=htmlspecialchars($student['last_name'])?></td>
                            <td><?=htmlspecialchars($student['course'])?></td>
                            <td><?=htmlspecialchars($student['created_at'])?></td>
                            <td>
                                <a>Edit</a>

                                <a>Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>


            
    <?php endif; ?>

    <?php if($section === 'books'): ?>
        <h1>Books</h1>
    <?php endif; ?>

    <?php if($section === 'borrow'): ?>
        <h1>Borrow</h1>
    <?php endif; ?>


</body>
</html>