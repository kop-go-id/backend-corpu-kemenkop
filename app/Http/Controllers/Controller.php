<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function success($data, $message, $paginated = false)
    {
        return response()
            ->json([
                'message' => $message,
                'data' => $paginated ? $data->items() : $data,
                'pagination' => $paginated ? [
                    'current_page' => $data->currentPage(),
                    'last_page' => $data->lastPage(),
                    'page_size' => $data->perPage(),
                    'total' => $data->total()
                ] : null
            ]);
    }

    public function error($message)
    {
        return response()
            ->json([
                'error' => $message,
                'message' => $message
            ]);
    }
}
