<?php 
    include 'inc/header.php';
    
?>

            <article>
            <?php
                require '../dao/pdo.php';
                require '../dao/loai.php'; 
            ?>
                <div class="show">
                    <div class="title">
                        <h2>Quản lý loại</h2>
                        <a href="./insert/in_loai.php">Thêm loại</a>
                    </div>
                    <table style="width:100%">
                        <tr>

                            <th>Mã loại</th>
                            <th>Tên loại</th>   
                            <th>ẢNh</th>                     
                            <th></th>
                            <th></th>
                        </tr>
                        <?php
                            if(isset($_GET['ma_loai'])){
                                loai_delete($_GET['ma_loai']);
                            }
                            $loaihang=loai_select_all();
                            foreach($loaihang as $row){
                            extract($row);
                            $del_link="a_loai.php?ma_loai=".$ma_loai;
                        ?>
                            <tr>
                                <td><?php echo $row['ma_loai'] ?></td>
                                <td><?php echo $row['ten_loai'] ?></td>
                                <td><?php echo $row['hinh'] ?></td>
                                <td><a href="edit_loai.php?ma_loai=<?php echo$row['ma_loai'] ?>">Sửa</a> </td>
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
