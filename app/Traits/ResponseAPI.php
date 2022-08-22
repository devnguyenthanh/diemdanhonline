<?php

namespace App\Traits;

use Hash;
use InvalidArgumentException;

trait ResponseAPI
{
    /**
     * Core of response
     *
     * @param   string          $message
     * @param   array|object    $data
     * @param   integer         $statusCode
     * @param   boolean         $isSuccess
     */
    private function coreResponse($message, $data = null, $statusCode = 200, $isSuccess = true)
    {
        // Check the params
        if (!$message) return response()->json(['message' => 'Message is required'], 500);

        // Send the response
        if ($isSuccess) {
            return response()->json([
                'status_code' => $statusCode,
                'message' => $message,
                'data' => $data
            ], $statusCode);
        } else {
            return response()->json([
                'status_code' => $statusCode,
                'message' => $message,
                'errors' => $data,
            ], $statusCode);
        }
    }

    /**
     * Send any success response
     *
     * @param   string          $message
     * @param   array|object    $data
     * @param   integer         $statusCode
     */
    public function success($message, $data, $statusCode = 200)
    {
        return $this->coreResponse($message, $data, $statusCode);
    }

    /**
     * Send any error response
     *
     * @param   string          $message
     * @param   integer         $statusCode
     */
    public function error($message, $errors, $statusCode = 500)
    {
        return $this->coreResponse($message, $errors, $statusCode, false);
    }

    private function responseWithMeta($message, $data = null, $statusCode = 200, $isSuccess = true)
    {
        // Check the params
        if (empty($message)) {
            throw new InvalidArgumentException("Message is required");
        }

        // Send the response
        $re = [
            'status_code' => $statusCode,
            'message' => $message,
        ];

        if ($isSuccess) {
            $re['data'] = $data['data'];
        } else {
            $re['errors'] = $data['data'];
        }

        foreach ($data as $k => $v) {
            if ($k === 'data') {
                continue;
            }

            $re[$k] = $data[$k];
        }

        return response()->json($re, $statusCode);
    }

    public function successWithMeta($message, $data, $statusCode = 200)
    {
        return $this->responseWithMeta($message, $data, $statusCode);
    }
}
