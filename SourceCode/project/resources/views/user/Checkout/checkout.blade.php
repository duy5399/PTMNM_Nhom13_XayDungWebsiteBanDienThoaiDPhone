@extends('user.Layouts.master')
@section('content')

<?php

function displayResultsAsTable($resultsArray) {
// argument must be an array
    $val = '<table width="100%" border="1" cellspacing="0" cellpadding="3" bordercolor="#ffcccc" style="text-align:center;">
  <tr>
    <th>Id</th> 
    <th>Tên sản phẩm</th>
    <th>Đơn giá</th>
    <th>Hình ảnh</th>
    <th>Số lượng</th> 
    <th>Số lượng tồn</th> 
    <th>Thành tiền</th> 
  </tr>';
    if (is_array($resultsArray)) {
        foreach ($resultsArray as $key => $value) {
            $val .= '<tr>';
            foreach ($value as $f_key => $f_val) {
                $val .= '<td>' . $f_val . '</td>';
            }
            $val .= '</tr>';
        }
        $val .= '</table>';
        return $val;
    }
}
?>
<?php
if (isset($_SESSION["cart"]["buy"])) {
    if (isset($_POST['btn_order_now'])) {
        $error = array();
        // Kiểm tra user_id
        if (empty($_POST['user_id'])) {
            $error['user_id'] = "Không được để trống Mã khách hàng";
        } else {
            $user_id = $_POST['user_id'];
        }

        // Kiểm tra fullname
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống Họ tên";
        } else {
            $fullname = $_POST['fullname'];
        }

        // Kiểm tra email
        if (empty($_POST['email'])) {
            $error['email'] = "Không được để trống Email";
        } else {
            if (1/*is_email($_POST['email'])*/) {
                $error['email'] = "Email không đúng định dạng";
            } else { // khớp định dạng
                $email = $_POST['email'];
            }
        }

        // Kiểm tra address
        if (empty($_POST['address'])) {
            $error['address'] = "Không được để trống Địa chỉ";
        } else {
            $address = $_POST['address'];
        }

        // Kiểm tra phone
        if (empty($_POST['phone'])) {
            $error['phone'] = "Không được để trống Số điện thoại";
        } else {
            if (1/*!is_phone_number($_POST['phone'])*/) {
                $error['phone'] = "Số điện thoại không đúng định dạng mời quý khách kiểm tra lại";
            } else {
                $phone = $_POST['phone'];
            }
        }

        //Kiểm tra ghi chú
        if (!empty($_POST['note'])) {
            $note = $_POST['note'];
        }
        // Bước 3: Kết luận
        if (empty($error)) {
            $sql = "INSERT INTO `bill` (`user_id`,`fullname`,`email`,`phone`,`address`, `note`)"
                    . "VALUES('{$user_id}','{$fullname}', '{$email}','{$phone}','{$address}', '{$note}')";
            if ($conn->query($sql)) {
                $bill_id = $conn->insert_id;
                //Lưu chi tiết hóa đơn
                //$list_buy = get_list_by_cart();
//                show_array($list_buy);
                foreach ($list_buy as $cart) {
                    $product_id = $cart['id'];
                    $product_name = $cart['product_name'];
                    $product_thumb = $cart['product_thumb'];
                    $qty = $cart['qty'];
                    $price_new = $cart['price_new'];
                    $sub_total = $cart['sub_total'];
                    $sql = "INSERT INTO `bill_detail` (`bill_id`,`product_id`,`product_name`,`product_thumb`,`qty`,`price_new`,`sub_total`)"
                            . "VALUES('{$bill_id}','{$product_id}', '{$product_name}', '{$product_thumb}','{$qty}','{$price_new}','{$sub_total}')";
                    $conn->query($sql);
                }
                unset($_SESSION["cart"]);
                ?>
                <p>Chúc mừng bạn đã thanh toán thành công.</p>
                <p>Mã hóa đơn #<?= $bill_id ?></p>
                <?php
                $content = '
                <h1 style="color:red;">Thông báo đơn hàng hoàn tất</h1>
                <p>Chào <b>' . $fullname . '</b></p>'
                        . '<p>Đơn hàng #<b>' . $bill_id . '</b> của bạn đã hoàn tất.</p>'
                        . 'Cảm ơn bạn đã mua hàng tại ISMART.<br> Thông tin đơn hàng của bạn: <b> ' . displayResultsAsTable($list_buy) . '</b>
                <p>Rất mong được phục vụ bạn trong những lần mua tiếp theo.</p>
                ';
                //echo send_mail("$email", "$fullname", 'Thông báo đơn hàng', "$content");
                //redirect_to("?mod=check_out&act=care_customer");
            }
        } else {
            ?> 
            <?php
        }
    }
}
//show_array($list_buy);
?>
<div id="main-content-wp" class="checkout-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="{{asset('/')}}" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="{{asset('cart/show')}}" title="">Giỏ hàng</a>
                    </li>
                    <li>
                        <a href="" title="">Thanh toán</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <form method="post" action="" name="form-checkout">
        <div id="wrapper" class="wp-inner clearfix">
            <?php
            if (empty($list_buy)) {
                ?>
                <div class="section" id="customer-info-wp">
                    <div class="section-head">
                        <h1 class="section-title">Thông tin khách hàng</h1>
                    </div>
                    <div class="section-detail">
                        <div class="form-row clearfix">
                            <div class="form-col fl-left">
                                <label for="user_id">Mã khách hàng</label>
                                <input type="text" value="{{$user->id}}" name="user_id" id="user_id" readonly="true">
                            </div>
                            <div class="form-col fl-right">
                                <label for="fullname">Họ tên</label>
                                <input type="text" value="{{$user->fullname}}" name="fullname" id="fullname">
                            </div>
                        </div>
                        <div class="form-row clearfix">
                            <div class="form-col fl-left">
                                <label for="email">Email</label>
                                <input type="email" value="{{$user->email}}" name="email" id="email">
                            </div>
                            <div class="form-col fl-right">
                                <label for="phone">Số điện thoại</label>
                                <input type="tel" value="{{$user->phone}}" name="phone" id="phone">
                            </div>
                        </div>
                        <div class="form-row clearfix">
                            <div class="form-col fl-left">
                                <label for="address">Địa chỉ</label>
                                <input type="text" value="{{$user->address}}" name="address" id="address">
                                <?php
                                if (!empty($error['address'])) {
                                    ?>
                                    <p class="error"><?php //echo $error['address']; ?></p>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="form-col fl-right">
                                <input type="hidden" value="{{$user->username}}" name="username" id="username">
                            </div>
<!--                            <div class="form-col fl-right">
                                <label for="gender">Giới tính</label>
                                <select name="gender" id="gender">
                                    <option <?php if (isset($list_users['gender']) && $list_users['gender'] == 'male') echo "selected='selected'"; ?> value="male">Nam</option>
                                    <option <?php if (isset($list_users['gender']) && $list_users['gender'] == 'female') echo "selected='selected'"; ?> value="female">Nữ</option>
                                </select>
                            </div>-->
                        </div>
                        <div class="form-row">
                            <div class="form-col">
                                <label for="notes">Ghi chú</label>
                                <textarea name="note" style="height: 150px;width: 555px;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section" id="order-review-wp">
                    <div class="section-head">
                        <h1 class="section-title">Thông tin đơn hàng</h1>
                    </div>
                    <div class="section-detail">
                        <table class="shop-table">
                            <thead>
                                <tr>
                                    <td>Sản phẩm</td>
                                    <td>Tổng</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($list_cart as $item) {
                                    ?>
                                    <tr class="cart-item">
                                        <td class="product-name">{{$item->name}}<strong class="product-quantity"> x {{$item->qty}}</strong></td>
                                        <td class="product-total">{{number_format($item->price*$item->qty,0,',','.')}} VNĐ</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr class="order-total" style="font-size:18px;">
                                    <td >Tổng đơn hàng:</td>
                                    <td style="color:red;"><strong class="total-price">{{Cart::total()}} VNĐ</strong></td>
                                </tr>
                            </tfoot>
                        </table>
                        <!--                        <div id="payment-checkout-wp">
                                                    <ul id="payment_methods">
                                                        <li>
                                                            <input type="radio" id="direct-payment" checked="checked" name="payment" value="online">
                                                            <label for="direct-payment">Thanh toán online</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="payment-home" name="payment" value="cod">
                                                            <label for="payment-home">Thanh toán tại nhà</label>
                                                        </li>
                                                    </ul>
                                                </div>-->
                        <div class="place-order-wp clearfix">
                            <input type="submit" id="btn_order_now" name="btn_order_now" value="Đặt hàng">
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        {{csrf_field()}}
    </form>
</div>

@endsection