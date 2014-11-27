<div class="container">
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <a class="btn btn-success btn-lg" id="new" href="<?= $urlBase ?>users/new">Create</a>

            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email Address</th>
                    <th>Transaction ID</th>
                    <th>Coins</th>
                    <th colspan="3">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($results as $result)
                {
                    echo '<tr>';
                    echo '<td>'.$result['id'].'</td>';
                    echo '<td>'.$result['username'].'</td>';
                    echo '<td>'.$result['email'].'</td>';
                    echo '<td>'.$result['transaction_id'].'</td>';
                    echo '<td>'.$result['coins'].'</td>';
                    echo '<td class="text-center"><a class="btn btn-default" href="'.$urlBase.'users/'.$result['id'].'">Read</a></td>';
                    echo '<td class="text-center"><a class="btn btn-warning" href="'.$urlBase.'users/'.$result['id'].'/edit" >Edit</a></td>';
                    echo '<td class="text-center"><form action="'.$urlBase.'users" method="POST"><input type="hidden" name="id" value="'.$result['id'].'"><input type="hidden" name="edit" value="delete"/><button type="submit" class="btn btn-danger">Delete</button></form></td>';
                    echo '</tr>';
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

