<?php
use app\models\Users;

/**
 * User: yxy
 * Date: 13-2-7
 *
 */
$this->title('用户注册');
$errors = $user->errors();
?>
<form action="<?= $this->url('Users::add')?>" method="post" class="form-horizontal">
    <legend>用户注册</legend>
    <div class="control-group">
        <label class="control-label" for="username">请输入您的手机号</label>
        <div class="controls">
            <input type="text" id="username" name="username" placeholder="">
            <span class="text-error">
                <?php
                if(!empty($errors['username'])) {
                    echo $errors['username'][0];
                }
                ?>
            </span>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="password">设置您的密码</label>

        <div class="controls">
            <input type="password" id="password" name="password" placeholder="">
            <span class="text-error">
                <?php
                if (!empty($errors['password'])) {
                    echo $errors['password'][0];
                }
                ?>
            </span>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="password">重复输入一遍密码</label>

        <div class="controls">
            <input type="password" id="password2" name="password2" placeholder="">
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <button type="submit" class="btn btn-primary">创建</button>
        </div>
    </div>
</form>