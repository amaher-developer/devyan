<?php


namespace App\Devyan\Interfaces\Resources;


interface ResourceInterface
{
    public function get($input);

    public function all(): ?array;
}
