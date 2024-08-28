<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        return[
            
            'content'=>$this->content,
            'user_id'=>$this->user_id,
            'post_id'=>$this->post_id,
        ];;
    }
}
