<div>
    <div class="card">
        <div class="card-body">
            <h1>@lang('front.contact_us')</h1>
            <form class="validateForm" action="{{ route('contactus') }}" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        <label for="">@lang('front.name')</label>
                        <input type="text" class="form-control" name="name">
                        <span class="text-danger Errname"></span>
                    </div>
                    <div class="col-md-12">
                        <label for="">@lang('front.email')</label>
                        <input type="text" class="form-control" name="email">
                        <span class="text-danger Erremail"></span>
                    </div>
                    <div class="col-md-12">
                        <label for="">@lang('front.phone')</label>
                        <input type="text" class="form-control" name="phone">
                        <span class="text-danger Errphone"></span>
                    </div>
                    <div class="col-md-12">
                        <label for="">@lang('front.Subject') </label>
                        <input type="text" class="form-control" name="subject">
                        <span class="text-danger Errsubject"></span>
                    </div>
                    <div class="col-md-12">
                        <label for="">@lang('front.Message') </label>
                        <textarea name="message" id="" class="form-control" ></textarea>
                        <span class="text-danger Errmessage"></span>
                    </div>
                    <div class="col-md-12"><br>
                        <center>
                        <x-backend.preloader />
                            <button type="submit" class="btn btn-primary">@lang('front.contact_now')</button>
                        </center>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br><br><br>
</div>