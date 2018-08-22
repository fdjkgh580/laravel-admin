@extends('admin.global.frame')

@section('content')
    <form class="form-inline mb-1">
        <div class="form-group mr-1">
            <input type="search" class="form-control" placeholder="搜尋...">
        </div>
        <div class="form-group mr-1">
            <select class="custom-select form-control">
                <option value="">所有人</option>
                <option value="admin">管理者</option>
                <option value="users">會員</option>
            </select>
        </div>
        <div class="form-group mr-1">
            <select class="custom-select form-control">
                <option value="">所有狀態</option>
                <option value="admin">關閉</option>
                <option value="users">開啟</option>
                <option value="users">已驗證</option>
                <option value="users">待驗證</option>
            </select>
        </div>
    </form>

    <div class="mb-3">
        <div>
            <button type="button" class="btn btn-primary">新增</button>
            <button type="button" class="btn btn-primary">刪除</button>
        </div>
    </div>

    <table class="table table-hover">
        <thead class="thead-light">
            <tr>
                <th scope="col">
                    <input type="checkbox" name="" id="">
                </th>
                <th scope="col">使用者</th>
                <th scope="col">狀態</th>
                <th scope="col">管理</th>
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
                    <button type="button" class="btn btn-info"><i class="fas fa-edit">{{-- 編輯 --}}</i></button>
                </td>
            </tr>
            
        </tbody>
    </table>
@endsection