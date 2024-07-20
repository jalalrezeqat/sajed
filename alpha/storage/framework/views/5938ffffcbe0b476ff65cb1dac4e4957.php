<?php $__env->startSection('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
   

    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    <?php echo e(__('الاجابات')); ?>

                </h6>
                <div class="ml-auto">
                    <a href="<?php echo e(route('admin.options.create',$questionsid)); ?>" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        
                        <span class="text"><?php echo e(__('اضافة اجابة')); ?></span>

                    </a>

                </div>
                <a href="<?php echo e(url('admin/questions/'.$questions->category_id )); ?>" class="btn btn-primary btn-sm shadow-sm"><?php echo e(__('رجوع')); ?></a>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover datatable datatable-option" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="10">

                                </th>
                                <th></th>
                                <th>السؤال</th>
                                <th>نص الاجابة</th>
                                <th>النقاط</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr data-entry-id="<?php echo e($option->id); ?>">
                                <td>

                                </td>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($option->question->question_text); ?></td>
                                <td><?php echo e($option->option_text); ?></td>
                                <td><?php echo e($option->points); ?></td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <a href="<?php echo e(url('admin/optionsue/' .$option->id ,$questionsid)); ?>" class="btn btn-info editdelete">
                                            تعديل
                                        </a>
                                        <form onclick="return confirm('are you sure ? ')" class="d-inline " action="<?php echo e(route('admin.options.destroy', $option->id)); ?>" method="GET">
                                            <?php echo csrf_field(); ?>
                                            <!-- <?php echo method_field('delete'); ?> -->
                                            <button class="btn btn-danger" style="border-top-left-radius: 0;border-bottom-left-radius: 0;">
                                               حذف
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="7" class="text-center"><?php echo e(__('Data Empty')); ?></td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- Content Row -->

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script-alt'); ?>
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  let deleteButtonTrans = 'delete selected'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "<?php echo e(route('admin.options.mass_destroy')); ?>",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });
      if (ids.length === 0) {
        alert('zero selected')
        return
      }
      if (confirm('are you sure ?')) {
        $.ajax({
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'asc' ]],
    pageLength: 50,
  });
  $('.datatable-option:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/options/index.blade.php ENDPATH**/ ?>