<!-- Bootstrape：Modal -->
<!-- Modal 是一种常用的用户界面元素，通常用于显示弹出式窗口，显示一些额外的信息、提示或者表单内容，而不会跳转到新页面。它通常出现在当前页面的顶部，并且通常会阻止用户与页面其他部分的交互，直到关闭弹窗。 -->
<!-- 说明：
modal fade：这个类给 Modal 添加了淡入淡出的动画效果。
modal-dialog：这是模态框的外围容器，控制模态框的宽度和位置。
modal-content：模态框的内容区域。
modal-header：模态框头部区域，通常包括标题和关闭按钮。
modal-body：模态框的主体部分，可以放置表单、文字或其他 HTML 内容。
modal-footer：模态框的底部区域，通常包含操作按钮。 -->

<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="LoginModalLabel">管理者登入</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="loginForm">
                    <div class="mb-3">
                        <label for="username" class="form-label">帳號</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">密碼</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">登入</button>
                </form>
            </div>
        </div>
    </div>
</div>