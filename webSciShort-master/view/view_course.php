<!DOCTYPE html>
<html>

<?php include("./vendor/inc/header.php") ?>

<body>
    
<?php include("./vendor/inc/nav.php") ?>
   
    <!-- Header-->
    <header class="bg-or-5 py-1 bg-header-img">
        <div class="container-fluid px-4 px-lg-5 my-5">
            <div class="text-center orange-theme-4">
                <h1 class="display-4 fw-bolder">หลักสูตรระยะสั้น</h1>
                <p class="lead fw-normal text-50 mb-0">คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏนครปฐม</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-2">
        <div class="container-fluid px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                include "./view_course_card.php";
                ?>
            </div>
        </div>
    </section>
    

<?php include("./vendor/inc/footer.php") ?>

</body>

</html>