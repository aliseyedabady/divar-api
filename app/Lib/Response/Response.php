<?php

namespace  App\Lib\Response;

class Response
{
    public static function manual(array $data = null, string $status, $code, $message)
    {
        return response()->json(['status' => $status, 'message' => trans($message), 'data' => $data], $code);
    }

    public static function success(array $data = null, $message = '')
    {
        return response()->json(['status' => 'success', 'message' => trans($message), 'data' => $data], 200);
    }

    public static function error(array $data = null, $message)
    {
        return response()->json(['status' => 'error', 'message' => trans($message), 'data' => $data], 400);
    }

    public static function not_found_error(array $data = null, $message)
    {
        return response()->json(['status' => 'error', 'message' => trans($message), 'data' => $data], 404);
    }

    public static function auth_error(array $data = null, $message)
    {
        return response()->json(['status' => 'error', 'message' => trans($message), 'data' => $data], 401);
    }

    public static function forbidden_error(array $data = null, $message)
    {
        return response()->json(['status' => 'error', 'message' => trans($message), 'data' => $data], 403);
    }

    public static function validator_error(array $data = null, $message)
    {
        return response()->json(['status' => 'error', 'message' => $message, 'data' => $data], 422);
    }

    public static function missing_error()
    {
        return response()->json(['status' => 'error', 'message' => trans('messages.missing_route_binding'), 'data' => null], 404);
    }

    public static function exception_error($e = '')
    {
        return response()->json(['status' => 'error', 'message' => $e, 'data' => null], 500);
    }
}
