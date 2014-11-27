<div class="create-form row center-block text-center">

    <div class="col-md-offset-1 col-md-10 col-md-offset-1">
        <h2 class="text-left">Create new user</h2>
        <form id='new_form' action="<?= $urlBase ?>users" method="POST">

            <input type="hidden" name="edit" value="new">

            <div class="form-group text-left">
                <label class="control-label" for="name">Name:</label>
                <input type="text" class="form-control" name="username" id="name" placeholder="Name" required="">
            </div>

            <div class="form-group text-left">
                <label class="control-label" for="email">Email:</label>
                <input type="email" class="form-control" name='email' id="email" placeholder="Email" required="">
            </div>

            <div class="form-group text-left">
                <label class="control-label" for="password">Password:</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="">
            </div>

            <div class="form-group text-left">
                <label class="control-label" for="confirm_password">Confirm password:</label>
                <input type="password" class="form-control" id="confirm_password" placeholder="Confirm password" required="">
            </div>

            <input type="hidden" class="transaction_id" name="transaction_id" value="">

            <div class="form-group text-left">
                <label class="control-label " for="coins">Coins:</label>
                <input type="number" class="form-control" name="coins" id="coins" placeholder="Coins" required="">
            </div>

            <div class="text-center">
                <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                <a class="btn btn-default btn-lg" href="<?= $urlBase ?>/users">Back</a>
            </div>


        </form>
    </div>

</div>