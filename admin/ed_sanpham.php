<?php 
    include './inc/header.php';
    
?>

            <article>
            <?php
                require './../dao/pdo.php';
                require './../dao/san_pham.php'; 
            ?>
            <?php
                if (isset($_GET['ma_sp'])) {
                    $ma_sp=$_GET['ma_sp'];
                    $ed_sp=loai_select_by_id($ma_sp);
                    
                } 
            ?>
                <div class="show">
                    <div class="title">
                        <h2>Sửa SP</h2>
                        <a href=""></a>
                    </div>
                    <img src="../" alt="">
                    <form action="" method="post" enctype="multipart/form-data">
                        <p>Mã loại</p><input type="text" name="ma_sp" placeholder="<?php echo $ed_sp['ma_sp'] ?>" readonly>
                        <p>Tên loại</p><input type="text" name="ten_loai" value="<?php echo $ed_sp['ten_loai'] ?>" >
                        <p>Hình</p><input type="file" name="img" value="<img src='<?php echo $ed_sp['hinh'] ?>'>"><br> <img src="">
                        <input type="submit" value="Sửa" name="ed_loai" >
                    </form>
                    <?php
                        if(isset($_POST['ed_loai'])){
                            $ten_loai=$_POST['ten_loai'];


                            $img_name=$_FILES['img']['name'];
                            $img_tmp=$_FILES['img']['tmp_name'];
                            
                            move_uploaded_file($img_tmp,'./img/'.$img_name);
                            loai_update($ma_loai, $ten_loai,$img_name);

                            header('Location: a_loai.php');
                        } 

                    ?>
                    
                </div>
                
            </article>
<?php 
    include './inc/footer.php';
?>         
