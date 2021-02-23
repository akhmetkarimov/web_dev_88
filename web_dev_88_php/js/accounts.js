function signUp(e) {
    e.preventDefault()

    const user = {
        firstName: $('#first-name').val(),
        lastName: $('#last-name').val(),
        userName: $('#user-name').val(),
        email: $('#email').val(),
        password: $('#password').val(),
    }

    const rePassword = $('#re-password').val()

    if (user.password !== rePassword) {
        return alert('Password not match')
    }

    $.ajax({
        url: 'api/auth/signup.php',
        data: user,
        method: 'POST'
    }).done(function(res) {
        res = JSON.parse(res)
        if(res) {
            alert('User Created')
            setTimeout(function(){
                location.reload()
            }, 1000)
        } else {
            alert('User exist')
        }
    })


}

function signIn(e) {
    e.preventDefault()

    const user = {
        userEmail: $('#log-name').val(),
        password: $('#log-password').val(),
    }

    $.ajax({
        url: 'api/auth/signin.php',
        data: user,
        method: 'POST'
    }).done(function(res) {
        res = JSON.parse(res)
        if(res.status) {
            alert('You log In')
            setTimeout(function(){
                location.reload()
            }, 1000)
        } else {
            alert(res.error)
        }
    })


}