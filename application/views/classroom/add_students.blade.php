{{ $header }}

<ul class="nav nav-tabs">
    <li class="active">
        <a href="#" rel="manual" class="show">Manual</a>
    </li>
    <li><a href="#" rel="import" class="show">Import</a></li>
</ul>

<?php echo Form::open() ?>
<ul id="manual">

    <?php for( $i = 0; $i < 10; $i++ ): ?>
        <li><?php echo Form::text('student-' . $i )  ?></li>
    <?php endfor ?>

    <li><?php echo Form::submit('submitForm', array( 'class' => 'btn' ) ) ?></li>
</ul>

<?php echo Form::close() ?>

<?php echo Form::open() ?>
    <ul id="import" class="hide">
        <li>Google Spreadsheet: <?php echo Form::text( 'google' ) ?></li>
        <li>CSV File: <?php echo Form::file( 'google' ) ?></li>
    </ul>
<?php echo Form::close() ?>
{{ $footer }}