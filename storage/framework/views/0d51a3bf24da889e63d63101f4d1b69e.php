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
                        <span key="t-jobs"><?php echo app('translator')->get('translation.Jobs'); ?></span>
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

                

                

                

                

                

                

                

                

                

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<?php /**PATH D:\laragon\www\system-monitoring-hunian\resources\views\layouts\sidebar.blade.php ENDPATH**/ ?>