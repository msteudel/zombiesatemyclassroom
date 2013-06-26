{{ $header }}

<div class="row">

    <div class="span6">

    </div>

    <div class="span6">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Rank</th>
                    <th>Bites</th>
                </tr>
            </thead>
            <tbody>
                <?php echo render_each('game.student', $students, 'student' ); ?>
            </tbody>
        </table>
    </div>
</div>
{{ $footer }}