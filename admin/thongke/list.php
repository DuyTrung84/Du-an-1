<h3>Thống kê sản phẩm từng loại</h3>
<table>
    <thead>
        <tr>
            <th>Loại hàng</th>
            <th>Số lượng</th>
            <th>Giá cao nhất</th>
            <th>Giá thấp nhất</th>
            <th>Giá trung bình</th>
        </tr>

    </thead>

    <tbody>
    <?php 
        require '../../dao/thongke.php';
        require 'index.php';
        $items= thong_ke_hang_hoa();
        foreach($items as $item){
            extract($item);
    ?>
            <tr>
            <td><?= $ten_loai  ?></td>
            <td><?= $so_luong ?></td>
            <td>$<?= number_format($gia_min,2) ?></td>
            <td>$<?= number_format($gia_max,2) ?></td>
            <td>$<?= number_format($gia_avg,2) ?></td>
            </tr>
    <?php        
        }

    ?>
        
        
    </tbody>
</table>
<div>
    <a href="index.php?chart">Xem biểu đồ</a>
</div>
