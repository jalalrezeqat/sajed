<?php $__env->startSection('content'); ?>
    <div class="container dir">

        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header font18px" style="background-color:#27AC1F;color:black">اختبار</div>

                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success" role="alert">
                                        <?php echo e(session('status')); ?>

                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <form method="POST" action="<?php echo e(url('test/' . $quiz->id)); ?>">
                            <?php echo csrf_field(); ?>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="card mb-3">
                                    <div class="card-header  font18px" style="background-color:#27AC1F;color:black">
                                        <?php echo e($category->name); ?></div>

                                    <div class="card-body dir">
                                        <?php $__currentLoopData = $category->categoryQuestions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="card <?php if(!$loop->last): ?> mb-3 <?php endif; ?>">
                                                <div class="card-header font14px"
                                                    style="background-color:#27AC1F;color:black">
                                                    <?php echo e($question->question_text); ?></div>

                                                <div class="card-body " style="color:black">
                                                    <input type="hidden" name="questions[<?php echo e($question->id); ?>]"
                                                        value="">
                                                    <?php $__currentLoopData = $question->questionOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="form-check "
                                                            style="text-align: right;position: inherit;  direction: rtl;
    unicode-bidi: bidi-override;">
                                                            <input
                                                                className="form-check-input appearance-none rounded-full h-7 w-7 border-4 border-[#5F6368] bg-[#C4C4C4] hover:shadow-lg hover:shadow-[#5F6368] hover:border-[#3B52B5] checked:bg-[#7EABFF] checked:border-[#3B52B5] focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-5 cursor-pointer"
                                                                type="radio" name="questions[<?php echo e($question->id); ?>]"
                                                                id="option-<?php echo e($option->id); ?>"
                                                                value="<?php echo e($option->id); ?>"<?php if(old("questions.$question->id") == $option->id): ?> checked <?php endif; ?>>


                                                            <label class="form-check-label"
                                                                for="option-<?php echo e($option->id); ?>">
                                                                <?php echo e($option->option_text); ?>

                                                            </label>

                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    <?php if($errors->has("questions.$question->id")): ?>
                                                        <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;"
                                                            role="alert">
                                                            <strong><?php echo e($errors->first("questions.$question->id")); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php $result = DB::table('results')
                                ->where('user_id', '=', Auth::user()->id)
                                ->where('namequiz', '=', $category->id)
                                ->first();
                            ?>
                            <?php if($result == null): ?>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            <?php elseif(($result->namequiz == $category->id) & ($result->user_id == Auth::user()->id)): ?>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            <?php endif; ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/front/quiz.blade.php ENDPATH**/ ?>