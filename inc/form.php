<div id='sslform'>
    <form class="form-horizontal" action="add.php" method="POST">
        <p>Please enter the domain(s) you want to monitor for certificate expiry. Please enter only one domain per line. You can add a maximum of 20 domains at
            once.<br>
            If using a custom port, please put a colon after the domain and then the port number. If you do not enter a
            colon, it will default to 443.</p>
        <fieldset>

            <div class="form-group">
                <label class="col-md-1 control-label" for="domains">Domains</label>
                <div class="col-md-5">
                    <textarea class="form-control" required="true" rows=6 id="domains" name="domains"
                              placeholder="example.org:443"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-1 control-label" for="email">Email</label>
                <div class="col-md-5">
                    <input id="email" name="email" required="true" type="email"
                           placeholder="Enter a valid email address" class="form-control input-md">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4">
                    <label class="col-md-2 col-md-offset-1 control-label" for="s"></label>
                    <button id="s" name="s" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>

