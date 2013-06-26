{{ $header }}
<div class="row">
<h3>Register</h3>


    <?php if( !empty( $errors ) ): ?>
        <?php foreach( $errors as $error ): ?>
            <?php echo $error . '<br />' ?>
            <?php endforeach ?>
    <?php endif ?>
<?php echo Form::open('/teacher/register', 'POST', array( 'class' => 'form-horizontal' ) ) ?>
<?php echo Form::token() ?>
<div class="control-group">
    <?php echo Form::label( 'teacher_name', 'Your Name', array( 'class' => 'control-label') ); ?>
    <div class="controls">
        <?php echo Form::text( 'teacher_name' ) ?>
    </div>
</div>

<div class="control-group">
    <?php echo Form::label( 'email','E-mail Address', array( 'class' => 'control-label') ); ?>
    <div class="controls">
        <?php echo Form::text( 'email' ); ?>
    </div>
</div>

<div class="control-group">
    <?php echo Form::label( 'confirm-email','Confirm E-mail Address', array( 'class' => 'control-label') ); ?>
    <div class="controls">
        <?php echo Form::text( 'confirm-email' ); ?>
    </div>
</div>


<div class="control-group">
    <?php echo Form::label( 'password','Password', array( 'class' => 'control-label') ); ?>
    <div class="controls">
        <?php echo Form::password( 'password' ); ?>
    </div>
</div>

    <div class="control-group">
        <div class="controls">
            <?php echo Form::submit( 'Fight the Zombies!', array( 'class' => 'btn') ); ?>
        </div>
    </div>

<?php echo Form::close() ?>
</div>
{{ $footer }}