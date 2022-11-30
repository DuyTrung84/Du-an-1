<?php 
    include './inc/header.php';
    
?>
        <article>
            <?php
                require './../dao/pdo.php';
                require './../dao/khach_hang.php'; 
            ?>
            <?php
                if (isset($_GET['ma_kh'])) {
                    $ma_kh=$_GET['ma_kh'];
                    $ed_kh=kh_select_by_id($ma_kh);
                    
                } 
            ?>
                <div class="show">
                    <div class="title">
                        <h2>Sửa thông tin </h2>
                        <a href=""></a>
                    </div>
                    <img src="../" alt="">
                    <form action="" method="post" enctype="multipart/form-data">
                        <p>Mã KH</p><input type="text" name="ma_kh" placeholder="<?php echo $ed_kh['ma_kh'] ?>" readonly>
                        <p>Họ tên</p><input type="text" name="ho_ten" value="<?php echo $ed_kh['ho_ten'] ?>">
                        <p>Mật khẩu</p><input type="text" name="mat_khau" value="<?php echo $ed_kh['mat_khau'] ?>">
                        <p>Email</p><input type="text" name="email" value="<?php echo $ed_kh['email'] ?>">
                        <p>Địa chỉ</p><input type="text" name="dia_chi" value="<?php echo $ed_kh['dia_chi'] ?>">
                        <p>SDT</p><input type="text" name="sdt" value="<?php echo $ed_kh['sdt'] ?>">
                        <p>AVT</p><input type="file" name="img">
                        <p>Vai trò</p><input type="text" name="vai_tro" value="<?php echo $ed_kh['vai_tro'] ?>"><br>
                        <input type="submit" value="Sửa" name="ed_kh" >
                    </form>
                    <?php
                        if(isset($_POST['ed_kh'])){
                            $ho_ten=$_POST['ho_ten'];
                            $mat_khau=$_POST['mat_khau'];
                            $email=$_POST['email'];
                            $dia_chi=$_POST['dia_chi'];
                            $sdt=$_POST['sdt'];
                            $vai_tro=$_POST['vai_tro'];


                            $img_name=$_FILES['img']['name'];
                            $img_tmp=$_FILES['img']['tmp_name'];
                            
                            move_uploaded_file($img_tmp,'./img/'.$img_name);
                            kh_update($ma_kh,$ho_ten,$mat_khau,$email,$dia_chi,$sdt,$img_name,$vai_tro);

                            header('Location: a_khachhang.php');
                        } 

                    ?>
                    
                </div>
                
            </article>
<?php 
    include './inc/footer.php';
?>         
