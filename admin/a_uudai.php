<?php 
    include 'inc/header.php';
?>

            <article>
                <?php 
                    require '../dao/pdo.php';
                    require '../dao/uu_dai.php';
                ?>
                <div class="show">
                    <div class="title">
                        <h2>Quản lý ưu đãi</h2>
                        <a href="in_uudai.php">Thêm ưu đãi</a>
                    </div>
                    <table style="width:100%">
                        <tr>

                            <th>Mã ưu đãi</th>
                            <th>Nội dung</th>                        
                            <th>Ngày bắt đầu</th>                        
                            <th>Ngày kết thúc</th>                                                                                                                
                            <th></th>
                            <th></th>
                        </tr>
                        <?php
                        if (isset($_GET['ma_uu_dai'])) {
                            uu_dai_delete($_GET['ma_uu_dai']);
                        }
                            $uu_dai=uu_dai_select_all();
                            
                            foreach($uu_dai as $rows){
                                $del_link="a_uu_dai.php?ma_uu_dai=".$rows['ma_uu_dai'];
                        ?>
                            <tr>
                                <td><?php echo $rows['ma_uu_dai'] ?></td>
                                <td><?php echo $rows['noi_dung'] ?></td>
                                <td><?php echo $rows['ngay_bat_dau'] ?></td>
                                <td><?php echo $rows['ngay_ket_thuc'] ?></td>
                                <td><a href="ed_uudai.php?ma_uu_dai=<?php echo$rows['ma_uu_dai'] ?>">Sửa</a> </td>
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
