@extends('_layouts.page')

@section('page')
<section class="ls section_padding_50 columns_padding_25">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="section_header">Welcome to Heritage Counselling & Consultancy Center (HCCC)</h2>
                <hr class="divider_30_1">
                <p>
                    We are a registered training institution accredited by TVET as a training and assessment center in accordance with sections 18,32 and 57 of TVET Act 2013.
                </p>
                <p>
                    We train, examine and assess students studying counselling and psychology at the levels of certificate and diploma.
                </p>
                <p>
                    We also offer diverse psychological therapies and consultancy services for individuals, groups organizations, institutions of higher learning, Community Based Organization and business entities.
                </p>
                <a href="#training" class="theme_button color1">HCCC Training</a>
                <a href="#counselling" class="theme_button color2">HCCC Counselling</a>
            </div>
        </div>
    </div>
</section>
<section class="section_padding_50 columns_padding_25">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3 class="section_header">Training</h3>
                <hr class="divider_30_1">
                <p>
                    We are a registered training institution accredited by TVET as a training and assessment center in accordance with sections 18,32 and 57 of TVET Act 2013.
                </p>
                <p>
                    We also train, examine and assess students studying counselling and psychology at the levels of certificate and diploma.
                    (Registered by kenya counselling and psychological association (KCPA))
                </p>
                <a href="/training" class="theme_button color1">View Accredited Courses</a>
            </div>
        </div>
    </div>
</section>
<section class="ls section_padding_50 columns_padding_25">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3 class="section_header">Counselling Services</h3>
                <hr class="divider_30_1">
                <p>We offer diverse psychological therapies and consultancy services</p>
                <p>Our focus in HCCC is on individuals, groups organizations, institutions of higher learning, Community Based Organization and business entities.</p>
                <a href="/services" class="theme_button color2">View Services Offered</a>
            </div>
        </div>
        <hr>
    </div>
</section>
@endsection
