<?php
    require ('model/database.php');
    require ('model/assignments_db.php');
    require ('model/course_db.php');

    $assignment_id = filter_input(INPUT_POST, 'assignment_id', FILTER_VALIDATE_INT);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
    $course_name = filter_input(INPUT_POST, 'course_name', FILTER_SANITIZE_STRING);

    $course_id = filter_input(INPUT_POST, 'course_id', FILTER_VALIDATE_INT);