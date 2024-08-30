<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequestItemRequest;
use App\Services\ProductService;
use App\Services\RequestItemService;

class RequestItemController extends Controller
{ 
    private RequestItemService $requestItemService;

    public function __construct(RequestItemService $requestItemService,ProductService $productService)
    {
        $this->requestItemService = $requestItemService;
    }
    public function create(CreateRequestItemRequest $request){
        $this->requestItemService->create($request);
        return response()->ok([]);
    }

    public function getRequestsItems(){
        return response()->ok($this->requestItemService->getRequestsItems());
    }
}
