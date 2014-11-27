<div class="create-form row center-block text-center">

    <div class="col-md-offset-1 col-md-10 col-md-offset-1">
        <h2>Edit user</h2>
        <form action="<?= $urlBase ?>users" method="POST">
            <input type="hidden" name="edit" value="edit">
            <input type="hidden" name="id" value="<?= $results['id'] ?>">
            <div class="form-group text-left">
                <label class="control-label" for="name">Username:</label>
                <input type="text" class="form-control" name="username" id="name" placeholder="Name" value="<?= $results['username'] ?>" required="">
            </div>
            <div class="form-group text-left">
                <label class="control-label" for="name">Email:</label>
                <input type="text" class="form-control" name='email' id="email" placeholder="Email" value="<?= $results['email'] ?>" required="">
            </div>
            <div class="form-group text-left">
                <label class="control-label" for="name">Coins:</label>
                <input type="text" class="form-control" name="coins" id="phone" placeholder="Mobile phone" value="<?= $results['coins'] ?>" required="">
            </div>
            <div class="text-center">
                <button class="btn btn-primary btn-lg">Submit</button>
                <a class="btn btn-default btn-lg" href="<?= $urlBase ?>/users">Back</a>
            </div>
        </form>
    </div>

</div>