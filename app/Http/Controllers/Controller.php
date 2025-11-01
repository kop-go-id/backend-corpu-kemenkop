<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function success($data, $message, $paginated = false)
    {
        return response()
            ->json([
                'message' => $message,
                'data' => $data
            ]);
    }
}
