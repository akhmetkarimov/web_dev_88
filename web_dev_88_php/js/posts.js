let pageVal = 1
let category_id = 0

getAllPosts(pageVal, category_id)

function getAllPosts(page, category) {
    $.ajax({
        url: `api/posts/get.php?page=${page}&catid=${category}`
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
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <a href="#" class="d-inline-block mb-2 btn btn-primary">${post.name}</a>
                        <h3 class="mb-0">
                            <a class="text-dark" href="detail.php?post-id=${post.id}">${post.title}</a>
                        </h3>
                        <div class="mb-1 text-muted">${post.time}</div>
                        <p class="card-text mb-auto">${post.description}</p>
                        <p> <i class="far fa-eye"></i> ${post.views}  <i class="fas fa-comment"></i> 0  <i class="fas fa-star"></i> 0 </p>
                        <a href="detail.php?post-id=${post.id}">Continue reading</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" src="https://codyhouse.co/demo/squeezebox-portfolio-template/img/img.png" alt="Card image cap">
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
    pageVal = page
    getAllPosts(pageVal)
}


function setCategory(id) {
    category_id = id
    getAllPosts(pageVal, category_id)
}