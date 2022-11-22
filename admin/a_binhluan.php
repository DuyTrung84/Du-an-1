<?php 
    include 'inc/header.php';
?>

            <article>
                <?php
                    require '../dao/pdo.php';
                    require '../dao/binh_luan.php';
                ?>
                <div class="show">
                    <div class="title">
                        <h2>Quản lý Bình luận</h2>
                        <a href=""></a>
                    </div>
                    <table style="width:100%">
                        <tr>
                            <th>Mã BL</th>
                            <th>Nội dung</th>                        
                            <th>Mã SP</th>                        
                            <th>Mã khách hàng</th>                        
                            <th>Ngày bình luận</th>                                               
                            <th></th>
                        </tr>
                        <?php
                        if (isset($_GET['ma_bl'])) {
                            binh_luan_delete($_GET['ma_bl']);
                        }
                            $ds_bl=binh_luan_select_all();
                            
                            foreach($ds_bl as $rows){
                                $del_link="a_binhluan.php?ma_bl=".$rows['ma_bl'];
                        ?>
                            <tr>
                                <td><?php echo $rows['ma_bl'] ?></td>
                                <td><?php echo $rows['noi_dung'] ?></td>
                                <td><?php echo $rows['ma_sp'] ?></td>
                                <td><?php echo $rows['ma_kh'] ?></td>
                                <td><?php echo $rows['ngay_bl'] ?></td>
                                <?php echo "<td><a href=".$del_link." >Xoá</a></td>" ?>
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
