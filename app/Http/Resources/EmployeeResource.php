<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

        return [
            'id' => $this->employee_id,
            'name' => $this->name,
            'surname' => $this->surname,
            'email' => $this->user->email,
            'position' => ucfirst($this->position->name),
            'status' => ucfirst($this->user->status),
            'startDate' => $this->start_date,
        ];
    }
}
