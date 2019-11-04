<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// closure
use App\Closures\Notification;

class Product extends Model
{
    protected $connection = 'mysql';
    protected $table = 'products';
    protected $guarded = ['id'];

    /* ========== 發布商品 ========== */

    public function publish($operator)
    {
        $notification = new Notification;
        call_user_func($operator, $notification);

        $results = [];

        foreach($notification->selected as $platform){
            // 發送通知
            $result = true;

            $results[] = [
                'platform' => $platform,
                'success' => $result,
                'message' => $result ? $platform.' 已收到商品發佈通知' : $platform.' 通知發布失敗',
            ];
        }

        return $results;
    }

}
