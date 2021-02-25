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

                    <div class="form-group mb-3">
                        <label for="exampleFormControlFile1">Avatar</label>
                        <input type="file" class="form-control-file" id="user-avatar">
                    </div>

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

                    <div class="form-group mb-3">
                        <label for="exampleFormControlFile1">New Post Poster</label>
                        <br>
                        <input type="file" class="form-control-file" id="poster">
                    </div>

                    <input type="hidden" value="<?= $_SESSION['account'] ?>" id="accountId">
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



<div class="modal fade" id="profile-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Change Profile Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="change-info" onsubmit="changeInformation(event)" enctype="multipart/form-data">

                    <div class="form-group mb-3">
                        <img src="" id = "change-img" alt="Profile avatar" style="width: 250px; border: 1px solid rgba(0,0,0,.2); border-radius: .3rem;">
                    </div>

                    <div class="form-group mb-3">
                        <label>First Name</label>
                        <input type="text" class="form-control" id="change-first-name" placeholder="Enter First Name" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Last Name</label>
                        <input type="text" class="form-control" id="change-last-name" placeholder="Enter Last Name" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Choose New Image</label>
                        <input type="file" class="form-control-file" id="change-avatar">
                    </div>

                    <input type="hidden" id="change-user-id" value="<?=$_SESSION['account']?>">
                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="change-info">Change</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="pass-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Change Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="change-pass" onsubmit="changePassword(event)">

                    <div class="form-group mb-3">
                        <label>Old Password</label>
                        <input type="password" class="form-control" id="change-old-password" placeholder="Old Password" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>New Password</label>
                        <input type="password" class="form-control" id="change-new-password" placeholder="New Password" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>New Password Confirm</label>
                        <input type="password" class="form-control" id="change-new-re-password" placeholder="New Password Confirm" required>
                    </div>

                    <input type="hidden" value="<?=$_SESSION['account']?>" id="change-pass-id">

                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="change-pass">Change</button>
            </div>
        </div>
    </div>
</div>