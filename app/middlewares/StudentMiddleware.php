<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware
{
    public function handle($next)
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['student_access'] = true; // unique access flag for this lab

        if ($_SESSION['student_access'] === true) {
            return $next();
        } else {
            redirect('student');
        }
    }
}
?>