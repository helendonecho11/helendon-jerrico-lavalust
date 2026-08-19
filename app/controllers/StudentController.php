<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    private function get_student_data()
    {
        return [
            'student_id' => 'MCC2025-01130',
            'name'       => 'Jerrico A. Helendon',
            'course'     => 'BS Information Technology',
            'year'       => '3rd Year',
            'section'    => 'F6',
            'email'      => 'helendonecho11@gmail.com',
            'address'    => 'Nazareth St. San Jose Subdivision, Brgy. Balite, Calapan City, Oriental Mindoro',
            'contact'    => '0935-502-9174',
            'status'     => 'Single'
        ];
    }

    public function index()
    {
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        $data['student'] = $this->get_student_data();
        $this->call->view('student_dashboard', $data);
    }

    public function profile()
    {
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        $data['student'] = $this->get_student_data();
        $this->call->view('student_profile', $data);
    }
}
?>