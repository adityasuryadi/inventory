<?php
namespace App\Services;
use App\Http\Requests\CreateRequestItemRequest;

interface RequestItemService
{
    public function create(CreateRequestItemRequest $request);
    public function getRequestsItems();
}