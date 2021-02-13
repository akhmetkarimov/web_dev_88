let pageVal = 1

getAllPosts(pageVal)

function getAllPosts(page) {
    $.ajax({
        url: `get.php?page=${page}`
    }).done(function(res) {
        res = JSON.parse(res)
        console.log(res)

        showAllPosts(res.posts)
        showPages(res.totalPages)
    })
}


function showAllPosts(posts) {
    let output = ''
    for (const post of posts) {
        output += `
        <div class='col-sm-4 mb-4'>
            <div class='card'>
                <div class='card-body'>
                    <h5 class='card-title'>${post.title}</h5>
                    <p class='card-text'>${post.description}</p>
                    <p class='card-text'>${post.views}</p>
                    <a href='detail.php?post-id=${post.id}' class='btn btn-primary'>Go somewhere</a>
                    <a href='edit.php?post-id=${post.id}' class='btn btn-info'>Edit</a>
                    <a href='delete.php?pid=${post.id}' class='btn btn-danger'>Delete</a>
                </div>
            </div>
        </div>
        `
    }
    $('#all-posts').html(output)
}

function showPages(pages) {
    let output = ''
    for (let i = 1; i <= pages; i++) {
        output += `
        <li class='page-item'><a class='page-link' href='#' onclick="showNext(${i})">${i}</a></li>
        `
    }
    $('#all-pages').html(output)
}


function showNext(page) {
    console.log('111', page)
    pageVal = page
    getAllPosts(pageVal)
}