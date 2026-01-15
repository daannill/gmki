<?php
session_start();

$courses_query = $koneksi->query("SELECT `course_id`, `instructor_id`, `course_name`, `short_description`, `thumbnail`, `difficulty`, `total_duration`, `created_at`, `updated_at` FROM `courses`;");
