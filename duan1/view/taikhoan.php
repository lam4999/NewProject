
                <div class="row mb">
                  <div class="boxtitle">Tài khoản</div>
                  <div class="boxcontent formtaikhoan">
                    <?php
                     if(isset($_SESSION['user'])){
                      extract($_SESSION['user']);
                     ?>
                      <div class="row mb10 ">
                      Xin chao <br>
                      <?=$user?>
                    </div>
                     <div class="row mb10">
                     <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                     <li><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>
                     <?php if($role==0) {?>
                     <li><a href="admin/index.php">Đăng nhập Admin </a></li>
                      <?php }?>
                     <li><a href="index.php?act=thoat">Thoát</a></li>
                     </div>
                      <?php
                     }else{

                  
                    ?>
                   <form action="index.php?act=dangnhap" method="post">
                    <div class="row mb10 ">
                      Tên đăng nhập <br>
                      <input type="text" name="user" >
                    </div>
                     <div class="row mb10">
                      Mật khẩu <br>
                      <input type="password" name="pass" >
                     </div>
                    <div class="row mb10">
                      <input type="checkbox" name="" > Ghi nhớ tài khoản <br>
                    </div>
                    <div class="row mb10">
                      <input type="submit" value="Đăng nhập" name="dangnhap">
                    </div> 
                    </form>
                      <li><a href="#">Quên mật khẩu</a></li>
                      <li><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
                      <?php   } ?>
                 
                  </div>
                </div> 
            
               <div class="row mb">
                  <div class="boxtitle">Danh mục</div>
                  <div class="boxcontent2 menudoc">
                             <ul>
                              <?php 
                              foreach ($dsdm as $dm){
                                extract($dm);
                                $linkdm="index.php?act=sanpham&iddm=".$id;
                                echo '<li>
                                     <a href="'.$linkdm.'">'.$name.'</a>
                                     </li>';
                              }
                              ?>
                              <!-- <li><a href="#">Laptop</a></li>
                              <li><a href="#">Điện thoại</a></li>
                              <li><a href="#">Bàn phím</a></li>
                              <li><a href="#">Tai nghe</a></li> -->
                             </ul>
                  </div>
                  <div class="boxfoter searbox">
                    <form action="index.php?act=sanpham" method="post">
                      <input type="text" name="kyw">
                      <input type="submit" name="timkiem" value="Tim kiem">
                    </form>
                  </div>
                </div>
                <div class="row">
                    <div class="boxtitle">Top 10 yêu thích</div>
                    <div class= " row boxcontent">
                      <?php
                       foreach($dstop10 as $sp){
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        $img=$img_path.$img;
                        echo '<div class="row mb10 top10">
                        <div class="top10">
                          <img src="'.$img.'" alt="">
                        <a href="'.$linksp.'">'.$name.'</a>
                        </div>
                       </div>';

                       }
                      ?>
                       <!-- <div class="row mb10 top10">
                        <img src="view/images/laptop_acer.jpg" alt="">
                        <a href="#">Laptop</a>
                       </div>
                       <div class="row mb10 top10">
                        <img src="view/images/laptop_acer.jpg" alt="">
                        <a href="#">Laptop</a>
                       </div>
                       <div class="row mb10 top10">
                        <img src="view/images/laptop_acer.jpg" alt="">
                        <a href="#">Laptop</a>
                       </div>
                       <div class="row mb10 top10">
                        <img src="view/images/laptop_acer.jpg" alt="">
                        <a href="#">Laptop</a>
                       </div> -->

                    </div>
                </div>
            </div> 