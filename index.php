<?php require_once 'sections/header.php' ?>

    <div class="container-fluid min-vh-100 d-flex flex-column">
        <div class="row flex-grow-1">
            <div class="col-lg-2 col-md-3 sidebar">
                <h2 class="logo">یادداشت ها</h2>
                <div class="devider"></div>
                <div class="searchbox">
                    <form action="">
                        <a href="#"><i class="fas fa-magnifying-glass"></i></a>
                        <input type="text" placeholder="جستجو">
                    </form>
                </div>
                <ul id="menu" class="px-4 p-lg-0">
                    <li class="menu-item"><a href="#"><i class="fas fa-home"></i>داشبورد</a></li>
                    <li class="menu-item"><a href="#"><i class="fas fa-book"></i>یادداشت ها</a></li>
                    <li class="menu-item"><a href="#"><i class="fas fa-wrench"></i>تنظیمات</a></li>
                    <li class="menu-item"><a href="#"><i class="fas fa-power-off"></i>خروج</a></li>
                </ul>

                <div class="upgrade d-none d-lg-block">
                    <a href="#" class=""><i class="fas fa-trophy"></i>خرید نسخه کامل</a>
                </div>
            </div>
            <div class="col-lg-10 col-md-9 content g-0">
                <div class="bg">
                    <a class="profile"><i class="fas fa-user"></i>مشاهده پروفایل</a>
                    <div class="titles">
                        <h1 class="title">سلام امیررضا</h1>
                        <h2 class="title">روزتو برنامه ریزی کن لذت ببر...</h2>
                    </div>
                </div>

                <div class="row mycards mx-auto">
                    <div class="col-8">
                        <div class="box notes shadow-md">
                            <h2><i class="fas fa-calendar-day"></i>خلاصه امروز</h2>
                            <ul class="list">
                                <li>انجام خرید فلان</li>
                                <li>انجام خرید فلان</li>
                                <li>انجام خرید فلان</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box quick-access shadow-md">
                            <h2><i class="fas fa-circle-plus"></i>یادداشت سریع</h2>
                            <textarea name="" id="" class="note" placeholder="بنویسید و enter بزنید ..."></textarea>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


 <?php require_once 'sections/footer.php' ?>