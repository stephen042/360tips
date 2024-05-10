<!doctype html>
<html lang="en" dir="ltr">

<head>

    @include('includes.user-head')

</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    @include('includes.loader')
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- APP-NAv -->
            @include('includes.user-nav')
            <!-- /APP-NAv -->

            <!--APP-SIDEBAR-->
            @include('includes.user-sidebar')
            <!--/APP-SIDEBAR-->

            <!-- APP-CONTENT OPEN -->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <div>
                                <h1 class="page-title">RealEstate | Invest & Purchase Property</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">RealEstate</li>
                                </ol>
                            </div>
                            <div class="ms-auto pageheader-btn">
                                <a href="deposit" class="btn btn-primary btn-icon text-white me-2">
                                    <span>
                                        <i class="fe fe-plus"></i>
                                    </span> Add Fund
                                </a>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->
                        <div class="row row-cards">
                            <div class="card col-xl-12 col-lg-12 col-sm-12">
                                <div class="card-body p-1">
                                    <div class="panel panel-primary">
                                        <div class=" tab-menu-heading ">
                                            <div class="">
                                                <!-- Tabs -->
                                                <ul class="nav panel-tabs ps-2 pe-2 flex justify-content-around" style="background-color: #161616;border-radius: 10px">
                                                    <li>
                                                        <a style="color: #ADADAD;font-weight: bold;font-family:'Roboto', sans-serif;" href="#tab5" class="active btn m-1 p-2 px-5" id="tab-5" data-bs-toggle="tab">Open
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a style="color: #ADADAD;font-weight: bold;font-family:'Roboto', sans-serif;" href="#tab6" class="btn m-1 p-2 px-5" data-bs-toggle="tab">Closed

                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a style="color: #ADADAD;font-weight: bold;font-family:'Roboto', sans-serif;" href="#tab7" class="btn m-1 p-2 px-2" data-bs-toggle="tab">Running
                                                        </a>
                                                    </li>
                                                    <!-- <li><a href="#tab8" data-bs-toggle="tab">Tab 4</a></li> -->
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="panel-body tabs-menu-body">
                                            <div class="tab-content">
                                                <div class="tab-pane active " id="tab5">
                                                    <div class="row">

                                                        <div class="col-md-12  col-xl-6">
                                                            <div class="card">
                                                                <div class="card-status bg-blue br-tr-7 br-tl-7"></div>
                                                                <div class="card-header">
                                                                    <h3 class="card-title">Bridge Labs at Pegasus Park</h3>
                                                                    <div class="card-options">
                                                                        <a href="javascript:void(0);" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <img class="img-fluid" src="{{URL('assets/images/realEstate/first-img.png')}}" width="100%" height="100%" style="border-radius: 10px;">
                                                                </div>
                                                                <div class="card-body">
                                                                    Life science redevelopment within a thriving new biotech-focused campus in Dallas, recognized as one of the top emerging life science markets.
                                                                </div>
                                                                <div class="card-body d-flex justify-content-around">
                                                                    <h4>$12K <span class="d-block fs-6">Minimum</span></h4>
                                                                    <h4>85% <span class="d-block fs-6">ROI</span></h4>
                                                                    <h4>Fixed income <span class="d-block fs-6">STRATEGY</span></h4>
                                                                </div>
                                                                <div class="card-body d-flex justify-content-around">
                                                                    <button class="">
                                                                        <a class="modal-effect text-white btn px-4 py-2 m-1 btn-info" data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal" href="#modalBridge">
                                                                            View Documents
                                                                        </a>
                                                                    </button>
                                                                    <button class="">
                                                                        <a class="modal-effect text-white btn px-4 py-2 m-1 btn-primary" data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal" href="#modaldemoRealEstate"> Invest now </a>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <!-- modal -->
                                                            <div class="modal fade" id="modalBridge">
                                                                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                                                                    <div class="modal-content modal-content-demo">
                                                                        <div class="modal-header">
                                                                            <h3 class="modal-title">Asset Details</h3><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p class="fs-5"><a href="{{URL('assets/pdf/bridge/site-plans.pdf')}}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Site Plan</a></p>
                                                                            <p class="fs-5"><a href="{{URL('assets/pdf/bridge/organizational-chart.pdf')}}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Organizational Chart</a></p>
                                                                            <p class="fs-5"><a href="{{URL('assets/pdf/bridge/sponsor-track-record.pdf')}}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Sponsor Track Record</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- modal end -->

                                                        </div>

                                                        <div class="col-md-12  col-xl-6">
                                                            <div class="card">
                                                                <div class="card-status bg-blue br-tr-7 br-tl-7"></div>
                                                                <div class="card-header">
                                                                    <h3 class="card-title">Go Store It Nashville</h3>
                                                                    <div class="card-options">
                                                                        <a href="javascript:void(0);" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <img class="img-fluid" src="{{URL('assets/images/realEstate/second-img.png')}}" width="100%" height="100%" style="border-radius: 10px;">
                                                                </div>
                                                                <div class="card-body">
                                                                    Class A self-storage development in one of Nashville's fastest growing suburbs with constrained supply and a high barrier to entry.
                                                                </div>
                                                                <div class="card-body d-flex justify-content-around">
                                                                    <h4>$15K <span class="d-block fs-6">Minimum</span></h4>
                                                                    <h4>85% <span class="d-block fs-6">ROI</span></h4>
                                                                    <h4>Fixed income <span class="d-block fs-6">STRATEGY</span></h4>
                                                                </div>
                                                                <div class="card-body d-flex justify-content-around">
                                                                    <button class="">
                                                                        <a class="modal-effect text-white btn px-4 py-2 m-1 btn-info" data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal" href="#modalClass">
                                                                            View Documents
                                                                        </a>
                                                                    </button>
                                                                    <button class="">
                                                                        <a class="modal-effect text-white btn px-4 py-2 m-1 btn-primary" data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal" href="#modaldemoRealEstate"> Invest now </a>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <!-- modal -->
                                                            <div class="modal fade" id="modalClass">
                                                                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                                                                    <div class="modal-content modal-content-demo">
                                                                        <div class="modal-header">
                                                                            <h3 class="modal-title">Asset Details</h3><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p class="fs-5"><a href="{{URL('assets/pdf/class/floor-plans.pdf')}}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Investment Deck</a></p>
                                                                            <p class="fs-5"><a href="{{URL('assets/pdf/class/investment-deck.pdf')}}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Floor Plan</a></p>
                                                                            <p class="fs-5"><a href="{{URL('assets/pdf/class/organizational-chart.pdf')}}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Organizational Chart</a></p>
                                                                            <p class="fs-5"><a href="{{URL('assets/pdf/class/sponsor-track-record.pdf')}}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Sponsor Track Record</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- modal end -->
                                                        </div>

                                                        <div class="col-md-12  col-xl-6">
                                                            <div class="card">
                                                                <div class="card-status bg-blue br-tr-7 br-tl-7"></div>
                                                                <div class="card-header">
                                                                    <h3 class="card-title">Palmetto Industrial Park</h3>
                                                                    <div class="card-options">
                                                                        <a href="javascript:void(0);" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <img class="img-fluid" src="{{URL('assets/images/realEstate/third-img.png')}}" width="100%" height="100%" style="border-radius: 10px;">
                                                                </div>
                                                                <div class="card-body">
                                                                    Acquisition of a newly constructed three-building industrial property, already garnering interest from prospective tenants.
                                                                </div>
                                                                <div class="card-body d-flex justify-content-around">
                                                                    <h4>$25K <span class="d-block fs-6">Minimum</span></h4>
                                                                    <h4>78% <span class="d-block fs-6">ROI</span></h4>
                                                                    <h4>Fixed income <span class="d-block fs-6">STRATEGY</span></h4>
                                                                </div>
                                                                <div class="card-body d-flex justify-content-around">
                                                                    <button class="">
                                                                        <a class="modal-effect text-white btn px-4 py-2 m-1 btn-info" data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal" href="#modalPalmetto">
                                                                            View Documents
                                                                        </a>
                                                                    </button>
                                                                    <button class="">
                                                                        <a class="modal-effect text-white btn px-4 py-2 m-1 btn-primary" data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal" href="#modaldemoRealEstate"> Invest now </a>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <!-- modal -->
                                                            <div class="modal fade" id="modalPalmetto">
                                                                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                                                                    <div class="modal-content modal-content-demo">
                                                                        <div class="modal-header">
                                                                            <h3 class="modal-title">Asset Details</h3><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p class="fs-5"><a href="{{URL('assets/pdf/Palmetto/investment-deck.pdf')}}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Webinar Deck</a></p>
                                                                            <p class="fs-5"><a href="{{URL('assets/pdf/Palmetto/demographics.pdf')}}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Demographics</a></p>
                                                                            <p class="fs-5"><a href="{{URL('assets/pdf/Palmetto/organizational-chart.pdf')}}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Organizational Chart</a></p>
                                                                            <p class="fs-5"><a href="{{URL('assets/pdf/Palmetto/sponsor-track-record.pdf')}}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Sponsor Track Record</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- modal end -->
                                                        </div>

                                                        <div class="col-md-12  col-xl-6">
                                                            <div class="card">
                                                                <div class="card-status bg-blue br-tr-7 br-tl-7"></div>
                                                                <div class="card-header">
                                                                    <h3 class="card-title">Hilton Philadelphia City Avenue</h3>
                                                                    <div class="card-options">
                                                                        <a href="javascript:void(0);" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <img class="img-fluid" src="{{URL('assets/images/realEstate/fourth-img.png')}}" width="100%" height="100%" style="border-radius: 10px;">
                                                                </div>
                                                                <div class="card-body">
                                                                    Discounted acquisition of a recently renovated hotel property in Philadelphia with below-market, assumable debt.
                                                                </div>
                                                                <div class="card-body d-flex justify-content-around">
                                                                    <h4>$33K <span class="d-block fs-6">Minimum</span></h4>
                                                                    <h4>68.7%<span class="d-block fs-6">ROI</span></h4>
                                                                    <h4>Growth & Income <span class="d-block fs-6">STRATEGY</span></h4>
                                                                </div>
                                                                <div class="card-body d-flex justify-content-around">
                                                                    <button class="">
                                                                        <a class="modal-effect text-white btn px-4 py-2 m-1 btn-info" data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal" href="#modalHilton">
                                                                            View Documents
                                                                        </a>
                                                                    </button>
                                                                    <button class="">
                                                                        <a class="modal-effect text-white btn px-4 py-2 m-1 btn-primary" data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal" href="#modaldemoRealEstate"> Invest now </a>
                                                                    </button>
                                                                </div>
                                                            </div>


                                                            <!-- modal -->
                                                            <div class="modal fade" id="modalHilton">
                                                                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                                                                    <div class="modal-content modal-content-demo">
                                                                        <div class="modal-header">
                                                                            <h3 class="modal-title">Asset Details</h3><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p class="fs-5"><a href="{{URL('assets/pdf/Hilton/hilton-floor-plans.pdf')}}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Homewood - floor Plan</a></p>
                                                                            <p class="fs-5"><a href="{{URL('assets/pdf/Hilton/homewood-floor-plans.pdf')}}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Hilton - Floor Plans</a></p>
                                                                            <p class="fs-5"><a href="{{URL('assets/pdf/Hilton/organizational-chart.pdf')}}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Organizational Chart</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- modal end -->

                                                        </div>

                                                        <div class="col-md-12  col-xl-6">
                                                            <div class="card">
                                                                <div class="card-status bg-blue br-tr-7 br-tl-7"></div>
                                                                <div class="card-header">
                                                                    <h3 class="card-title">Fabian Labs, Palo Alto</h3>
                                                                    <div class="card-options">
                                                                        <a href="javascript:void(0);" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <img class="img-fluid" src="{{URL('assets/images/realEstate/fifth-img.png')}}" width="100%" height="100%" style="border-radius: 10px;">
                                                                </div>
                                                                <div class="card-body">
                                                                    Two-building life science conversion in the heart of Silicon Valley and minutes from Stanford University, one of the top U.S. research institutions.
                                                                </div>
                                                                <div class="card-body d-flex justify-content-around">
                                                                    <h4>$24K <span class="d-block fs-6">Minimum</span></h4>
                                                                    <h4>57%<span class="d-block fs-6">ROI</span></h4>
                                                                    <h4>Growth & Income <span class="d-block fs-6">STRATEGY</span></h4>
                                                                </div>
                                                                <div class="card-body d-flex justify-content-around">
                                                                    <button class="">
                                                                        <a class="modal-effect text-white btn px-4 py-2 m-1 btn-info" data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal" href="#modalFabian">
                                                                            View Documents
                                                                        </a>
                                                                    </button>
                                                                    <button class="">
                                                                        <a class="modal-effect text-white btn px-4 py-2 m-1 btn-primary" data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal" href="#modaldemoRealEstate"> Invest now </a>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <!-- modal -->
                                                            <div class="modal fade" id="modalFabian">
                                                                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                                                                    <div class="modal-content modal-content-demo">
                                                                        <div class="modal-header">
                                                                            <h3 class="modal-title">Asset Details</h3><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p class="fs-5"><a href="{{URL('assets/pdf/Fabian/investment-deck.pdf')}}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Investment Deck</a></p>
                                                                            <p class="fs-5"><a href="{{URL('assets/pdf/Fabian/demographic-deck.pdf')}}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Demographics</a></p>
                                                                            <p class="fs-5"><a href="{{URL('assets/pdf/Fabian/sponsor-track-record.pdf')}}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Sponsor Track Record</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- modal end -->
                                                        </div>

                                                        <div class="col-md-12  col-xl-6">
                                                            <div class="card">
                                                                <div class="card-status bg-blue br-tr-7 br-tl-7"></div>
                                                                <div class="card-header">
                                                                    <h3 class="card-title">The Mirage - Texas State Student Housing</h3>
                                                                    <div class="card-options">
                                                                        <a href="javascript:void(0);" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <img class="img-fluid" src="{{URL('assets/images/realEstate/sixth.png')}}" width="100%" height="100%" style="border-radius: 10px;">
                                                                </div>
                                                                <div class="card-body">
                                                                    A Texas State University student housing acquisition assuming below-market fixed-rate debt, with a renovation and rebranding strategy to seek higher rents and NOI.
                                                                </div>
                                                                <div class="card-body d-flex justify-content-around">
                                                                    <h4>$32.5K <span class="d-block fs-6">Minimum</span></h4>
                                                                    <h4>84.35%<span class="d-block fs-6">ROI</span></h4>
                                                                    <h4>Growth & Income <span class="d-block fs-6">STRATEGY</span></h4>
                                                                </div>
                                                                <div class="card-body d-flex justify-content-around">
                                                                    <button class="">
                                                                        <a class="modal-effect text-white btn px-4 py-2 m-1 btn-info" data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal" href="#modalMirage">
                                                                            View Documents
                                                                        </a>
                                                                    </button>
                                                                    <button class="">
                                                                        <a class="modal-effect text-white btn px-4 py-2 m-1 btn-primary" data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal" href="#modaldemoRealEstate"> Invest now </a>
                                                                    </button>
                                                                </div>
                                                            </div>


                                                            <!-- modal -->
                                                            <div class="modal fade" id="modalMirage">
                                                                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                                                                    <div class="modal-content modal-content-demo">
                                                                        <div class="modal-header">
                                                                            <h3 class="modal-title">Asset Details</h3><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p class="fs-5"><a href="{{URL('assets/pdf/Mirage/investment-deck.pdf')}}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Investment Deck</a></p>
                                                                            <p class="fs-5"><a href="{{URL('assets/pdf/Mirage/demographics.pdf')}}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Demographics</a></p>
                                                                            <p class="fs-5"><a href="{{URL('assets/pdf/Mirage/floor-plans.pdf')}}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Floor Plans - Mirage</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- modal end -->

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="tab-pane " id="tab6">
                                                    lorem close
                                                </div>
                                                <div class="tab-pane " id="tab7">
                                                    lorem running
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CONTAINER END -->
                </div>
            </div>
            <!-- APP-CONTENT END -->
        </div>

        <!-- modal -->
        <div class="modal fade" id="modaldemoRealEstate">
            <div class="modal-dialog modal-dialog-centered text-center" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h3 class="modal-title">Investment Details</h3><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form class="m-2" action="javascript:(void);">
                        <div class="modal-body">

                            <div class="form-group">
                                <label>Amount: <i class="fa fa-question-circle" data-bs-placement="top" data-bs-toggle="tooltip" title="Investing amount in USD $"></i></label> <i class="fa fa-dollar">
                                </i>
                                <input type="number" class="form-control amount" value="" placeholder="min: 1000" required>
                            </div>
                            <div class="form-group col-12">
                                <label class="form-label text-bold">Duration:
                                    <i class="fa fa-question-circle" data-bs-placement="top" data-bs-toggle="tooltip" title="Your Trade will auto close at the chosen time"></i>
                                </label>
                                <select class="form-control form-select select2" style="width: 100%;" data-bs-placeholder="Select" required>
                                    <option>select duration</option>
                                    <option value="1 day">1 day</option>
                                    <option value="2 days">2 days</option>
                                    <option value="3 days">3 days</option>
                                    <option value="4 days">4 days</option>
                                    <option value="5 days">5 days</option>
                                    <option value="6 days">6 days</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label>Description <i class="fa fa-question-circle" data-bs-placement="top" data-bs-toggle="tooltip" title="Describe what you are investing on E.g Am investing on Hilton with $1000"></i></label> <i class="fa fa-dollar">
                                </i>
                                <textarea class="form-control mb-4" placeholder="Describe what you are investing on E.g Am investing on Hilton with $10,000" rows="3"></textarea>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button href="" class="btn btn-primary col-12" name="invest">invest</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- modal end -->

        <!-- FOOTER -->
        @include('includes.user-footer')
        <!-- FOOTER END -->

    </div>
    <!-- CONTAINER END -->

    @include('includes.user-scripts')

</body>

</html>