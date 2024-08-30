<?php
namespace App\Services\Impl;
use App\Http\Requests\CreateRequestItemRequest;
use App\Services\RequestItemService;
use App\Models\RequestItem;
use App\Services\ProductService;
use Illuminate\Support\Str;
use DB;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Response as Resp;
class RequestItemServiceImpl implements RequestItemService
{
    private $productService;   
    public function __construct(ProductService $productService){
        $this->productService = $productService;
    }

    public function create(CreateRequestItemRequest $request)
    {       
        try {
            DB::transaction(function () use ($request) {
                $requestItem =RequestItem::create([
                    'id'=>Str::uuid(),
                    'nik' => $request->nik,
                    'request_no' => 'INV-'.date('Ymdhis'),
                    'request_date' => $request->request_date,
                ]);
        
                $itemDetails = [];
                foreach ($request->carts as $key => $item) {
                    array_push($itemDetails, [
                        'id'=>Str::uuid(),
                        'product_id' => $item['product']['id'],
                        'product_name'=>$item['product']['name'],
                        'location'=> $item['product']['location'],
                        'unit'=>$item['product']['unit'],
                        'quantity' => $item['quantity']
                    ]);
                    $this->productService->decrementProductStock($item['product']['id'], $item['quantity']);
                }
                $requestItem->requestItemDetails()->createMany($itemDetails);
            });
        } catch (\Throwable $th) {
            throw new HttpResponseException(
                response()->json([
                    'data'=> $th->getMessage(),
                    'status'=>Resp::$statusTexts[500],
                    'code'=>Resp::HTTP_BAD_REQUEST],500)
            );
        }


    }

    public function getRequestsItems()
    {
        return RequestItem::with('employee')->get();
    }
}