<div class="flex flex-col w-full">
<div>
        <button id="return-page" class="back-link btn btn-soft ">Quay lại</button>
    </div>
    <div class="flex justify-center">
        <h3 class="modal-title">Sửa quyền</h3>
    </div>
<div class="flex justify-center">

    <!-- thong tin chung -->
    <div class="flex flex-row">
        <div class="pt-0 mb-4 ">
            <div class="w-96">
                <label class="label-text" for="username">ID</label>
                <input type="text" placeholder="" class="input" id="tk_id" readonly />
            </div>
            <div class="w-96">
                <label class="label-text" for="username">Username</label>
                <input type="text" placeholder="" class="input" id="username" readonly />
            </div>
            <div class="w-96">
                <label class="label-text" for="password">Mật khẩu</label>
                <input type="password" placeholder="" class="input" id="password" />
            </div>
            <div class="w-96">
                <label class="label-text" for="confirm-password">Xác nhận mật khẩu</label>
                <input type="password" placeholder="" class="input" id="confirm-password" />
            </div>
            <div class="w-96">
                <label class="label-text" for="select-doituong">Mã đối tượng</label>
                <input type="text" placeholder="" class="input" id="select-doituong" />
            </div>
            <div class="w-96">
                <label class="label-text" for="select-quyen">Quyền</label>
                <select class="select" id="select-quyen">
                    <option value="-1">--Chọn quyền--</option>
                </select>
            </div>
            <div class="w-96">
                <label class="label-text" for="select-status">Status</label>
                <select class="select" id="select-status">
                    <option value="1">Đang hoạt động</option>
                    <option value="0">Đã khóa</option>
                </select>
            </div>
        </div>
    </div>
    
</div>
<div class="flex justify-center">
        <button id="btn-save-tk" type="submit" class="btn btn-primary">Lưu</button>
    </div>
</div>
<script src="views/javascript/taiKhoanPage-edit.js"></script>