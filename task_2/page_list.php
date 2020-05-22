<?php
require_once "students.php";
require_once "page_one.php";
function getTypeText($typeCode, $typesData)
{
}

function isFullAge($age)
{
    if ($age >= 18) {
        return true;
    }
    return false;
}

$students = [
    [
        'name' => 'Viktor',
        'age' => 18,
        'type' => 11,
        'info' => '<div>Viktor orem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores labore quasi veniam animi eaque expedita alias autem illo sunt, repellendus.</div>
		<div>Impedit incidunt ipsam, aperiam cupiditate iure dolorem facere, ducimus nobis modi odit explicabo nulla, maiores rem eius autem qui eum?</div>'
    ],
    [
        'name' => 'Anna',
        'age' => 17,
        'type' => 22,
        'info' => '<div> Anna Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores labore quasi veniam animi eaque expedita alias autem illo sunt, repellendus.</div>
		<div>Impedit incidunt ipsam, aperiam cupiditate iure dolorem facere, ducimus nobis modi odit explicabo nulla, maiores rem eius autem qui eum?</div>'
    ],
    [
        'name' => 'Nick',
        'age' => 17,
        'type' => 11,
        'info' => '<div> Nick Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores labore quasi veniam animi eaque expedita alias autem illo sunt, repellendus.</div>
		<div>Impedit incidunt ipsam, aperiam cupiditate iure dolorem facere, ducimus nobis modi odit explicabo nulla, maiores rem eius autem qui eum?</div>'
    ],
    [
        'name' => 'Sam',
        'age' => 27,
        'type' => 22,
        'info' => '<div>Sam Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores labore quasi veniam animi eaque expedita alias autem illo sunt, repellendus.</div>
		<div>Impedit incidunt ipsam, aperiam cupiditate iure dolorem facere, ducimus nobis modi odit explicabo nulla, maiores rem eius autem qui eum?</div>'
    ],
];


$studentId = $_GET['studentId'];
$student = $students[$studentId] ;
$key = $_GET['studentId'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>l9 tasks</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Is Full Age</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($students as $key => $student): ?>
            <tr>
                <th scope="row"><?= $key ?></th>
                <td><?= $student['name'] ?></td>
                <td><?= $student['type'] ?></td>
                <td><?= isFullAge($student['age']) ? 'yes' : 'no' ?></td>
                <td><a href="page_one.php?studentId=<?= $key++ ?>">Show info</a></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>
</body>
</html>