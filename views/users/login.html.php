<?php
/**
 * User: yxy
 * Date: 13-2-8
 *
 */
$this->title('用户登录');
?>
<form action="<?= $this->url('Users::login')?>" method="post" class="form-horizontal">
    <legend>用户登录</legend>
    <div class="control-group">
        <label class="control-label" for="username">手机号</label>
        <div class="controls">
            <input type="text" id="username" name="username" placeholder="">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="password">密码</label>

        <div class="controls">
            <input type="password" id="password" name="password" placeholder="">
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <button type="submit" class="btn btn-primary">登录</button>
        </div>
    </div>
</form>