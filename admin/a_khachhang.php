<?php 
    include 'inc/header.php';
?>

            <article>
                <?php
                    require '../dao/pdo.php';
                    require '../dao/khach_hang.php';
                ?>
                <div class="show">
                    <div class="title">
                        <h2>Quản lý khách hàng</h2>
                        <a href="in_khachhang.php">Thêm khách hàng</a>
                    </div>
                    <table style="width:100%">
                        <tr>
                            <th>Mã Khách hàng</th>
                            <th>Họ tên</th>                        
                            <th>Mật khẩu</th>                        
                            <th>Email</th>                        
                            <th>AVT</th>                                               
                            <th>Vai trò</th>                                               
                            <th></th>
                            <th></th>
                        </tr>
                        <?php
                        if (isset($_GET['ma_kh'])) {
                            kh_delete($_GET['ma_kh']);
                        }
                            $ds_kh=kh_select_all();
                            
                            foreach($ds_kh as $row){
                                $del_link="a_khachhang.php?ma_kh=".$row['ma_kh'];
                        ?>
                            <tr>
                                <td><?php echo $row['ma_kh'] ?></td>
                                <td><?php echo $row['ho_ten'] ?></td>
                                <td><?php echo $row['mat_khau'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><img src="img/<?php echo $row['hinh'] ?>" alt=""></td>
                                <td><?php echo $row['vai_tro'] ?></td>
                                <td><a href="edit_khachhang.php?ma_kh=<?php echo$row['ma_kh'] ?>">Sửa</a> </td>
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
