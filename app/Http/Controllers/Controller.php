<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Summary of sendResponse
     * @param string $message
     * @param mixed $data
     * @param int $code
     * @param array $headers
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function sendResponse(string $message, $data, int $code = Response::HTTP_OK, array $headers = [])
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $data,
        ], $code, $headers);
    }

    /**
     * Summary of sendError
     * @param string $message
     * @param mixed $errors
     * @param int $code
     * @param array $headers
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function sendError(string $message, $errors = [], int $code = 400, array $headers = [])
    {
        return response()->json([
            'success' => false,
            'message' => $message,
            'errors' => $errors,
        ], $code, $headers);
    }
}
