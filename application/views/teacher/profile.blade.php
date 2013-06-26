{{ $header }}

 <div class="row">
     <h3>Classrooms</h3>

     <table class="table table-stripted">
         <thead>
         <tr>
             <th>Classroom Name</th>
             <th>Actions</th>
         </tr>
         </thead>
         <tbody>
         <?php if( !empty( $classrooms ) && count( $classrooms ) > 0 ): ?>
             <?php foreach( $classrooms as $classroom ): ?>
                <tr>
                    <td><?php echo $classroom->classroom_name ?></td>
                    <td><a href="/game/attendance/<?= $classroom->id ?>" class="btn">Attendance</a> <a href="/game/run/<?= $classroom->id ?>" class="btn">Run Game</a> <a href="/classroom/students/<?php echo $classroom->id ?>">View Students</a> | <a href="/classroom/add_students/<?php echo $classroom->id ?>">Add Students</a> | <a href="/classroom/edit/<?php echo $classroom->id ?>">Edit</a> | <a href="/classroom/delete/<?php echo $classroom->id ?>">Delete</a></td>
                </tr>
             <?php endforeach ?>
         <?php else: ?>
            <tr>
                <td>No classrooms. <a href="/classroom/create">Create a classroom now</a></td>
                <td></td>
            </tr>
         <?php endif ?>
         </tbody>


     </table>
 </div>
{{ $footer }}