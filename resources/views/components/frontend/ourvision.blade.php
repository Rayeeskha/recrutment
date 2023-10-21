<!--Start Services Area-->
<div class="services-area  "><br><br>
    <div class="container">        
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="background-color: #314e8a; height:260px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 col-sm-12">
                                <img src="{{ asset('assets/images/persional/shared-vision-1.png') }}" width="100px" height="100px">
                            </div>
                            <div class="col-md-9 col-sm-12">
                                <h1 style="color: #fff">
                                    {{ GoogleTranslate::trans('Our Vision', session()->get('locale')) }}
                                </h1>
                                <p style="color: #fff;font-style: italic;font-size: 16px">
                                    {{ GoogleTranslate::trans('To have leadership in the field of developing human resources operations for companies and institutions of all sizes at the local and regional levels.', session()->get('locale')) }}
                                </p>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="background-color: #109f43; height:260px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 col-sm-12">
                                <img src="{{ asset('assets/images/persional/message.png') }}" width="100px" height="100px">
                            </div>
                            <div class="col-md-9 col-sm-12">
                                <h1 style="color: #fff">
                                    {{ GoogleTranslate::trans('Our Mission', session()->get('locale')) }}
                                </h1>
                                <p style="color: #fff; font-style: italic;font-size: 16px">
                                    {{ GoogleTranslate::trans('Achieving the highest quality levels in the field of human resources that we offer to customers by using the best international practices under the supervision of professional cadres.', session()->get('locale')) }}
                                </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div><br><br>
    </div>
</div> 
<!--End Services Area-->