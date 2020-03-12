<?php


namespace App\Http\Controllers\Traits;


trait ResponseBag
{
    public function basic($data = null, $message = "SUCCESS", $interNalCode = 20000, $httpCode = 200)
    {
        $response = [
            'message' => $message,
            'code' => $interNalCode,
            'data' => $data
        ];

        return response()->json($response, $httpCode);
    }

    public function success($data = null, $message = "SUCCESS")
    {
        return $this->basic($data, $message, 20000, 200);
    }

    public function failed($message = "Request Failed")
    {
        return $this->basic(null, $message, 40000, 400);
    }

    public function notfound($message = "Resource Not Found")
    {
        return $this->basic(null, 40400, 404);
    }
}