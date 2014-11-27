<div class="container row">
    <div class="col-md-offset-1 col-md-10">
        <div class="row">
            <h3>Read a Customer</h3>
        </div>

        <div class="row">
            <div class="col-md-6 text-right">
                <label class="checkbox">Name:</label>
                <label class="checkbox">Email Address:</label>
                <label class="checkbox">Transaction ID:</label>
                <label class="checkbox">Coins:</label>
            </div>
            <div class="col-md-6">
                <label class="checkbox">
                    <?php echo $results['username'];?>
                </label>
                <label class="checkbox">
                    <?php echo $results['email'];?>
                </label>
                <label class="checkbox">
                    <?php echo $results['transaction_id'];?>
                </label>
                <label class="checkbox">
                    <?php echo $results['coins'];?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="panel panel-primary text-center" style="padding: 10px;">
                <div class="panel-element">
                    <a class="btn btn-default" href="<?= $urlBase ?>/users">Back</a>
                </div>
                <div class="panel-element">
                    <a class="btn btn-warning" href="'.$urlBase.'users/'.$result['id'].'/edit" >Edit</a>
                </div>
                <div class="panel-element">
                    <form action="'.$urlBase.'users" method="POST"><input type="hidden" name="id" value="'.$result['id'].'"><input type="hidden" name="edit" value="delete"/><button type="submit" class="btn btn-danger">Delete</button></form>
                </div>
            </div>
        </div>
    </div>
</div>