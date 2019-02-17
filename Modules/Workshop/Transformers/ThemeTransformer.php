<?php

namespace Modules\Workshop\Transformers;

use Illuminate\Http\Resources\Json\Resource;

class ThemeTransformer extends Resource
{
    public function toArray($request)
    {
        return [
            'name' => $this->getName(),
            'version' => $this->version,
            'type' => $this->type,
            'active' => $this->active,
        ];
    }
}
