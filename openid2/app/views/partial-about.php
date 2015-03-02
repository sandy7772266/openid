
<?php 
$value = Session::get('data_s');
if ($value == null){
?>
<p><a href="../openid2/public/login/openid" target="blank" style="font-size:24px;">OpenID 登入</a></p>
<?php
}

?>

<div class="jumbotron text-center">
    <h1>The About Page</h1>
    <p>This page demonstrates <span class="text-danger">multiple</span> and <span class="text-danger">named</span> views.</p>
</div>

<div class="row">

    <div class="col-sm-6">
        <div ui-view="columnOne"></div>
    </div>
    
    
    <div class="col-sm-6">
        <div ui-view="columnTwo"></div>
    </div>

    
</div>