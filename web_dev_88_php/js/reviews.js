let currentPost = 0
let pageRev = 1

function getReviews(id, page) {
    currentPost = id

    $.ajax({
        url: `api/reviews/get.php?post_id=${id}&page=${page}`
    }).done(function(res) {
        res = JSON.parse(res)
        showReviews(res.reviews)
        showPages([], [], res.totalPages)
    })
}



function saveReview(e) {
    e.preventDefault()
    const review = {
        title: $('#review-title').val(),
        content: $('#review-content').val(),
        mark: $("input[type='radio'][name='mark']:checked").val(),
        post: $('#postId').val(),
        author: $('#accountId').val()
    }

    $.ajax({
        url: 'api/reviews/save-ajax.php',
        method: 'POST',
        data: review
    }).done(function(res) {
        res = JSON.parse(res)
        if (res) {
            alert('Review Added')
            $('#review-title').val('')
            $('#review-content').val('')
            getReviews(review.post, pageRev)
        } else {
            alert('Something goes wrong!')
        }
    })

}



function showReviews(reviews) {
    let output = '<h3 class="mb-4">Reviews</h3>'

    for (const review of reviews) {
        output += `
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span> ${review.username} </span>
                    <span> <i class="fas fa-star"></i> ${review.mark}</span>
                </div>
                <div class="card-body">
                    <h5 class="card-title">${review.title}</h5>
                    <p class="card-text">${review.content}</p>
                </div>
                <div class="card-footer text-muted">
                    ${review.time}
                </div>
            </div>
        `
    }
    if (reviews.length > 0){
        $('#all-reviews').html(output)
    }
   
}


function showNextReview(page) {
    pageRev = page
    getReviews(currentPost, pageRev)
}
