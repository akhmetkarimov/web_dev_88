function signUp(e) {
    e.preventDefault()

    const rePassword = $('#re-password').val()
    const password = $('#password').val()

    if (password !== rePassword) {
        return alert('Password not match')
    }
    let fm = new FormData()

    fm.append('firstName', $('#first-name').val())
    fm.append('lastName', $('#last-name').val())
    fm.append('userName', $('#user-name').val())
    fm.append('email', $('#email').val())
    fm.append('password', $('#password').val())
    fm.append('avatar', $('#user-avatar')[0].files[0])

    $.ajax({
        url: 'api/auth/signup.php',
        data: fm,
        method: 'POST',
        contentType: false,
        processData: false,
        enctype: "multipart/form-data",
    }).done(function(res) {
        res = JSON.parse(res)
        if (res) {
            alert('User Created')
            location.reload()
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
        if (res.status) {
            alert('You log In')
            location.reload()
        } else {
            alert(res.error)
        }
    })


}