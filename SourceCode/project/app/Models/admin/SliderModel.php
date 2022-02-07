<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
{
    use HasFactory;

    protected $table = 'slider';
    protected $primaryKey = 'slider_id';
    protected $guarded = []; //không có trường nào được bảo vệ => có thể tương tác hết tất cả trường dữ liệu
}
