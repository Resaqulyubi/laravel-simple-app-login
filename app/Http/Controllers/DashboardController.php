<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Mock data for demonstration
        $data = [
            'stats' => [
                'totalStudents' => 150,
                'totalCourses' => 12,
                'activeClasses' => 8
            ],
            'recentActivities' => [
                [
                    'id' => 1,
                    'description' => 'New student registration',
                    'timestamp' => '2024-12-20 10:30:00'
                ],
                [
                    'id' => 2,
                    'description' => 'Course completion: Introduction to Programming',
                    'timestamp' => '2024-12-20 09:15:00'
                ],
                [
                    'id' => 3,
                    'description' => 'New assignment posted: Mathematics 101',
                    'timestamp' => '2024-12-19 16:45:00'
                ]
            ]
        ];

        return response()->json($data);
    }
}
