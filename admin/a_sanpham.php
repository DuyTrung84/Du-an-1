<?php 
    include 'inc/header.php';
?>

            <article>
                <?php
                    require '../dao/pdo.php';
                    require '../dao/san_pham.php';
                ?>
                <div class="show">
                    <div class="title">
                        <h2>Quản lý SP</h2>
                        <a href="in_sanpham.php">Thêm SP</a>
                    </div>
                    <table style="width:100%">
                        <tr>
                            <th>Mã SP</th>
                            <th>Tên SP</th>                        
                            <th>Giá</th>                        
                            <th>Giảm giá</th>                        
                            <th>Ảnh</th>                        
                            <th>Mô tả</th>                                               
                            <th>Thương hiệu</th>                        
                            <th>Xuất xứ</th>
                            <th>Ưu đãi</th>
                            <th>Thành phần</th>                       
                            <th>Số lượt xem</th>                        
                            <th>Loại</th>                        
                            <th></th>
                            <th></th>
                        </tr>
                        <?php
                            if (isset($_GET['ma_sp'])) {
                                san_pham_delete($_GET['ma_sp']);
                            }
                            $sanpham=san_pham_select_all();
                            foreach($sanpham as $row){
                            extract($row);
                            $del_link="a_sanpham.php?ma_sp=".$ma_sp;
                        ?>
                            <tr>
                                <td><?php echo $row['ma_sp'] ?></td>
                                <td><?php echo $row['ten_sp'] ?></td>
                                <td><?php echo $row['don_gia'] ?></td>
                                <td><?php echo $row['giam_gia'] ?></td>
                                <td><img src="img/<?php echo $row['hinh'] ?>" alt=""></td>
                                <td><?php echo $row['mo_ta'] ?></td>
                                <td><?php echo $row['ma_th'] ?></td>
                                <td><?php echo $row['ma_xx'] ?></td>
                                <td><?php echo $row['ma_uu_dai'] ?></td>
                                <td><?php echo $row['thanh_phan'] ?></td>
                                <td><?php echo $row['so_luot_xem'] ?></td>
                                <td><?php echo $row['ma_loai'] ?></td>
                                <td><a href="ed_sanpham.php?ma_sp=<?php echo$row['ma_sp'] ?>">Sửa</a> </td>
                                <td><?php echo "<td><a href=".$del_link." >Xoá</a></td>" ?></td>
                                
                            </tr>
                        <?php            
                            } 
                        ?>
                    </table>
                    
                    
                </div>
                
            </article>

<?php 
    include 'inc/footer.php';
?>         
