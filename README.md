## Set up ENV
<div style="border: 1px solid black; padding: 15px; background-color :#eee">
    <p><strong>FILESYSTEM_DRIVER=s3 </strong></p>
    <p><strong>AWS_ACCESS_KEY_ID= </strong></p>
    <p><strong>AWS_SECRET_ACCESS_KEY= </strong></p>
    <p><strong>AWS_DEFAULT_REGION= </strong></p>
    <p><strong>AWS_BUCKET= </strong></p>
</div>
## config directory in config/file-manager.php
<div style="border: 1px solid black; padding: 15px; background-color :#eee">
    <p><strong> 'diskList' => ['s3' , 'public'] </strong></p>
    <p><strong>'middleware' => ['auth']</strong></p>
</div>
## view url at : 127.0.0.1:8000/file-manager
## view total size s3 at : 127.0.0.1:8000/total-size

