$(function(){
    $('#%1$s').on('xhr.dt', function (e, settings, json, xhr) {
        if (json == null || !('disableOrdering' in json)) return;

        let table = <?php echo e(config('datatables-html.namespace', 'LaravelDataTables')); ?>[$(this).attr('id')];
        if (json.disableOrdering) {
            table.settings()[0].aoColumns.forEach(function(column) {
                column.bSortable = false;
                $(column.nTh).removeClass('sorting_asc sorting_desc sorting').addClass('sorting_disabled');
            });
        } else {
            let changed = false;
            table.settings()[0].aoColumns.forEach(function(column) {
                if (column.bSortable) return;
                column.bSortable = true;
                changed = true;
            });
            if (changed) {
                table.draw();
            }
        }
    });
});
<?php /**PATH D:\laragon\www\system-monitoring-hunian\vendor\yajra\laravel-datatables-html\src\resources\views\scout.blade.php ENDPATH**/ ?>