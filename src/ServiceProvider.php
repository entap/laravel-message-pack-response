<?php
namespace Entap\Laravel\Response\MessagePack;

use MessagePack\Packer;
use Illuminate\Support\Facades\Response;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        Response::macro('mpac', function ($data) {
            if ($data instanceof Arrayable) {
                $data = $data->toArray();
            }
            return response((new Packer())->pack($data))->header(
                'Content-Type',
                'application/x-msgpack'
            );
        });
    }
}
