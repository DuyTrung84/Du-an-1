<?php 
    include './inc/header.php';
    
?>

            <article>
            <?php
                require '../dao/pdo.php';
                require '../dao/san_pham.php'; 
                require '../dao/loai.php';
                require '../dao/uu_dai.php';
                require '../dao/thuong_hieu.php';
                require '../dao/xuat_xu.php';
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
                        <p>Thương hiệu</p>

                        <select name="thuong_hieu" id="">
                            <?php
                                $th=thuong_hieu_select_all();

                                foreach($th as $row){
                            ?>
                                <option value="<?php echo $row['ma_th'] ?>"><?php echo $row['ten_th'] ?></option>
                            <?php
                                    
                                } 
                            ?>
                            
                        </select>
                        <p>Xuất xứ</p>
                        <select name="xuat_xu" id="">
                            <?php
                                $xx=xuat_xu_select_all();

                                foreach($xx as $row){
                            ?>
                                <option value="<?php echo $row['ma_xx'] ?>"><?php echo $row['ten_xx'] ?></option>
                            <?php
                                    
                                } 
                            ?>
                            
                        </select>

                        <p>Mã ưu đãi</p>
                        <select name="ma_uu_dai" id="">
                            <?php
                                $uu_dai=uu_dai_select_all();

                                foreach($uu_dai as $row){
                            ?>
                                <option value="<?php echo $row['ma_uu_dai'] ?>"><?php echo $row['noi_dung'] ?></option>
                            <?php
                                    
                                } 
                            ?>
                            
                        </select>
                        <p>Thành phần</p><input type="text" name="thanh_phan">
                        <p>Số lượt xem</p><input type="text" name="so_luot_xem">
                        <p>Mã loại</p>
                        <select name="ma_loai" id="">
                            <?php
                                $loai=loai_select_all();

                                foreach($loai as $row){
                            ?>
                                <option value="<?php echo $row['ma_loai'] ?>"><?php echo $row['ten_loai'] ?></option>
                            <?php
                                    
                                } 
                            ?>
                            
                        </select>
                        <br><input type="submit" value="Thêm" name="btn_insert" >
                    </form>
                    <?php
                        if(isset($_POST['btn_insert'])){
                            $ten_sp=$_POST['ten_sp'];
                            $don_gia=$_POST['don_gia'];
                            $giam_gia=$_POST['giam_gia'];
                            $mo_ta=$_POST['mo_ta'];
                            $ma_th=$_POST['ma_th'];
                            $ma_xx=$_POST['ma_xx'];
                            $ma_uu_dai=$_POST['ma_uu_dai'];
                            $thanh_phan=$_POST['thanh_phan'];
                            $so_luot_xem=$_POST['so_luot_xem'];
                            $ma_loai=$_POST['ma_loai'];


                            $img_name=$_FILES['img']['name'];
                            $img_tmp=$_FILES['img']['tmp_name'];
                            
                            move_uploaded_file($img_tmp,'./img/'.$img_name);
                            san_pham_insert($ten_sp,$don_gia,$giam_gia,$img_name,$mo_ta,$ma_th,$ma_xx,$ma_uu_dai,$thanh_phan,$so_luot_xem,$ma_loai);

                            header('Location: a_sanpham.php');
                        } 

                    ?>
                    
                </div>
                
            </article>
<?php 
    include './inc/footer.php';
?>         
