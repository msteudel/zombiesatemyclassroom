{{ $header }}
<table class="table table-striped">
    <thead>
    <tr>
        <th>Attribute Name</th>
        <th>Points</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php if( count( $attributes ) > 0 ): ?>
    <?php foreach( $attributes as $attribute ): ?>
        <tr>
            <td><?php echo $attribute->attribute_name ?></td>
            <td><?php echo $attribute->attribute_points ?></td>
            <td><a href="/attributes/edit/<?php echo $attribute->id ?>">Edit</a> | <a href="#">Delete</a></td>
        </tr>
    <?php endforeach ?>
    <?php else: ?>
        <tr>
            <td colspan="3">No attributes. <a href="/attributes/create ">Add new attribute</a></td>
        </tr>
    <?php endif ?>
    </tbody>
</table>
{{ $footer }}