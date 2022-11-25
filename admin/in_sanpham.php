<?php 
    include './inc/header.php';
    
?>

            <article>
            <?php
                require '../dao/pdo.php';
                require '../dao/san_pham.php'; 
            ?>
                <div class="show">
                    <div class="title">
                        <h2>Thêm SP</h2>
                        <a href=""></a>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <p>Mã SP</p><input type="text" name="ma_sp" placeholder="auto number" readonly>
                        <p>Tên SP</p><input type="text" name="ten_sp">
                        <p>Đơn giá</p><input type="text" name="don_gia">
                        <p>Giảm giá</p><input type="text" name="giam_gia">
                        <p>Hình</p><input type="file" name="img">
                        <p>Mô tả</p><input type="text" name="mo_ta">
                        <p>Thương hiệu</p><input type="text" name="thuong_hieu">
                        <p>Xuất xứ</p><input type="text" name="xuat_xu">
                        <p>Số lượt xem</p><input type="text" name="so_luot_xem">
                        <p>Mã loại</p><input type="text" name="ma_loai">
                        <br><input type="submit" value="Thêm" name="btn_insert" >
                    </form>
                    <?php
                        if(isset($_POST['btn_insert'])){
                            $ten_sp=$_POST['ten_sp'];
                            $don_gia=$_POST['don_gia'];
                            $giam_gia=$_POST['giam_gia'];
                            $mo_ta=$_POST['mo_ta'];
                            $thuong_hieu=$_POST['thuong_hieu'];
                            $xuat_xu=$_POST['xuat_xu'];
                            $so_luot_xem=$_POST['so_luot_xem'];
                            $ma_loai=$_POST['ma_loai'];


                            $img_name=$_FILES['img']['name'];
                            $img_tmp=$_FILES['img']['tmp_name'];
                            
                            move_uploaded_file($img_tmp,'./img/'.$img_name);
                            san_pham_insert($ten_sp,$don_gia,$giam_gia,$img_name,$mo_ta,$thuong_hieu,$xuat_xu,$so_luot_xem,$ma_loai);

                            header('Location: a_sanpham.php');
                        } 

                    ?>
                    
                </div>
                
            </article>
<?php 
    include './inc/footer.php';
?>         
