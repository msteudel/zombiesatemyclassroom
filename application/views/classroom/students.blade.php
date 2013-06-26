{{ $header }}
<table class="table table-striped">
    <thead>
        <tr>
            <th>Student Name</th><th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $students as $student ): ?>
            <tr>
                <td><?php echo $student->user_name ?></td><td><a href="#">Delete</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
{{ $footer }}