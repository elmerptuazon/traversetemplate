<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Responses\IResponseService;
use App\Enums\SuccessMessages;

class OrderController extends Controller
{

    private IResponseService $responseService;
    
    public function __construct(IResponseService $responseService)
    {
        $this->responseService = $responseService;
    }

    public function search(Request $request) {
        $result = [];

        // return json_encode('sdf');

        return $this->responseService->successResponse(array($result), SuccessMessages::success);
    }
}
