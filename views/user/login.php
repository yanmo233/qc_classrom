<?php
/**
 *  ___   ____ _
 * / _ \ / ___| | __ _ ___ ___ _ __ ___   ___  _ __ ___
 *| | | | |   | |/ _` / __/ __| '__/ _ \ / _ \| '_ ` _ \
 *| |_| | |___| | (_| \__ \__ \ | | (_) | (_) | | | | | |
 * \__\_\\____|_|\__,_|___/___/_|  \___/ \___/|_| |_| |_|
 * 青草课堂 - login.php
 * Copyright (c) 2015 - 2019.,QCTech ,All rights reserved.
 * Created by: QCTech
 * Created Time: 2019-01-29 - 16:46
 */
?>
    <div class="layui-card layui-container">
        <div class="layui-card-header">登录</div>
        <div class="layui-card-body">
            <form class="layui-form">
                <div class="layui-form-item">
                    <label class="layui-form-label">账号</label>
                    <div class="layui-input-inline">
                        <input type="text" name="username" id="username" required  lay-verify="required" placeholder="请输入您的账号" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">支持您的用户名/手机号/邮箱</div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">密码</label>
                    <div class="layui-input-inline">
                        <input type="password" name="password" id="password" required lay-verify="required" placeholder="请输入您的密码" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">记住我</label>
                    <div class="layui-input-block">
                        <input type="checkbox" name="remember" id="remember" lay-text="ON|OFF" lay-skin="switch">
                    </div>
                    <div class="layui-form-mid layui-word-aux">不建议您在公共设备上启用</div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">验证码</label>
                    <div class="layui-input-block">
                        <div id="captcha">
                            <div id="captcha-text">
                                验证码 安全组件加载中
                            </div>
                            <div id="captcha-wait">
                                <div class="loading">
                                    <div class="loading-dot"></div>
                                    <div class="loading-dot"></div>
                                    <div class="loading-dot"></div>
                                    <div class="loading-dot"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button type="button" class="layui-btn" id="btn-login">提交</button>
                        <button type="reset" class="layui-btn layui-btn-primary" id="btn-reset">重置</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php $view->load_js("gt.js"); ?>
    <?php $view->load_js("account.js"); ?>
    <script>

    </script>

