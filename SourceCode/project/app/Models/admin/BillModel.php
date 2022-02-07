<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillModel extends Model
{
    use HasFactory;

    protected $table = 'bill';
    protected $primaryKey = 'bill_id';
    protected $guarded = []; //không có trường nào được bảo vệ => có thể tương tác hết tất cả trường dữ liệu
}
