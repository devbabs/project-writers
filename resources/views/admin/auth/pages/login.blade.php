@extends('admin.auth.layouts.app')

@section('page_content')
    <form class="form w-100" id="" action="{{ route('admin.login') }}" method="POST">
        @csrf
        <div class="text-center mb-11">
            <h1 class="text-gray-900 fw-bolder mb-3">Sign In</h1>
            <div class="text-gray-500 fw-semibold fs-6">
                Welcome to {{ config('app.name') }} Admin
            </div>
        </div>

        <div class="fv-row mb-8">
            <input type="text" placeholder="Email" name="email" value="admin@email.com" autocomplete="off" class="form-control bg-transparent" required />
        </div>
        <div class="fv-row mb-3">
            <input type="password" placeholder="Password" name="password" value="123456" autocomplete="off" class="form-control bg-transparent" required />
        </div>
        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
            <div></div>
            {{-- <a href="#" class="link-primary">Forgot Password ?</a> --}}
        </div>
        <div class="d-grid mb-10">
            <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                <span class="indicator-label">Sign In</span>
                <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>
    </form>
@endsection
