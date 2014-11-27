$(function(){

    $('#new_form').on('submit', function(){

        if ($('#password').val() == $('#confirm_password').val()){
            if ($('#coins').val() >= 0) {
                $("input[name='transaction_id']").val(Math.floor((Math.random() * 1000000000) + 1));
                return true;
            }
            else {
                alert('Coins must have positive value!');
                return false;
            }
        }
        else {
            alert("Passwords don't match!");
            return false;
        }

        return false;
    });

});