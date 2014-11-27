<div class="create-form">
    <form action="<?= $urlBase ?>users" method="POST">
        <h2>Edit user</h2>
        <input type="hidden" name="edit" value="edit">
        <input type="hidden" name="id" value="<?= $results['id'] ?>">
        <div class="form-group">
            <label class="control-label" for="name">Username:</label>
            <input type="text" class="form-control" name="username" id="name" placeholder="Name" value="<?= $results['username'] ?>" required="">
        </div>
        <div class="form-group">
            <label class="control-label" for="name">Email:</label>
            <input type="text" class="form-control" name='email' id="email" placeholder="Email" value="<?= $results['email'] ?>" required="">
        </div>
        <div class="form-group">
            <label class="control-label" for="name">Coins:</label>
            <input type="text" class="form-control" name="coins" id="phone" placeholder="Mobile phone" value="<?= $results['coins'] ?>" required="">
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
</div>