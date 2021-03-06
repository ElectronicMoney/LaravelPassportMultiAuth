<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;

class AdminResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'body' => [
                'id' => $this->id,
                'adminRoleId' => $this->admin_role_id,
                'name' => $this->name,
                'email' => $this->email,
                'emailVerifiedAt' => $this->email_verified_at,
                'created' => $this->created_at,
                'updated' => $this->updated_at,
            ],
            'url' => [
                'link' => route('admin.admins.index', $this->id),
            ],
        ];
    }
}

