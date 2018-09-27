<div class="row" id="change_password">
    <div class="col-md-7">
        <!-- TABLE HOVER -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Request</h3><br>
                <pre>http://sandbox.memorylanealbum.com/api/v1/auth/password/change</pre>
            </div>
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th>Type</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>_token</td>
                            <td><code>string</code></td>
                            <td><code>Required</code></td>
                        </tr>
                        <tr>
                            <td>password</td>
                            <td><code>string</code></td>
                            <td><code>Required</code></td>
                        </tr>
                        <tr>
                            <td>new_password</td>
                            <td><code>string</code></td>
                            <td><code>Required</code></td>
                        </tr>
                        <tr>
                            <td>new_password_confirmation</td>
                            <td><code>string</code></td>
                            <td><code>Required</code></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END TABLE HOVER -->
    </div>
    <div class="col-md-5">
        <!-- TABLE HOVER -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Success Response</h3>
            </div>
            <div class="panel-body">
<pre>
{
    "data": [],
    "status": 1
}
</pre>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Failure Response</h3>
            </div>
            <div class="panel-body">
<pre>
{
    "errors": {
        "new_password": "New passowrd does not match."
    },
    "status": 0
}
</pre>
            </div>
        </div>
        <!-- END TABLE HOVER -->
    </div>
</div>
<hr class="style">