@extends('frontend.layouts.app')
@section('page_title', GoogleTranslate::trans('About us', session()->get('locale')))
@section('meta_keywords', GoogleTranslate::trans('About us', session()->get('locale')))
@section('meta_description',  GoogleTranslate::trans('About us', session()->get('locale')))
@section('container')

<div class="page-header-area bg-f4fbf6">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="page-header-content">
                    <h1>{{ GoogleTranslate::trans('About us', session()->get('locale')) }}</h1>
                    <ul>
                        <li><a href="/">{{ GoogleTranslate::trans('Home', session()->get('locale')) }}</a></li>
                        <li>{{ GoogleTranslate::trans('About us', session()->get('locale')) }}</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="page-header-image">
                    <img src="{{ asset('assets/images/banner/banner-img-3.png') }}" alt="Image">
                </div>
            </div>
        </div>

        <div class="page-header-shape">
            <img src="{{ asset('assets/images/shape/shape-8.png') }}" alt="Image">
            <img src="{{ asset('assets/images/shape/shape-9.png') }}" alt="Image">
            <img src="{{ asset('assets/images/shape/shape-10.png') }}" alt="Image">
        </div>
    </div>
</div>


<div class="service-details-area pt-100 pb-70">
    <div class="container-fluid">
        <div class="row">
        	<div class="col-md-6">
        		<div class="card">
        			<div class="card-body">
        				<img src="{{ asset('assets/images/persional/web/aboutus.jpg') }}">
        			</div>
        		</div>
        	</div>

        	<div class="col-md-6">
        		<h1>About Us</h1>
        		<p style="font-style: italic;font-size: 16px">{{ GoogleTranslate::trans("Ms group of international specialized in providing unique solutions with more than 10 years of experience to help employees obtain jobs in major companies and institutions to achieve a qualitative leap in the daily operations and workflow within all departments, which contributes in increasing productivity, so we offer comprehensive human resources solutions that are in line with the objectives of companies and businesses, and we develop them with the development of the times and the development of existing projects on the ground actually, we are a consulting company in the field of technology and operations with the help of a working team capable of keeping pace with positive and sustainable changes in order to help our customers face various challenges that keep pace and meet market requirements.", session()->get('locale')) }}</p>
        	</div>
        </div>
        <!-- Our Vision -->
		<x-frontend.ourvision />

		<div class="row">
			<div class="col-md-6">
				<h1>{{ GoogleTranslate::trans('Our Goals', session()->get('locale')) }}</h1>

				<p style="font-style: italic;font-size: 16px">
					{{ GoogleTranslate::trans('We work to offer a set of solutions in the field of human resources in order to help you develop skills in a set of fields, and among our goals:', session()->get('locale')) }}
				</p>

				<p style="font-style: italic;font-size: 16px">
					{{ GoogleTranslate::trans('Working to raise the level of production', session()->get('locale')) }}
				</p>

				<p style="font-style: italic;font-size: 16px">
					{{ GoogleTranslate::trans('Determining employee success standards.', session()->get('locale')) }}
				</p>

				<p style="font-style: italic;font-size: 16px">
					{{ GoogleTranslate::trans('working to enhance the effectiveness of human resource management.', session()->get('locale')) }}
				</p>

				<p style="font-style: italic;font-size: 16px">
					{{ GoogleTranslate::trans('Helping employees to achieve their goal.', session()->get('locale')) }}
				</p>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<img src="{{ asset('assets/images/persional/web/goals.jpg') }}">
					</div>
				</div>
			</div>
		</div>		
    </div>

    <div style="background-color: #f1f6f9;margin-top: 5%">
		<div class="container-fluid" style="margin-top: 5%">
			<div class="row" >
				<div class="col-md-12">
					<h1>{{ GoogleTranslate::trans('Why Choose Us?', session()->get('locale')) }}</h1>

					<p style="font-style: italic;font-size: 16px">
						{{ GoogleTranslate::trans("Over the years, MS International have achieving great successes in the field of employment solutions and provide innovative strategies with the help of a team of specialists in various fields, and there are many reasons that contributed to our distinction and make you choose us, among them:", session()->get('locale')) }}
					</p>

					<p style="font-style: italic;font-size: 16px">
						{{ GoogleTranslate::trans("Trust and good appreciation for all customers.", session()->get('locale')) }}
					</p>

					<p style="font-style: italic;font-size: 16px">
						{{ GoogleTranslate::trans("Our primary focus is on offering outstanding value to customers.", session()->get('locale')) }}
					</p>

					<p style="font-style: italic;font-size: 16px">
						{{ GoogleTranslate::trans("Commitment to the frameworks of quality, innovation and excellence in service delivery.", session()->get('locale')) }}
					</p>

					<p style="font-style: italic;font-size: 16px">
						{{ GoogleTranslate::trans("Providing customers with the most comprehensive knowledge.", session()->get('locale')) }}
					</p>

					<p style="font-style: italic;font-size: 16px">
						{{ GoogleTranslate::trans("Striving for excellence in order to achieve the best results.", session()->get('locale')) }}
					</p>

				</div>
			</div>
		</div>
	</div> 

	<div style="margin-top: 5%">
		<div class="container-fluid">
			<h1>{{ GoogleTranslate::trans('Who is Sheikh Obaid Al-Ajmi?', session()->get('locale')) }}</h1>

			<p style="font-style: italic;font-size: 16px">
				<span style="color: blue">{{ GoogleTranslate::trans('Sheikh Obaid bin Mufarrej Al-Ajmi,', session()->get('locale')) }}</span>

				{{ GoogleTranslate::trans('is one of the well-known businessmen in the Arab world and in the world. He was known for many qualities, including humility, ambition and good morals, and he could get the agency of MS International in the Kingdom of Saudi Arabia.', session()->get('locale')) }}
			</p>

			<h1>{{ GoogleTranslate::trans('About his Life', session()->get('locale')) }}</h1>

			<p style="font-style: italic;font-size: 16px">
				{{ GoogleTranslate::trans('The birthplace of Sheikh / Obaid Al-Ajmi is the city of Makkah Al-Mukarramah in the Kingdom of Saudi Arabia, but he spent his life in the Taif city with his family of fourteen people, he was able to learn from his father many qualities, including perseverance and determination to achieve dreams and obtain what he desires, in addition to leadership and patience, and also learned fishing from him, despite his love for trade, and his unbridled desire to become one of the most important entrepreneurs inside and outside the Kingdom, and with the grace of God Almighty, he managed to reach that dream and then with good work, good planning, love and cooperation.', session()->get('locale')) }}
			</p>

			<p style="font-style: italic;font-size: 16px">
				{{ GoogleTranslate::trans('Among his hobbies, he was known to be a fan of visualization and a fan of hunting, which took him from his father, may God have mercy on him, in addition to his love for photography as well. His fame spread throughout, after he was able to establish a medical care group in the governorate of Taif and Bisha, and he was received by many senior state officials, including Major General Abdullah bin Turki Al-Qahtani, the Caliph Omar bin Al-Khattab’s Brigade for Private Security in the Taif city.', session()->get('locale')) }}
			</p>

			<h1>{{ GoogleTranslate::trans('Most Important Achievements', session()->get('locale')) }}</h1>

			<p style="font-style: italic;font-size: 16px">
				<span style="color: blue">{{ GoogleTranslate::trans('Sheikh / Obaid Al-Ajmi', session()->get('locale')) }}</span>

				{{ GoogleTranslate::trans('started his working life since the fourteenth year of work, and his first start was in the sale of Al-Barshumi fruits, and he was able to open a small grocery store inside his home to earn a living, and with the support of those around him, he was able to open a private workshop, then he opened his first clinic, and from here came the real breakthrough towards achieving his ambition, and he was able to have a large number of clinics in scattered parts.', session()->get('locale')) }}
			</p>
		</div>
	</div> 
</div>


@endsection