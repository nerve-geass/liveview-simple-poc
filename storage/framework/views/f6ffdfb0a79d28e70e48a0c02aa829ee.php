<div>
    <h1>Title: "<?php echo e($title); ?>"</h1>
    <h1>Search: "<?php echo e($search); ?>"</h1>
    <input type="text" wire:model="search" placeholder="Search pokemon..."> 
    <button type="button" wire:click="$refresh">Search</button>
    <table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $pokemons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pokemon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr wire:key="<?php echo e($pokemon['id']); ?>"> 
            <td><?php echo e($pokemon['id']); ?></td>
            <td><?php echo e($pokemon['name']['english']); ?></td>
            <td><img src="assets/images/<?php echo e(str_pad($pokemon['id'], 3, '0', STR_PAD_LEFT)); ?>.png" width="20" height="20"/></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </tbody>
    </table>
    
</div><?php /**PATH /Users/federico.giudici/personal_projects/liveview-simple-poc/poc/resources/views/livewire/create-post.blade.php ENDPATH**/ ?>