<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthBaseController extends Controller
{
    // success response
    public function sendResponse($result, $message) {
        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message,
        ];

        return response()->json($response, 200);
    }

    // error response
    public function sendError($error, $message, $errorCode = 404) {
        $response = [
            'success' => false,
            'message' => $error,
        ];

        if(!empty($message)) {
            $response['data'] = $message;
        }

        return response()->json($response, $errorCode);
    }
} 