<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillDetailModel extends Model
{
    use HasFactory;

    protected $table = 'billdetail';
    protected $primaryKey = ['bill_id', 'product_id'];
    protected $guarded = []; //không có trường nào được bảo vệ => có thể tương tác hết tất cả trường dữ liệu
    public $incrementing = false;
    
}
