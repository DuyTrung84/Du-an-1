<?php 
    include '../inc/header.php';
    
?>

            <article>
            <?php
                require '../../dao/pdo.php';
                require '../../dao/loai.php'; 
            ?>
                <div class="show">
                    <div class="title">
                        <h2>Thêm loại</h2>
                        <a href=""></a>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <p>Mã loại</p><input type="text" name="ma_loai " placeholder="auto number" disabled>
                        <p>Tên loại</p><input type="text" name="ten_loai">
                        <p>Hình</p><input type="file" name="hinh"><br>
                        <input type="submit" value="Thêm loại" name="btn_insert">
                    </form>
                    <?php
                        if(isset($_POST['btn_insert'])){

                            $ma_loai=$_POST['ma_loai'];
                            $ten_loai=$_POST['ten_loai'];


                            $img_name=$_FILES['img']['name'];
                            $img_tmp=$_FILES['img']['tmp_name'];
                            move_uploaded_file($img_tmp,'../admin/img/'.$img_name);

                            loai_insert($ma_loai,$ten_loai,$img_name);


                        }  
                    ?>
                    
                </div>
                
            </article>
<?php 
    include '../inc/footer.php';
?>         
