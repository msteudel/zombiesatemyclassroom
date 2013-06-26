{{ $header }}
<table class="table">
    <thead>
        <tr>
            <td>Name</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        <?php if( is_array( $students ) && count( $students ) > 0 ): ?>
            <?php foreach( $students as $student ): ?>
                <tr>
                    <td><?= $student->student_name ?></td>
                </tr>
            <?php endforeach ?>
        <?php endif ?>
    </tbody>
</table>
{{ $footer }}