<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Sign Up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="create-user" onsubmit="signUp(event)">

                    <div class="form-group mb-3">
                        <label>First Name</label>
                        <input type="text" class="form-control" id="first-name" placeholder="Enter First-name" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Last Name</label>
                        <input type="text" class="form-control" id="last-name" placeholder="Enter Last-name" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Username</label>
                        <input type="text" class="form-control" id="user-name" placeholder="Enter Username" required>
                    </div>

                    <!-- <div class="form-group mb-3">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div> -->

                    <div class="form-group mb-3">
                        <label>Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Re-Password</label>
                        <input type="password" class="form-control" id="re-password" placeholder="Re-Password" required>
                    </div>

                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="create-user">Sign Up</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="add-post" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Create New Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="new-post" onsubmit="newPost(event)">

                    <div class="form-group mb-3">
                        <label>Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter Title" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Description</label>
                        <textarea class="form-control" id="description" rows="3" placeholder="Enter Description"></textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label>Category</label>
                        <select class="form-control" id="category">
                        </select>
                    </div>
                    <input type="hidden" value="<?=$_SESSION['account']?>" id="accountId">
                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="new-post">Save changes</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Sign In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="login" onsubmit="signIn(event)">

                    <div class="form-group mb-3">
                        <label>Username / Email</label>
                        <input type="text" class="form-control" id="log-name" placeholder="Enter Username or Email" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Password</label>
                        <input type="password" class="form-control" id="log-password" placeholder="Password" required>
                    </div>

                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="login">Sign In</button>
            </div>
        </div>
    </div>
</div>
