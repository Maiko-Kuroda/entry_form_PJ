@extends('layouts.account')
@section('title', 'プロフィールの編集')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>プロフィール</h2>
            <form action="{{action('Admin\UserController@update')}}" method="post" enctype="multipart/form-data">
                @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                @endif
                <div class="form-group row" style="line-height:1.5rem;text-align:left;height:4rem">
                    <label class="col-md-2" for="name">名前</label>
                     <div class="col-md-10">
                         <input type="text" class="form-control" name="name" value="{{ $your_account->name }}">
                     </div>
                </div>
                <div class="form-group row" style="line-height:1.5rem;text-align:left;height:4rem">
                    <label class="col-md-2" for="gender">性別</label>
                     <div class="col-md-10">
                         <input type="text" class="form-control" name="gender" value="{{ $your_account->gender }}">
                     </div>
                </div>
                <div class="form-group row" style="line-height:1.5rem;text-align:left;height:4rem">
                    <label class="col-md-2" for="mobile_phone">連絡先（携帯電話）</label>
                     <div class="col-md-10">
                         <input type="text" class="form-control" name="mobile_phone" value="{{ $your_account->mobile_phone }}">
                     </div>
                </div>
                <div class="form-group row" style="line-height:1.5rem;text-align:left;height:4rem">
                    <label class="col-md-2" for="form-control">緊急連絡先（ご家族等）</label>
                     <div class="col-md-10">
                         <input type="text" class="form-control" name="emergency_contact" value="{{ $your_account->emergency_contact }}">
                     </div>
                </div>
                <div class="form-group row" style="line-height:1.5rem;text-align:left;height:4rem">
                    <label class="col-md-2" for="email">E-Mail アドレス</label>
                     <div class="col-md-10">
                         <input type="text" class="form-control" name="email" value="{{ $your_account->email }}">
                     </div>
                </div>
                
               <div class="form-group row">
                   <div class="col-md-10">
                       <input type="hidden" name="id" value="{{ $your_account->id }}">
                       {{ csrf_field() }}
                       <input type="submit" class="btn btn-primary" value="更新">
                   </div>
               </div>
            </form>
        </div>
    </div>
</div>
@endsection