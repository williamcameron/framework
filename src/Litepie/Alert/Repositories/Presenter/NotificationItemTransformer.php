<?php

namespace Litepie\Alert\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class NotificationItemTransformer extends TransformerAbstract
{
    public function transform(\Litepie\Alert\Models\Notification $notification)
    {
        return [
            'id'                => $notification->getRouteKey(),
            'type'              => $notification->type,
            'notifiable_id'     => $notification->notifiable_id,
            'notifiable_type'   => $notification->notifiable_type,
            'data'              => $notification->data,
            'read_at'           => $notification->read_at,
            'status'            => trans('app.'.$notification->status),
            'created_at'        => format_date($notification->created_at),
            'updated_at'        => format_date($notification->updated_at),
        ];
    }
}