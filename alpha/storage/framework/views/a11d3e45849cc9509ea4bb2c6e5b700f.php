<div class="hidden display-contents"
     x-data="{
        width: <?php if ((object) ('width') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('width'->value()); ?>')<?php echo e('width'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('width'); ?>')<?php endif; ?>.live,
        height: <?php if ((object) ('height') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('height'->value()); ?>')<?php echo e('height'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('height'); ?>')<?php endif; ?>.live,
        update() {
            this.width = ( window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth )
            this.height = ( window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight )
        },
    }"
     x-init="update()"
     x-on:resize.window.debounce.750ms="update()"
>
    
    
</div>
<?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/vendor/tanthammar/livewire-window-size/src/../resources//windowsize.blade.php ENDPATH**/ ?>