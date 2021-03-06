<?php

namespace Litepie\Alert\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Litepie\Database\Model;
use Litepie\Hashids\Traits\Hashids;
use Litepie\Repository\Traits\PresentableTrait;

class Notification extends Model
{
    use SoftDeletes, Hashids, PresentableTrait;

    /**
     * Configuartion for the model.
     *
     * @var array
     */
     protected $config = 'litepie.alert.notification';

    /**
     * Get the notifiable entity that the notification belongs to.
     */
    public function notifiable()
    {
        return $this->morphTo();
    }

}
