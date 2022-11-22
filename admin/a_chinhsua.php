<?php 
    include 'inc/header.php';
?>

            <article>
                <?php
                    require '../dao/pdo.php';
                    require '../dao/chinh_sua.php';
                ?>
                <div class="show">
                    <div class="title">
                        <h2>Chỉnh sửa trang web</h2>
                        <a href="">Thêm</a>
                    </div>
                    <table style="width:100%">
                        <tr>
                            <th>ID</th>
                            <th>Logo</th>                        
                            <th>Địa chỉ</th>                        
                            <th>SDT</th>                        
                            <th>Email</th>                                               
                            <th>Copyrigth</th>                                               
                            <th></th>                                               
                            <th></th>
                        </tr>
                        <?php
                        if (isset($_GET['id'])) {
                            chinh_sua_delete($_GET['id']);
                        }
                            $chinh_sua=chinh_sua_select_all();
                            
                            foreach($chinh_sua as $rows){
                                $del_link="a_chinhsua.php?id=".$rows['id'];
                        ?>
                            <tr>
                                <td><?php echo $rows['id'] ?></td>
                                <td><?php echo $rows['logo'] ?></td>
                                <td><?php echo $rows['dia_chi'] ?></td>
                                <td><?php echo $rows['sdt'] ?></td>
                                <td><?php echo $rows['email'] ?></td>
                                <td><?php echo $rows['copyright'] ?></td>
                                <td><a href="edit_khachhang.php?id=<?php echo$row['id'] ?>">Sửa</a> </td>
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
