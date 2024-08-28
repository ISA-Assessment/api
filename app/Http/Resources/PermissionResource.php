<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PermissionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

        return array(
            'id' => $this->permission_id,
            'entity' => ucfirst($this->entity),
            'permissionAbility' => [
                'id' => $this->permissionAbility->permission_ability_id,
                'ability' => ucfirst($this->permissionAbility->ability)
            ],
        );
    }
}
