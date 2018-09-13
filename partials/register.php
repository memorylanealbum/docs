<div class="row" id="register">
    <div class="col-md-7">
        <!-- TABLE HOVER -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Request</h3><br>
                <pre>http://sandbox.memorylanealbum.com/api/v1/auth/register</pre>
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
                            <td>username</td>
                            <td><code>string</code></td>
                            <td><code>Required</code></td>
                        </tr>
                        <tr>
                            <td>password</td>
                            <td><code>string</code></td>    
                            <td><code>Required</code></td>
                        </tr>
                        <tr>
                            <td>password_confirmation</td>
                            <td><code>string</code></td>    
                            <td><code>Required</code></td>
                        </tr>
                        <tr>
                            <td>email</td>
                            <td><code>string</code></td>    
                            <td><code>Required</code></td>
                        </tr>
                        <tr>
                            <td>name</td>
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
    "data": {
        "_token": "6c592796-afa8-45ea-b992-92e02ed59844"
    },
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
    "name": "The name field is required.",
    "username": "The username field is required.",
    "email": "The email field is required.",
    "password": "The password field is required."
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