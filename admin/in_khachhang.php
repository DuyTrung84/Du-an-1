<?php 
    include './inc/header.php';
    
?>

            <article>
            <?php
                require '../dao/pdo.php';
                require '../dao/khach_hang.php'; 
            ?>
                <div class="show">
                    <div class="title">
                        <h2>Thêm SP</h2>
                        <a href=""></a>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <p>Mã KH</p><input type="text" name="ma_sp" placeholder="auto number" readonly>
                        <p>Họ tên</p><input type="text" name="ho_ten">
                        <p>Mật khẩu</p><input type="text" name="mat_khau">
                        <p>Email</p><input type="text" name="email">
                        <p>AVT</p><input type="file" name="img">
                        <p>Vai trò</p><input type="text" name="vai_tro">
                        <br><input type="submit" value="Thêm" name="btn_insert" >
                    </form>
                    <?php
                        if(isset($_POST['btn_insert'])){
                            $ho_ten=$_POST['ho_ten'];
                            $mat_khau=$_POST['mat_khau'];
                            $email=$_POST['email'];
                            $vai_tro=$_POST['vai_tro'];



                            $img_name=$_FILES['img']['name'];
                            $img_tmp=$_FILES['img']['tmp_name'];
                            
                            move_uploaded_file($img_tmp,'./img/'.$img_name);
                            kh_insert($ho_ten,$mat_khau,$email,$img_name,$vai_tro);

                            header('Location: a_khachhang.php');
                        } 

                    ?>
                    
                </div>
                
            </article>
<?php 
    include './inc/footer.php';
?>         
