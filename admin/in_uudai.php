<?php 
    include './inc/header.php';
    
?>

            <article>
            <?php
                require '../dao/pdo.php';
                require '../dao/uu_dai.php'; 
            ?>
                <div class="show">
                    <div class="title">
                        <h2>Thêm ưu đãi</h2>
                        <a href=""></a>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <p>Mã ưu đãi</p><input type="text" name="ma_uu_dai" placeholder="auto number" readonly>
                        <p>Nội dung</p><input type="text" name="noi_dung">
                        <p>Ngày bắt đầu</p><input type="text" name="ngay_bat_dau">
                        <p>Ngày kết thúc</p><input type="text" name="ngay_ket_thuc">
                        <br><input type="submit" value="Thêm" name="btn_insert" >
                    </form>
                    <?php
                        if(isset($_POST['btn_insert'])){
                            $noi_dung=$_POST['noi_dung'];
                            $ngay_bat_dau=$_POST['ngay_bat_dau'];
                            $ngay_ket_thuc=$_POST['ngay_ket_thuc'];

                            uu_dai_insert($noi_dung,$ngay_bat_dau,$ngay_ket_thuc);

                            header('Location: a_uudai.php');
                        } 

                    ?>
                    
                </div>
                
            </article>
<?php 
    include './inc/footer.php';
?>         
