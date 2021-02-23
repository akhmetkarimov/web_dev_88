
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
    
    $.ajax({
        url: 'api/posts/save-ajax.php',
        method: 'POST',
        data: {
            title: $('#title').val(),
            description: $('#description').val(),
            category: $('#category').val(),
            author: $('#accountId').val()
        }
    }).done(function(res){
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
