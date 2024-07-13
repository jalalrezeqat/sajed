
<div>

    <p>---WIDTH---</p>

    <div>session width: <?php echo e(session('windowW')); ?></div>

    <?php if (\Illuminate\Support\Facades\Blade::check('windowWidthLessThan', 400)): ?>
    <div id="lw-windowsize-wls400">windowWIDTHLessThan 400</div>
    <?php endif; ?>

    <?php if (\Illuminate\Support\Facades\Blade::check('windowWidthGreaterThan', 399)): ?>
    <div id="lw-windowsize-wgt399">windowWIDTHGreaterThan 399</div>
    <?php endif; ?>

    <?php if (\Illuminate\Support\Facades\Blade::check('windowWidthBetween', 400, 1500)): ?>
    <div id="lw-windowsize-wbtw400-1500">windowWIDTHBetween 400, 1500</div>
    <?php endif; ?>

    <p>---HEIGHT---</p>

    <div>session height:  <?php echo e(session('windowH')); ?></div>

    <?php if (\Illuminate\Support\Facades\Blade::check('windowHeightLessThan', 500)): ?>
    <div id="lw-windowsize-hls500">windowHEIGHTLessThan 500</div>
    <?php endif; ?>

    <?php if (\Illuminate\Support\Facades\Blade::check('windowHeightGreaterThan', 499)): ?>
    <div id="lw-windowsize-hgt499">windowHEIGHTGreaterThan 499</div>
    <?php endif; ?>

    <?php if (\Illuminate\Support\Facades\Blade::check('windowHeightBetween', 400, 1500)): ?>
    <div id="lw-windowsize-hbtw400-900">windowHEIGHTBetween 400, 1500</div>
    <?php endif; ?>

    <p>---BREAKPOINTS---</p>

    <?php if (\Illuminate\Support\Facades\Blade::check('windowXs')): ?>
    <div id="lw-windowsize-xs" class="text-2xl">Xs window</div>
    <?php endif; ?>

    <?php if (\Illuminate\Support\Facades\Blade::check('windowSm')): ?>
    <div id="lw-windowsize-sm" class="text-2xl">Sm window</div>
    <?php endif; ?>

    <?php if (\Illuminate\Support\Facades\Blade::check('windowMd')): ?>
    <div id="lw-windowsize-md" class="text-2xl">Md window</div>
    <?php endif; ?>

    <?php if (\Illuminate\Support\Facades\Blade::check('windowLg')): ?>
    <div id="lw-windowsize-lg" class="text-2xl">Lg window</div>
    <?php endif; ?>

    <?php if (\Illuminate\Support\Facades\Blade::check('windowXl')): ?>
    <div id="lw-windowsize-xl" class="text-2xl">Xl window</div>
    <?php endif; ?>

    <?php if (\Illuminate\Support\Facades\Blade::check('window2xl')): ?>
    <div id="lw-windowsize-2xl" class="text-2xl">2xl window</div>
    <?php endif; ?>

    <p>---END---</p>
</div>
<?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/vendor/tanthammar/laravel-window-size/src/../resources//components/test-windowsize.blade.php ENDPATH**/ ?>