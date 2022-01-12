
<div class="containerBox">
    <?php foreach ($data as $item):?>
    <div class="box">
        <div class="icon">
            <span class="fas fa-code"></span>
        </div>
        <h3 class="title"><?php echo $item['name']; ?></h3>
        <p ><?php echo $item['description']; ?></p>
        <a href="/products/<?php echo $item['id'] ?>">read more <i class="fas fa-angle-double-right"></i></a>
    </div>
    <?php endforeach;?>
</div>
