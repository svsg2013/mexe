<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metisMenu nav" id="side-menu">
                <li class="menu-title">Navigation</li>
                <li>
                    <a href="javascript: void(0);" aria-expanded="true"><i class="fi-air-play"></i><span class="badge badge-success pull-right">2</span> <span> Dashboard </span></a>
                    <ul class="nav-second-level nav" aria-expanded="true">
                        <li><a href="index.html">Dashboard 1</a></li>
                        <li><a href="dashboard-2.html">Dashboard 2</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" aria-expanded="true"><i class="fi-paper"></i> <span> Project</span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level nav" aria-expanded="true">
                        
                        <li><a href="<?php echo e(route('category.index')); ?>"><i class="fi-layers"></i> List Categories</a></li>
                        <li><a href="<?php echo e(route('news.create')); ?>"><i class="fi-circle-plus"></i> Add Article</a></li>
                        <li><a href="<?php echo e(route('news.index')); ?>"><i class="fi-layers"></i> List Articles</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" aria-expanded="true"><i class="fi-menu"></i> <span> Design Furniture </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level nav" aria-expanded="true">
                        
                        <li><a href="<?php echo e(route('catefurniture.index')); ?>"><i class="fi-layers"></i> List Categories</a></li>
                        <li><a href="<?php echo e(route('furniture.create')); ?>"><i class="fi-circle-plus"></i> Add Article</a></li>
                        <li><a href="<?php echo e(route('furniture.index')); ?>"><i class="fi-layers"></i> List Articles</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" aria-expanded="true"><i class="fi-menu"></i> <span> News and Feng Shui </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level nav" aria-expanded="true">
                        
                        <li><a href="<?php echo e(route('catefengshui.index')); ?>"><i class="fi-layers"></i> List Categories</a></li>
                        <li><a href="<?php echo e(route('fengshui.create')); ?>"><i class="fi-circle-plus"></i> Add Article</a></li>
                        <li><a href="<?php echo e(route('fengshui.index')); ?>"><i class="fi-layers"></i> List Articles</a></li>
                    </ul>
                </li>
                
                    
                    
                        
                        
                    
                
                <li>
                    <a href="javascript: void(0);" aria-expanded="true"><i class="fi-air-play"></i> <span> Products </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level nav" aria-expanded="true">
                        <li><a href="<?php echo e(route('cateprod.create')); ?>"><i class="fi-circle-plus"></i> Add Category</a></li>
                        <li><a href="<?php echo e(route('cateprod.index')); ?>"><i class="fi-layers"></i> List Categories</a></li>
                        <li><a href="<?php echo e(route('prods.create')); ?>"><i class="fi-circle-plus"></i> Add Product</a></li>
                        <li><a href="<?php echo e(route('prods.index')); ?>"><i class="fi-layers"></i> List Products</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" aria-expanded="true"><i class="fi-stack"></i> <span> Slider </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level nav" aria-expanded="true">
                        <li><a href="<?php echo e(route('slider.create')); ?>"><i class="fi-circle-plus"></i> Add Slider</a></li>
                        <li><a href="<?php echo e(route('slider.index')); ?>"><i class="fi-layers"></i> List Slider</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" aria-expanded="true"><i class="fi-head"></i> <span> Partner </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level nav" aria-expanded="true">
                        <li><a href="<?php echo e(route('partner.create')); ?>"><i class="fi-circle-plus"></i> Add Partner</a></li>
                        <li><a href="<?php echo e(route('partner.index')); ?>"><i class="fi-layers"></i> List Partner</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" aria-expanded="true"><i class="fi-clipboard"></i> <span> Báo giá </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level nav" aria-expanded="true">
                        <li><a href="<?php echo e(route('batu.create')); ?>"><i class="fi-circle-plus"></i> Add Báo giá</a></li>
                        <li><a href="<?php echo e(route('batu.index')); ?>"><i class="fi-layers"></i> List Báo giá</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" aria-expanded="true"><i class="fi-eye"></i> <span> Tuyển dụng </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level nav" aria-expanded="true">
                        <li><a href="<?php echo e(route('tuyendung.create')); ?>"><i class="fi-circle-plus"></i> Add Tuyển dụng</a></li>
                        <li><a href="<?php echo e(route('tuyendung.index')); ?>"><i class="fi-layers"></i> List Tuyển dụng</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo e(route('pages.index')); ?>"><i class="fi-ribbon"></i> <span>Pages</span> </a></li>
                <li><a href="<?php echo e(route('comment.index')); ?>"><i class="fi-speech-bubble"></i> <span>FAQs</span> </a></li>
                <li><a href="<?php echo e(route('resMail.index')); ?>"><i class="fi-mail"></i> <span>E-mail</span> </a></li>
                <li><a href="<?php echo e(route('contactIndex')); ?>"><i class="fi-speech-bubble"></i> <span>Contact</span> </a></li>


                <li><a href="<?php echo e(route('system.edit',1)); ?>"><i class="fi-cog"></i> <span>Setting</span> </a></li>
            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>