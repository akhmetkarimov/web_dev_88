<form onsubmit="saveReview(event)">
    <h3 class="mb-4">Add Your Review</h3>
    <div class="form-group">
        <label for="review-title">Review Title</label>
        <input type="text" class="form-control" id="review-title" placeholder="Enter Title" required>
    </div>
    
    <div class="form-group mt-4">
        <label for="review-content">Review Content</label>
        <textarea class="form-control" id="review-content" rows="3" required placeholder="Enter Content"></textarea>
    </div>

    <div class="form-group mt-4">
        <label>Choose Mark of Post</label>
    </div>

    <div class="d-flex">
        <div class="form-check" style="margin-right: 10px">
            <input class="form-check-input" type="radio" name="mark" value="1" checked>
            <label class="form-check-label" for="mark">
                1
            </label>
        </div>
        <div class="form-check" style="margin-right: 10px">
            <input class="form-check-input" type="radio" name="mark" value="2" checked>
            <label class="form-check-label" for="mark">
                2
            </label>
        </div>
        <div class="form-check" style="margin-right: 10px">
            <input class="form-check-input" type="radio" name="mark" value="3" checked>
            <label class="form-check-label" for="mark">
                3
            </label>
        </div>
        <div class="form-check" style="margin-right: 10px">
            <input class="form-check-input" type="radio" name="mark" value="4" checked>
            <label class="form-check-label" for="mark">
                4
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="mark" value="5" checked>
            <label class="form-check-label" for="mark">
                5
            </label>
        </div>
    </div>
    <input type="hidden" id="accountId" value="<?= $_SESSION['account'] ?>">
    <input type="hidden" id="postId" value="<?= $pid ?>">
    <div class="form-group mt-4">
        <button class="btn btn-primary">Add Review</button>
    </div>
</form>