<?php

namespace App\Http\Controllers\Shipping;

use App\Api\ExlineApi;
use App\Http\Controllers\Controller;

class ExlineController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    protected function getOrigin()
    {
        $getOrigin = ExlineApi::getOrigin();
        if ($getOrigin->IsSuccessful()) {
            $result = $getOrigin->GetPayload();
            return \Response::json($result['regions'], 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
        } else {
            \Log::info(print_r($getOrigin->GetErrorReason(), true));
        }
    }

    /**
     * @param $country
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    protected function getDestinations($country)
    {
        $getOrigin = ExlineApi::getDestinations($country);
        if ($getOrigin->IsSuccessful()) {
            $result = $getOrigin->GetPayload();
            return \Response::json($result['regions'], 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
        } else {
            \Log::info(print_r($getOrigin->GetErrorReason(), true));
        }
    }

    /**
     * @param $origin_id
     * @param $destination_id
     * @param $weight
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    protected function getCalculate($origin_id, $destination_id, $weight)
    {
        $getOrigin = ExlineApi::getCalculate($origin_id, $destination_id, $weight);
        if ($getOrigin->IsSuccessful()) {
            $result = $getOrigin->GetPayload();
            return \Response::json($result['calculations'], 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
        } else {
            \Log::info(print_r($getOrigin->GetErrorReason(), true));
        }
    }
}
