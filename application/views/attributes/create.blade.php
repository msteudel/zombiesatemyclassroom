{{ $header }}

<?php if (!empty($errors)): ?>
    <?php foreach ($errors->messages as $error): ?>
        <?php echo $error . '<br />'; ?>
    <?php endforeach ?>
<?php endif ?>

<?php echo Form::open('/attributes/create', 'POST', array('class' => 'form-horizontal')) ?>

<?php echo Form::token() ?>

<div class="control-group">
    <?php echo Form::label('attribute_name', 'Attribute Name', array('class' => 'control-label')); ?>
    <div class="controls">
        <?php echo Form::text('attribute_name') ?>
    </div>
</div>

<div class="control-group">
    <?php echo Form::label('attribute_points', 'Attribute Points', array('class' => 'control-label')); ?>
    <div class="controls">
        <?php echo Form::text('attribute_points') ?>
    </div>
</div>

<div class="control-group">
    <div class="controls">
        <?php echo Form::submit('Create!', array('class' => 'btn')); ?>
    </div>
</div>

<?php echo Form::close(); ?>

{{ $footer }}