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
          return [

            'id'=>$this->id,

            'first_name'=>$this->first_name,

            'last_name'=>$this->last_name,

            'email'=>$this->email,

            'phone'=>$this->phone,

            'position'=>$this->position,

            'salary'=>$this->salary,

            'hire_date'=>$this->hire_date,

            'created_at'=>$this->created_at,

        ];
    }
}
