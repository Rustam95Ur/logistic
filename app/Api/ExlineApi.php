<?php

namespace App\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class ExlineApi
{
    /**
     * @var \GuzzleHttp\Client
     */
    private static $client;

    /**
     * Initialize the http client
     *
     * @param string $host
     * @param int $port
     */

    public static function Init()
    {
        ExlineApi::$client = new Client(
            [
                'base_uri' => env('EXLINE_API_URL'),
            ]
        );
        \Log::info('ClientAPI init');
    }

    /**
     * @param $uri
     * @param array $options
     * @return \Psr\Http\Message\ResponseInterface
     */
    private static function Get($uri, $options = [])
    {
        sprintf('[GET] %s', $uri);

        return ExlineApi::$client->get($uri, $options);
    }

    /**
     * @param $uri
     * @param $options
     * @return \Psr\Http\Message\ResponseInterface
     */
    private static function Post($uri, $options)
    {
        sprintf('[POST] %s', $uri);
        return ExlineApi::$client->post($uri, $options);
    }

    /**
     * @param $uri
     * @param array $options
     * @return \Psr\Http\Message\ResponseInterface
     */
    private static function Put($uri, $options = [])
    {
        sprintf('[PUT] %s', $uri);
        return ExlineApi::$client->put($uri, $options);
    }

    /**
     * @return APIResponse
     */
    public static function getOrigin(): APIResponse
    {
        $response = new APIResponse;
        $city_name = env('EXLINE_ORIGIN');
        try {
            $res = ExlineApi::Get('regions/origin', array(
                    'query' => array(
                        'title' => $city_name
                    ),
                )
            );
            $response->SetPayloadJSON($res->getBody()->getContents());
        } catch (ClientException $cex) {
            $err = json_decode($cex->getResponse()->getBody()->getContents());
            $response->SetErrorReason($err);
        } catch (\Exception $exception) {
            $response->SetErrorReason($exception->getMessage());
        }
        return $response;
    }

    /**
     * @param $country
     * @return APIResponse
     */
    public static function getDestinations($country): APIResponse
    {
        $response = new APIResponse;
        try {
            $res = ExlineApi::Get('regions/destinations', array(
                    'query' => array(
                        'country' => $country
                    ),
                )
            );
            $response->SetPayloadJSON($res->getBody()->getContents());
        } catch (ClientException $cex) {
            $err = json_decode($cex->getResponse()->getBody()->getContents());
            $response->SetErrorReason($err);
        } catch (\Exception $exception) {
            $response->SetErrorReason($exception->getMessage());
        }
        return $response;
    }

    public static function getCalculate($origin_id, $destination_id, $weight): APIResponse
    {
        $response = new APIResponse;
        try {
            $res = ExlineApi::Get('calculate', array(
                    'query' => array(
                        'origin_id' => $origin_id,
                        'destination_id' => $destination_id,
                        'weight' => $weight,
                    ),
                )
            );
            $response->SetPayloadJSON($res->getBody()->getContents());
        } catch (ClientException $cex) {
            $err = json_decode($cex->getResponse()->getBody()->getContents());
            $response->SetErrorReason($err);
        } catch (\Exception $exception) {
            $response->SetErrorReason($exception->getMessage());
        }
        return $response;
    }
}
