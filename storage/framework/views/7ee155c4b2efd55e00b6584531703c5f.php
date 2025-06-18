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
                    <a href="<?php echo e(route('admin.monitoring.hunian')); ?>">
                        <i class="bx bx-buildings"></i>
                        
                        <span key="t-jobs">Hasil Monitoring</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(route('admin.clarification')); ?>">
                        <i class="bx bx-calendar"></i>
                        <span key="t-jobs">Klarifikasi</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(route('admin.penerima.manfaat')); ?>">
                        <i class="bx bxs-user"></i>
                        <span key="t-jobs">Penerima Manfaat</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-data"></i>
                        <span key="t-email">Master Data</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
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
<?php /**PATH D:\laragon\www\system-monitoring-hunian\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>