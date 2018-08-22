@extends('admin.global.frame')

@section('content')
    <div class="mb-3">
        <select class="custom-select col-2">
            <option value="">所有人</option>
            <option value="admin">管理者</option>
            <option value="users">會員</option>
        </select>
        <select class="custom-select col-2">
            <option value="">所有狀態</option>
            <option value="admin">關閉</option>
            <option value="users">開啟</option>
            <option value="users">已驗證</option>
            <option value="users">待驗證</option>
        </select>
        <button type="button" class="btn btn-primary btn-sm">新增</button>
        <button type="button" class="btn btn-primary btn-sm">刪除</button>
    </div>

    <table class="table table-inverse">
        <thead>
            <tr>
                <th>
                    <input type="checkbox" name="" id="">
                </th>
                <th>使用者</th>
                <th>狀態</th>
                <th>管理</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="checkbox" name="" id="">
                </td>
                <td>
                    <div>
                        jason
                    </div>
                    <div>
                        fdjkgh580@gmail.com
                    </div>
                </td>
                <td>
                    開啟
                </td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm">編輯</button>
                </td>
            </tr>
        </tbody>
    </table>
@endsection