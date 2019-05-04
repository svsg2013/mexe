<nav class="navbar menumain visible-xs mobile-menu">
    <div class="navbar-header">
        <button
                type="button"
                class="navbar-toggle"
                data-toggle="collapse"
                data-target=".navbar-collapse">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a title="" href="index-2.html" class="navbar-brand">
            <img alt="" src="<?php echo e(asset('upload/'.$system->logo)); ?>"></a>
    </div>
    <div class="navbar-collapse collapse navbar-left">
        <ul class="nav navbar-nav list-collections list-cate-banner navAjax">
            <li class="menu_lv1 item-sub-cat">
                <a href="<?php echo e(route('homePage')); ?>">
                    Trang chủ</a>
            </li>
            <li class="menu_lv1 item-sub-cat">
                <a href="<?php echo e(url('nha-xinh/gioi-thieu')); ?>" data-name="gioi-thieu" data-title="Giới thiệu">Giới thiệu</a>
            </li>
            <li class="menu_lv1 item-sub-cat">
                <a href="<?php echo e(route('listProjects')); ?>" data-name="san-pham" data-title="Sản phẩm">Dự án
                    <i class="fa fa-caret-down pull-right" aria-hidden="true"></i>
                </a>
            </li>
            <li class="menu_lv1 item-sub-cat">
                <a href="<?php echo e(route('listDesign')); ?>" data-name="san-pham" data-title="Sản phẩm">Thiết kế nội thất
                    <i class="fa fa-caret-down pull-right" aria-hidden="true"></i>
                </a>
            </li>
            <li class="menu_lv1 item-sub-cat">
                <a href="san-pham.html" data-name="san-pham" data-title="Sản phẩm">
                    Sản phẩm</a>
            </li>
            <li class="menu_lv1 item-sub-cat">
                <a href="<?php echo e(route('contactShow')); ?>" data-name="lien-he" data-title="Liên hệ">Liên hệ</a>
            </li>
            <li class="menu_lv1 item-sub-cat">
                <a href="<?php echo e(route('baogia')); ?>" data-name="lien-he" data-title="Liên hệ">Báo giá</a>
            </li>
            <li class="menu_lv1 item-sub-cat">
                <a href="<?php echo e(route('tuyendung')); ?>" data-name="lien-he" data-title="Liên hệ">Tuyển dụng</a>
            </li>
        </ul>
    </div>
    <form
            action="#"
            method="post"
            class="navbar-form navbar-search navbar-right hidden-md hidden-lg hidden-sm"
            id="search_mini_form">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <input
                id="search"
                name="txtSearch"
                placeholder="Nhập thông tin cần tìm kiếm sad"
                class="search-query"
                maxlength="128"
                type="text">
        <button type="submit" class="btn icon-search">
            <i class="fa fa-search" aria-hidden="true"></i>
        </button>
    </form>
</nav>
<div class="hidden-xs header
<?php if(!empty($flagIndex)): ?>
<?php echo e('header addIndex fixmenu'); ?>

<?php else: ?>
<?php echo e('header addBanner'); ?>

<?php endif; ?>
">
    <div class=" container">
        <nav class="navbar menumain">
            <div class="navbar-header">
                <button
                        type="button"
                        class="navbar-toggle"
                        data-toggle="collapse"
                        data-target=".navbar-collapse">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <div class="navbar-collapse collapse navbar-left">
                <div class="hotline clearfix">
                    <a title="" href="<?php echo e(route('homePage')); ?>" class="navbar-brand">
                        <img alt="" src="<?php echo e(asset('upload/'.$system->logo)); ?>">
                    </a>
                    <h3><span>Hotline: </span><span><?php echo e($system->phone); ?></span></h3>
                    <form action="<?php echo e(route('multiSearch')); ?>"
                          class="navbar-form navbar-search navbar-right hidden-xs searchAjax">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input
                                name="txtSearch"
                                placeholder="Nhập thông tin cần tìm kiếm tại đây"
                                class="search-query"
                                maxlength="128"
                                type="text">
                        <button type="submit" class="btn icon-search">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
                <ul class="nav navbar-nav navAjax">
                    <li>
                        <a href="<?php echo e(route('homePage')); ?>">Trang chủ</a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('nha-xinh/gioi-thieu')); ?>" data-name="gioi-thieu" data-title="Giới thiệu">Giới thiệu</a>
                    </li>
                    <li class="dropdown project">
                        <a href="<?php echo e(route('listProjects')); ?>" data-name="san-pham" data-title="Sản phẩm">Dự án
                            <i class="fa fa-caret-down pull-right" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu sub1">
                            <div class="col-xs-12 col-sm-12">
                                <div class="row">
                                    <?php echo $thisCateProject; ?>

                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </ul>
                    </li>
                    <li class="dropdown ">
                        <a href="<?php echo e(route('listDesign')); ?>" data-name="san-pham" data-title="Sản phẩm">Thiết kế nội thất
                            <i class="fa fa-caret-down pull-right" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu sub1">
                            <div class="col-xs-12 col-sm-12">
                                <div class="row">
                                    <?php echo $thisDesign; ?>

                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </ul>
                    </li>
                    <li class="dropdown ">
                        <a href="<?php echo e(route('getListProduct')); ?>" data-name="san-pham" data-title="Sản phẩm">Sản phẩm
                            <i class="fa fa-caret-down pull-right" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu sub1">
                            <div class="col-xs-12 col-sm-8">
                                <div class="row">
                                    <?php if(!empty($thisCateDrop)): ?>
                                        <?php echo $thisCateDrop; ?>

                                        <?php else: ?>
                                        <p><?php echo e(null); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo e(route('contactShow')); ?>" data-name="lien-he" data-title="Liên hệ">Liên hệ</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('baogia')); ?>" data-name="lien-he" data-title="Liên hệ">Báo giá</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('tuyendung')); ?>" data-name="lien-he" data-title="Liên hệ">Tuyển dụng</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>