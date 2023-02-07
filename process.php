<?php
require 'dist/postgres_con.php';

$teacher_id = $_POST['teacher_id'];
$subject_name = $_POST['subject_name'];
$subject_time = $_POST['subject_time'];
$subject_desc = $_POST['subject_desc'];

$result = insert_course_with_params($teacher_id,
                                    $subject_name,
                                    $subject_time,
                                    $subject_desc);

if($result) {
    echo "Records created successfully\n";
} else {
    echo "Records created failed\n";
}