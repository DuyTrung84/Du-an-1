<?php 
    include './inc/header.php';
    
?>
        <article>
            <?php
                require './../dao/pdo.php';
                require './../dao/uu_dai.php'; 
            ?>
            <?php
                if (isset($_GET['ma_uu_dai'])) {
                    $ma_uu_dai=$_GET['ma_uu_dai'];
                    $ed_uu_dai=uu_dai_select_by_id($ma_uu_dai);
                    
                } 
            ?>
                <div class="show">
                    <div class="title">
                        <h2>Sửa thông tin </h2>
                        <a href=""></a>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <p>Mã ưu đãi</p><input type="text" name="ma_uu_dai" placeholder="<?php echo $ed_uu_dai['ma_uu_dai'] ?>" readonly>
                        <p>Nội dung</p><input type="text" name="noi_dung" value="<?php echo $ed_uu_dai['noi_dung'] ?>">
                        <p>Ngày bắt đầu</p><input type="text" name="ngay_bat_dau" value="<?php echo $ed_uu_dai['ngay_bat_dau'] ?>">
                        <p>Ngày kết thúc</p><input type="text" name="ngay_ket_thuc" value="<?php echo $ed_uu_dai['ngay_ket_thuc'] ?>">
                        <br><input type="submit" value="Sửa" name="ed_kh" >
                    </form>
                    <?php
                        if(isset($_POST['ed_kh'])){
                            $noi_dung=$_POST['noi_dung'];
                            $ngay_bat_dau=$_POST['ngay_bat_dau'];
                            $ngay_ket_thuc=$_POST['ngay_ket_thuc'];


                            uu_dai_update($noi_dung,$ngay_bat_dau,$ngay_ket_thuc);

                            header('Location: a_uudai.php');
                        } 

                    ?>
                    
                </div>
                
            </article>
<?php 
    include './inc/footer.php';
?>         
