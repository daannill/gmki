<?php

session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $instuctor_id = $_SESSION['user_id'];
    $course_name = $_POST['course_name'];
    $short_description = $_POST['short_description'];
    $description = $_POST['description'];
    $difficulty = $_POST['difficulty'];
    $total_duration = $_POST['total_duration'];

    $koneksi->query("INSERT INTO `courses`(`course_id`, `instructor_id`, `course_name`, `short_description`, `description`, `thumbnail`, `difficulty`, `status`, `total_duration`, `created_at`, `updated_at`) VALUES ('10','$instuctor_id','$course_name','$short_description','$description','','$difficulty','','$total_duration','','')");
}