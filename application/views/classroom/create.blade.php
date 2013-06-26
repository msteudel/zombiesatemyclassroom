{{ $header }}

<?php if( !empty( $errors ) ): ?>
    <?php foreach( $errors as $error ): ?>
        <?php echo $error . '<br />'; ?>
    <?php endforeach ?>
<?php endif ?>
<?php echo Form::open('/classroom/create_classroom', 'POST', array('class' => 'form-horizontal')) ?>

<?php echo Form::token() ?>

<div class="control-group">
    <?php echo Form::label('classroom_name', 'Classroom Name', array('class' => 'control-label')); ?>
    <div class="controls">
        <?php echo Form::text('classroom_name') ?>
    </div>
</div>

<div class="control-group">
    <div class="controls">
        <?php echo Form::submit( 'Create!', array( 'class' => 'btn') ); ?>
    </div>
</div>

<?php echo Form::close(); ?>

{{ $footer }}