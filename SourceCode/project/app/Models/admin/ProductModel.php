<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $primaryKey = 'product_id';
    protected $guarded = []; //không có trường nào được bảo vệ => có thể tương tác hết tất cả trường dữ liệu
}
