<?php

// namespace App\Http\Resources;

// use Illuminate\Http\Request;
// use Illuminate\Http\Resources\Json\JsonResource;

// class RentalObjectResource extends JsonResource
// {
//     /**
//      * Transform the resource into an array.
//      *
//      * @return array<string, mixed>
//      */
//     public function toArray(Request $request): array
//     {
//         return [
//             'id' => $this->id,
//             'user_id' => $this->user_id,
//             'title' => $this->title,
//             'descr' => $this->descr,
//             'created_at' => $this->created_at->format('d/m/Y'),
//             'updated_at' => $this->updated_at->format('d/m/Y'),
//             'title', 'descr', 'rate', 'object_status', 'object_type', '', 'object_address_id', 'area', 'floor', 'floors_number',
//             'single_beds', 'double_beds', 'rooms', 'max_guests_per_request', 'max_families_per_time', 'bathrooms', 'min_cost_per_day',
//             'bail', 'no_children', 'no_pets', 'no_smoking', 'no_alcohol', 'no_party', 'check_in_time', 'check_out_time',
//         ];
//     }
// }