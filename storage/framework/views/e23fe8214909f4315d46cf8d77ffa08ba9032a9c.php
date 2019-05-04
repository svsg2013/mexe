<div class="block-sidebar-product">
    <div class="block-sidebar-product-title">
        <h2>Sản phẩm liên quan</h2>
    </div>
    <div class="block-sidebar-product-content">
        <?php if(!empty($thisRelate)): ?>
            <?php echo $thisRelate; ?>

        <?php else: ?>
            <p style="margin-left: 10px">Không có sản phẩm liên quan</p>
        <?php endif; ?>
    </div>
</div>