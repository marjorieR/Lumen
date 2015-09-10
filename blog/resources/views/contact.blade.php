

<div class="row">
    <div class="col-sm-12">

        <!-- 10. $FORM_EXAMPLE =============================================================================

                        Form example
        -->
        <form method="post" action="{{url('send')}}"class="panel form-horizontal">

            <div class="panel-body">

                <div class="form-group">

                    <label for="inputEmail2" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" id="inputEmail2" placeholder="Email">
                    </div>

                </div>

                <!-- / .form-group -->
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">

                    </div>
                </div>
                <!-- / .form-group -->
                <div class="form-group">
                    <label for="asdasdas" class="col-sm-2 control-label">Text</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="texte"></textarea>

                    </div>
                </div>
                <!-- / .form-group -->
            <div>

                <div class="form-group" style="margin-bottom: 0;">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </div> <!-- / .form-group -->
            </div>
        </form>
        <!-- /10. $FORM_EXAMPLE -->

    </div>
</div>