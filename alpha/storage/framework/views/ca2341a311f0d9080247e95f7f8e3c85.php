<?php $__env->startSection('content'); ?>
    <div class="container-fluid">

        <!-- Page Heading -->


        <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    <?php echo e(__('الاختبارات')); ?>

                </h6>
                <div class="ml-auto">
                    <a href="<?php echo e(route('admin.categories.create')); ?>" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text"><?php echo e(__('اضافة اختبار')); ?></span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover datatable datatable-category"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="10">

                                </th>
                                <th></th>
                                <th>اسم الاختبار</th>
                                <th>اسم الدورة </th>
                                <th>اسم الوحدة</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr data-entry-id="<?php echo e($category->id); ?>">
                                    <td>

                                    </td>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($category->name); ?></td>
                                    <td>
                                        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coursess): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($coursess->id == $category->courses): ?>
                                                <?php echo e($coursess->name); ?>

                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                    <td>
                                        <?php $__currentLoopData = $chabters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chabterss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($chabterss->id == $category->chabters): ?>
                                                <?php echo e($chabterss->name); ?>

                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>

                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="<?php echo e(route('admin.categories.edit', $category->id)); ?>"
                                                class="btn btn-info editdelete">
                                                تعديل
                                            </a>
                                            <form onclick="return confirm('are you sure ? ')" class="d-inline"
                                                action="<?php echo e(route('admin.categories.destroy', $category->id)); ?>"
                                                method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                                <button class="btn btn-danger "
                                                    style="border-top-left-radius: 0;border-bottom-left-radius: 0;">
                                                    حذف
                                                </button>
                                            </form>
                                            <a href="<?php echo e(route('admin.questions.index', $category->id)); ?>"
                                                class="btn btn-success editdelete">مشاهدة الاسئلة</a>
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
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            let deleteButtonTrans = 'delete selected'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "<?php echo e(route('admin.categories.mass_destroy')); ?>",
                className: 'btn-danger',
                action: function(e, dt, node, config) {
                    var ids = $.map(dt.rows({
                        selected: true
                    }).nodes(), function(entry) {
                        return $(entry).data('entry-id')
                    });
                    if (ids.length === 0) {
                        alert('zero selected')
                        return
                    }
                    if (confirm('are you sure ?')) {
                        $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                method: 'POST',
                                url: config.url,
                                data: {
                                    ids: ids,
                                    _method: 'DELETE'
                                }
                            })
                            .done(function() {
                                location.reload()
                            })
                    }
                }
            }
            dtButtons.push(deleteButton)
            $.extend(true, $.fn.dataTable.defaults, {
                order: [
                    [1, 'asc']
                ],
                pageLength: 50,
            });
            $('.datatable-category:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/categories/index.blade.php ENDPATH**/ ?>