<div class="row" id="get-images">
    <div class="col-md-7">
        <!-- TABLE HOVER -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Request</h3><br>
                <pre>http://sandbox.memorylanealbum.com/api/v1/image/get</pre>
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
                            <td>date</td>
                            <td><code>date (Format:Y-m-d)</code></td>    
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
        "17": "",
        "18":{
                "image": "uploads/2018/09/18/qHWFtUAcsRlkh8AkWi6xWt1WGVBWFhmNIe079czv.png",
                "thumb_150": "uploads/2018/09/18/qHWFtUAcsRlkh8AkWi6xWt1WGVBWFhmNIe079czv_150_150.png",
                "thumb_320": "uploads/2018/09/18/qHWFtUAcsRlkh8AkWi6xWt1WGVBWFhmNIe079czv_320_320.png",
                "day": "18"
            },
        "19": "",
        "20": ""
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
        "date": "The date does not match the format Y-m-d."
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