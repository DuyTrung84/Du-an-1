<?php 
    include './inc/header.php';
    
?>

            <article>
            <?php
                require './../dao/pdo.php';
                require './../dao/loai.php'; 
            ?>
                <div class="show">
                    <div class="title">
                        <h2>Thêm loại</h2>
                        <a href=""></a>
                    </div>
                    <img src="../" alt="">
                    <form action="" method="post" enctype="multipart/form-data">
                        <p>Mã loại</p><input type="text" name="ma_loai" placeholder="auto number" readonly>
                        <p>Tên loại</p><input type="text" name="ten_loai">
                        <p>Hình</p><input type="file" name="img"><br>
                        <input type="submit" value="Thêm" name="btn_insert" >
                    </form>
                    <?php
                        if(isset($_POST['btn_insert'])){
                            $ten_loai=$_POST['ten_loai'];


                            $img_name=$_FILES['img']['name'];
                            $img_tmp=$_FILES['img']['tmp_name'];
                            
                            move_uploaded_file($img_tmp,'./img/'.$img_name);
                            loai_insert($ten_loai,$img_name);

                            header('Location: a_loai.php');
                        } 

                    ?>
                    
                </div>
                
            </article>
<?php 
    include './inc/footer.php';
?>         
