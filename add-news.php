<?php
    include 'controllers/header.php';
    include 'controllers/slider.php';
    include 'controllers/socials.php';
?>

<div class="main-heading-change">
    <div class="container">
        <a href="index.php">الرئيسيه /</a>
        <a href="add-news.php" class="active">أضف خبر</a>
    </div>
</div>

<div class="margin-adjusting-2">
    <div class="container">
    <ul class="nav nav-pills">
        <li class="active"><a data-toggle="pill" href="#home">الاضافه</a></li>
        <li><a data-toggle="pill" href="#menu3">الاضافه 2</a></li>
    </ul>
    
    <div class="tab-content margin-adjusting">
        <div id="home" class="tab-pane fade in active">
            <div class="register-form">
                <div class="row">
                    <form action="">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="">نوع الخبر :</label>
                                <select name="" id="" class="form-control">
                                    <option value="" selected disabled>قصص</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">اختيار القسم :</label>
                                <select name="" id="" class="form-control">
                                    <option value="" selected disabled>الاول</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">عنوان الخبر : </label>
                                <input type="text" class="form-control" placeholder="عنوان الخبر">
                                <!-- <small class="form-text text-muted">أدخل العنوان بشكل صحيح</small> -->
                            </div>
                            <div class="form-group">
                                <label for="">الخبر بالتفاصيل : </label>
                                <textarea name="" id="" cols="30" rows="10" class="news-letter" placeholder="اكتب كل شئ عن الخبر"></textarea>
                            </div>
                            <button type="submit" class="btn sign">إضافة خبر</button>
                        </div>
                        <div class="col-sm-4">
                            <div class="file-adding">
                                <div class="form-group saloka">
                                    <label for="file" class="input-label">
                                        <img src="images/017.png" id="upload_img" alt="">
                                        <span class="label-span">
                                            <i class="flaticon-plus-square"></i>
                                            اضغط هنا لرفع الصورة
                                        </span>
                                    </label>
                                    <input id="file" type="file" name="file" class="inputfile"/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="menu3" class="tab-pane fade">
            <div class="register-form">
                <div class="row">
                    <form action="">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="">نوع الخبر :</label>
                                <select name="" id="" class="form-control">
                                    <option value="" selected disabled>قصص</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">اختيار القسم :</label>
                                <select name="" id="" class="form-control">
                                    <option value="" selected disabled>الاول</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">عنوان الخبر : </label>
                                <input type="text" class="form-control" placeholder="عنوان الخبر">
                                <!-- <small class="form-text text-muted">أدخل العنوان بشكل صحيح</small> -->
                            </div>
                            <div class="form-group">
                                <label for="">الخبر بالتفاصيل : </label>
                                <textarea name="" id="" cols="30" rows="10" class="news-letter" placeholder="اكتب كل شئ عن الخبر"></textarea>
                            </div>
                            <button type="submit" class="btn sign">إضافة خبر</button>
                        </div>
                        <div class="col-sm-4">
                            <div class="file-adding">
                                <div class="form-group saloka">
                                    <label for="file" class="input-label">
                                        <img src="images/017.png" id="upload_img-2" alt="">
                                        <span class="label-span">
                                            <i class="flaticon-plus-square"></i>
                                            اضغط هنا لرفع الصورة
                                        </span>
                                    </label>
                                    <input id="file" type="file" name="file" class="inputfile"/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>




<?php
    include 'controllers/footer.php';
?>