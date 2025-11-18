<?php
/**
 * Business Information Display View
 * 
 * Displays business registration information when enabled
 */

if (!BusinessInfoHelper::isEnabled()) {
    return;
}

$fields = BusinessInfoHelper::getAllFields();
$legalNotice = BusinessInfoHelper::get('legal_notice');

if (empty($fields) && empty($legalNotice)) {
    return;
}
?>

<div class="business-info-section mt-4 pt-4 border-top">
    <div class="container">
        <h5 class="mb-3"><?php eT('Business Information'); ?></h5>
        
        <?php if (!empty($fields)): ?>
            <div class="row">
                <?php foreach ($fields as $field): ?>
                    <div class="col-md-6 mb-2">
                        <strong><?php echo CHtml::encode($field['label']); ?>:</strong>
                        <?php echo CHtml::encode($field['value']); ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        
        <?php if (!empty($legalNotice)): ?>
            <div class="mt-3">
                <p class="text-muted small"><?php echo nl2br(CHtml::encode($legalNotice)); ?></p>
            </div>
        <?php endif; ?>
    </div>
</div>
