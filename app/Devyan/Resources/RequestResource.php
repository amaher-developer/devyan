<?php


namespace App\Devyan\Resources;

use App\Devyan\Interfaces\Resources\ResourceInterface;
use Illuminate\Http\Request;

class RequestResource implements ResourceInterface
{
    private $resource;

    public function __construct(Request $request)
    {
        $this->resource = $request;
    }

    public function get($input)
    {
        return $this->resource->get($input);
    }

    public function all(): ?array
    {
        return $this->resource->all() ?? null;
    }
}
