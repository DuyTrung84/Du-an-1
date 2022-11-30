<?php 
    include './inc/header.php';
    
?>

            <article>
            <?php
                require '../dao/pdo.php';
                require '../dao/chinh_sua.php'; 
            ?>
            <?php
                if (isset($_GET['id'])) {
                    $id=$_GET['id'];
                    $ed=chinh_sua_select_by_id($id);
                    
                } 
            ?>
                <div class="show">
                    <div class="title">
                        <h2>Sửa</h2>
                        <a href=""></a>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <p>ID</p><input type="text" name="id" placeholder="<?php echo $ed['id'] ?>" readonly>
                        <p>Logo</p><input type="file" name="img">
                        <p>Địa chỉ</p><input type="text" name="dia_chi" value="<?php echo $ed['dia_chi'] ?>">
                        <p>SDT</p><input type="text" name="sdt" value="<?php echo $ed['sdt'] ?>">
                        <p>Email</p><input type="text" name="email" value="<?php echo $ed['email'] ?>">
                        <p>Copyrigth</p><input type="text" name="copyright" value="<?php echo $ed['copyright'] ?>">
                        <br><input type="submit" value="Sửa" name="btn_ed" >
                    </form>
                    <?php
                        if(isset($_POST['btn_ed'])){
                            $dia_chi=$_POST['dia_chi'];
                            $sdt=$_POST['sdt'];
                            $email=$_POST['email'];
                            $copyright=$_POST['copyright'];



                            $img_name=$_FILES['img']['name'];
                            $img_tmp=$_FILES['img']['tmp_name'];
                            
                            move_uploaded_file($img_tmp,'./img/'.$img_name);
                            chinh_sua_update($logo, $dia_chi, $sdt, $email,$copyright);

                            header('Location: a_chinhsua.php');
                        } 

                    ?>
                    
                </div>
                
            </article>
<?php 
    include './inc/footer.php';
?>         
