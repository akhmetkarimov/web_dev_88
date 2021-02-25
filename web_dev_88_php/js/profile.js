let myPage = 1

function getMyPosts(page) {
    $.ajax({
        url: `api/profile/my-posts.php?page=${page}`
    }).done(function(res) {
        res = JSON.parse(res)
        showAllPosts([], res.posts)
        showPages([], res.totalPages)
    })
}


function newPost(e) {
    e.preventDefault()

    let fm = new FormData()

    fm.append('title', $('#title').val())
    fm.append('description', $('#description').val())
    fm.append('category', $('#category').val())
    fm.append('author', $('#accountId').val())
    fm.append('poster', $('#poster')[0].files[0])

    $.ajax({
        url: 'api/posts/save-ajax.php',
        method: 'POST',
        data: fm,
        contentType: false,
        processData: false,
        enctype: "multipart/form-data",
    }).done(function(res) {
        res = JSON.parse(res)
        if (res) {
            alert('Post Added')
            getMyPosts(myPage)
        } else {
            
        }
    })

}

function showNextMy(page) {
    myPage = page
    getMyPosts(myPage)
}






function changeInformation(e) {
    e.preventDefault()

    let fm = new FormData()

    fm.append('first', $('#change-first-name').val())
    fm.append('last', $('#change-last-name').val())
    fm.append('account', $('#change-user-id').val())

    if ($('#change-avatar')[0].files[0] != undefined) {
        fm.append('avatar', $('#change-avatar')[0].files[0])
    }

    console.log(fm)

    $.ajax({
        url: 'api/profile/change-info.php',
        method: 'POST',
        data: fm,
        contentType: false,
        processData: false,
        enctype: "multipart/form-data",
    }).done(function(res) {
        res = JSON.parse(res)
        alert('Information Changed')
        location.reload()
    })

}


function setProfileInfo(id) {
    $.ajax({
        url: `api/profile/get-info.php?uid=${id}`,
    }).done(function(res) {
        res = JSON.parse(res)
        $('#change-first-name').val(res.first)
        $('#change-last-name').val(res.last)
        $('#change-img').attr('src', res.avatar)
    })
}



function changePassword(e) {
    e.preventDefault()

    const user = {
        oldpassword: $('#change-old-password').val(),
        password: $('#change-new-password').val(),
        account: $('#change-pass-id').val(),
    }

    const rePassword = $('#change-new-re-password').val()

    if (user.password !== rePassword) {
        return alert('Password not match')
    }

    $.ajax({
        url: 'api/profile/change-pass.php',
        data: user,
        method: 'POST'
    }).done(function(res) {
        res = JSON.parse(res)
        if (res.status) {
            alert('Password Changed')
            location.reload()
        } else {
            alert(res.error)
        }
    })

}