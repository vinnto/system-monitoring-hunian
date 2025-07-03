<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu"><?php echo app('translator')->get('translation.Menu'); ?></li>

                <li>
                    <a href="<?php echo e(route('admin.dashboard')); ?>">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards"><?php echo app('translator')->get('translation.Dashboards'); ?></span>
                    </a>
                </li>

                
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <span class="badge rounded-pill bg-danger float-end" key="t-hot"><?php echo app('translator')->get('translation.hot'); ?></span>
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts"><?php echo app('translator')->get('translation.Layouts'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-vertical"><?php echo app('translator')->get('translation.Vertical'); ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-light-sidebar" key="t-light-sidebar"><?php echo app('translator')->get('translation.Light_Sidebar'); ?></a></li>
                                <li><a href="layouts-compact-sidebar" key="t-compact-sidebar"><?php echo app('translator')->get('translation.Compact_Sidebar'); ?></a></li>
                                <li><a href="layouts-icon-sidebar" key="t-icon-sidebar"><?php echo app('translator')->get('translation.Icon_Sidebar'); ?></a></li>
                                <li><a href="layouts-boxed" key="t-boxed-width"><?php echo app('translator')->get('translation.Boxed_Width'); ?></a>
                                </li>
                                <li><a href="layouts-preloader" key="t-preloader"><?php echo app('translator')->get('translation.Preloader'); ?></a>
                                </li>
                                <li><a href="layouts-colored-sidebar" key="t-colored-sidebar"><?php echo app('translator')->get('translation.Colored_Sidebar'); ?></a>
                                </li>
                                <li><a href="layouts-scrollable" key="t-scrollable"><?php echo app('translator')->get('translation.Scrollable'); ?></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-horizontal"><?php echo app('translator')->get('translation.Horizontal'); ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="<?php echo e(route('user.dashboard')); ?>" key="t-horizontal"><?php echo app('translator')->get('translation.Horizontal'); ?></a>
                                </li>
                                <li><a href="layouts-hori-topbar-light" key="t-topbar-light"><?php echo app('translator')->get('translation.Topbar_Light'); ?></a></li>
                                <li><a href="layouts-hori-boxed-width" key="t-boxed-width"><?php echo app('translator')->get('translation.Boxed_Width'); ?></a></li>
                                <li><a href="layouts-hori-preloader" key="t-preloader"><?php echo app('translator')->get('translation.Preloader'); ?></a></li>
                                <li><a href="layouts-hori-colored-header" key="t-colored-topbar"><?php echo app('translator')->get('translation.Colored_Header'); ?></a>
                                </li>
                                <li><a href="layouts-hori-scrollable" key="t-scrollable"><?php echo app('translator')->get('translation.Scrollable'); ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="<?php echo e(route('admin.monitoring.hunian')); ?>">
                        <i class="bx bx-buildings"></i>
                        
                        <span key="t-jobs">Hasil Monitoring</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(route('admin.clarification')); ?>">
                        <i class="bx bx-calendar"></i>
                        <span key="t-jobs">Pemanggilan</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(route('admin.penerima.manfaat')); ?>">
                        <i class="bx bxs-user"></i>
                        <span key="t-jobs">Penerima Manfaat</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="bx bx-bar-chart"></i>
                        <span key="t-jobs">Statistik</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-data"></i>
                        <span key="t-email">Master Data</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="#" key="t-inbox">
                                <i class="bx bx-slideshow"></i> Slides
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo e(route('hunian.index')); ?>" key="t-inbox">
                                <i class="bx bx-home-alt"></i>Hunian
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('lokasi.index')); ?>" key="t-inbox">
                                <i class="bx bx-map"></i> Lokasi
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('tower.index')); ?>" key="t-inbox">
                                <i class="bx bx-map"></i> Tower
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('lantai.index')); ?>" key="t-inbox">
                                <i class="bx bx-layer"></i> Lantai
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('no-unit.index')); ?>" key="t-inbox">
                                <i class="bx bx-hash"></i> No Unit
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('luas-tipe.index')); ?>" key="t-inbox">
                                <i class="bx bx-category"></i> Luas Tipe
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('periode.index')); ?>" key="t-inbox">
                                <i class="bx bx-calendar"></i> Periode
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('status-pm.index')); ?>" key="t-inbox">
                                <i class="bx bx-user-check"></i> Status PM
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('pekerjaan.index')); ?>" key="t-inbox">
                                <i class="bx bx-briefcase"></i> Pekerjaan
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('keterangan.index')); ?>" key="t-inbox">
                                <i class="bx bx-info-circle"></i> Keterangan
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('tempat-tinggal.index')); ?>" key="t-inbox">
                                <i class="bx bx-home"></i> Tempat Tinggal
                            </a>
                        </li>

                    </ul>
                </li>


                

                

                

                

                

                

                

                

                

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<?php /**PATH D:\laragon\www\system-monitoring-hunian\resources\views\layouts\sidebar.blade.php ENDPATH**/ ?>