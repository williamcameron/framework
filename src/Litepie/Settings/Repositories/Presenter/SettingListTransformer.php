<?php

namespace Litepie\Settings\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class SettingListTransformer extends TransformerAbstract
{
    public function transform(\Litepie\Settings\Models\Setting $setting)
    {
        return [
            'id'                => $setting->getRouteKey(),
            'skey'              => $setting->skey,
            'name'              => $setting->name,
            'value'             => $setting->value,
            'type'              => $setting->type,
            'status'            => trans('app.'.$setting->status),
            'created_at'        => format_date($setting->created_at),
            'updated_at'        => format_date($setting->updated_at),
        ];
    }
}