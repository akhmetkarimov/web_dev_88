let pageVal = 1
let category_id = 0

getAllPosts(pageVal, category_id)

function getAllPosts(page, category) {
    $.ajax({
        url: `api/posts/get.php?page=${page}&catid=${category}`
    }).done(function(res) {
        res = JSON.parse(res)
        showAllPosts(res.posts, [])
        showPages(res.totalPages, [])
    })
}


function showAllPosts(posts, myposts) {
    let output = '', myPostOutput = ''

    for (const post of posts) {
            output += `
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <a href="#" class="d-inline-block mb-2 btn btn-primary">${post.name}</a>
                        <h3 class="mb-0">
                            <a class="text-dark" href="detail.php?post-id=${post.id}">${post.title}</a>
                        </h3>
                        <div class="mb-1 text-muted">${post.time}</div>
                        <p class="card-text mb-auto">${post.description.substr(0, 20)}...</p>
                        <p> <i class="far fa-eye"></i> ${post.views}  <i class="fas fa-comment"></i> 0  <i class="fas fa-star"></i> 0 </p>
                        <a href="detail.php?post-id=${post.id}">Continue reading</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" src="https://codyhouse.co/demo/squeezebox-portfolio-template/img/img.png" alt="Card image cap" width="130">
                </div>
            </div>
            `
    }

    $('#all-posts').html(output)

    for (const post of myposts) {
        myPostOutput += `
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <a href="#" class="d-inline-block mb-2 btn btn-primary">${post.name}</a>
                    <h3 class="mb-0">
                        <a class="text-dark" href="detail.php?post-id=${post.id}">${post.title}</a>
                    </h3>
                    <div class="mb-1 text-muted">${post.time}</div>
                    <p class="card-text mb-auto">${post.description.substr(0, 20)}...</p>
                    <p> <i class="far fa-eye"></i> ${post.views}  <i class="fas fa-comment"></i> 0  <i class="fas fa-star"></i> 0 </p>
                    <a href="detail.php?post-id=${post.id}">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="https://codyhouse.co/demo/squeezebox-portfolio-template/img/img.png" alt="Card image cap" width="130">
            </div>
        </div>
        `
    }

    $('#my-posts').html(myPostOutput)
}

function showPages(pages, mypages) {
    let output = '', myPostPages = ''

    for (let i = 1; i <= pages; i++) {
        output += `
        <li class='page-item'><a class='page-link' href='#' onclick="showNext(${i})">${i}</a></li>
        `
    }

    $('#all-pages').html(output)

    for (let i = 1; i <= mypages; i++) {
        myPostPages += `
        <li class='page-item'><a class='page-link' href='#' onclick="showNextMy(${i})">${i}</a></li>
        `
    }

    $('#my-pages').html(myPostPages)

}


function showNext(page) {
    pageVal = page
    getAllPosts(pageVal)
}

function setCategory(id) {
    category_id = id
    getAllPosts(pageVal, category_id)
}






