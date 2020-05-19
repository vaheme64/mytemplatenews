@extends('panel.main')

@section('content')
  <div class="content sm-gutter">
    <!-- START CONTAINER FLUID -->
    <div class="container-fluid padding-25 sm-padding-10">
      <div class="row">
        <div class="col-lg-4 col-xl-3 col-xlg-2 ">
          <div class="row">
            <div class="col-md-12 m-b-10">
              <!-- START WIDGET D3 widget_graphTileFlat-->
              <div class="widget-8 card no-border bg-warning no-margin widget-loader-bar">
                <div class="container-xs-height full-height">
                  <div class="row-xs-height">
                    <div class="col-xs-height col-top">
                      <div class="card-header  top-left top-right">
                        <div class="card-title text-black hint-text">
                          <span class="font-montserrat fs-11 all-caps">Weekly Sales <i
                                    class="fa fa-chevron-right"></i>
                                              </span>
                        </div>
                        <div class="card-controls">
                          <ul>
                            <li>
                              <a data-toggle="refresh" class="card-refresh text-black" href="#"><i
                                        class="card-icon card-icon-refresh"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row-xs-height ">
                    <div class="col-xs-height col-top relative">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="p-l-20">
                            <h3 class="no-margin p-b-5 text-white">$14,000</h3>
                            <p class="small hint-text m-t-5">
                              <span class="label  font-montserrat m-r-5">60%</span>Higher
                            </p>
                          </div>
                        </div>
                        <div class="col-sm-6">
                        </div>
                      </div>
                      <div class='widget-8-chart line-chart' data-line-color="black" data-points="true" data-point-color="warning" data-stroke-width="2">
                        <svg></svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END WIDGET -->
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 m-b-10">
              <!-- START WIDGET widget_progressTileFlat-->
              <div class="widget-9 card no-border bg-success no-margin widget-loader-bar">
                <div class="full-height d-flex flex-column">
                  <div class="card-header ">
                    <div class="card-title text-black">
                      <span class="font-montserrat fs-11 all-caps">Weekly Sales <i
                                class="fa fa-chevron-right"></i>
                              </span>
                    </div>
                    <div class="card-controls">
                      <ul>
                        <li><a href="#" class="card-refresh text-black" data-toggle="refresh"><i
                                    class="card-icon card-icon-refresh"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="p-l-20">
                    <h3 class="no-margin p-b-5 text-white">$23,000</h3>
                    <a href="#" class="btn-circle-arrow text-white"><i
                              class="pg-arrow_minimize"></i>
                    </a>
                    <span class="small hint-text text-white">65% lower than last month</span>
                  </div>
                  <div class="mt-auto">
                    <div class="progress progress-small m-b-20">
                      <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                      <div class="progress-bar progress-bar-white" style="width:45%"></div>
                      <!-- END BOOTSTRAP PROGRESS -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- END WIDGET -->
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 md-m-b-10 sm-m-b-10">
              <!-- START WIDGET widget_statTile-->
              <div class="widget-10 card no-border bg-white no-margin widget-loader-bar">
                <div class="card-header  top-left top-right ">
                  <div class="card-title text-black hint-text">
                    <span class="font-montserrat fs-11 all-caps">Weekly Sales <i class="fa fa-chevron-right"></i>
                                  </span>
                  </div>
                  <div class="card-controls">
                    <ul>
                      <li><a data-toggle="refresh" class="card-refresh text-black" href="#"><i
                                  class="card-icon card-icon-refresh"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-block p-t-40">
                  <div class="row">
                    <div class="col-sm-12">
                      <h4 class="no-margin p-b-5 text-danger semi-bold">APPL 2.032</h4>
                      <div class="pull-left small">
                        <span>WMHC</span>
                        <span class=" text-success font-montserrat">
                                              <i class="fa fa-caret-up m-l-10"></i> 9%
                                          </span>
                      </div>
                      <div class="pull-left m-l-20 small">
                        <span>HCRS</span>
                        <span class=" text-danger font-montserrat">
                                              <i class="fa fa-caret-up m-l-10"></i> 21%
                                          </span>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                  <div class="p-t-10 full-width">
                    <a href="#" class="btn-circle-arrow b-grey"><i
                              class="pg-arrow_minimize text-danger"></i></a>
                    <span class="hint-text small">Show more</span>
                  </div>
                </div>
              </div>
              <!-- END WIDGET -->
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-xl-9 col-xlg-6 m-b-10">
          <div class="row">
            <div class="col-md-12">
              <!-- START WIDGET D3 widget_graphWidget-->
              <div class="widget-12 card no-border widget-loader-circle no-margin">
                <div class="row">
                  <div class="col-lg-8 ">
                    <div class="card-header  pull-up top-right ">
                      <div class="card-controls">
                        <ul>
                          <li class="hidden-xlg">
                            <div class="dropdown">
                              <a data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                <i class="card-icon card-icon-settings"></i>
                              </a>
                              <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="#">AAPL</a>
                                </li>
                                <li><a href="#">YHOO</a>
                                </li>
                                <li><a href="#">GOOG</a>
                                </li>
                              </ul>
                            </div>
                          </li>
                          <li>
                            <a data-toggle="refresh" class="card-refresh text-black" href="#"><i class="card-icon card-icon-refresh"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-block">
                  <div class="row">
                    <div class="col-sm-8">
                      <div class="p-l-5">
                        <h2 class="pull-left m-t-5 m-b-5">Apple Inc.</h2>
                        <h2 class="pull-left m-l-50 m-t-5 m-b-5 text-danger">
                          <span class="">448.97</span>
                          <span class="text-danger fs-12">-318.24</span>
                        </h2>
                        <div class="clearfix"></div>
                        <div class="full-width">
                          <ul class="list-inline">
                            <li><a href="#" class="font-montserrat text-master">1D</a>
                            </li>
                            <li class="active"><a href="#" class="font-montserrat  bg-master-light text-master">5D</a>
                            </li>
                            <li><a href="#" class="font-montserrat text-master">1M</a>
                            </li>
                            <li><a href="#" class="font-montserrat text-master">1Y</a>
                            </li>
                          </ul>
                        </div>
                        <div class="nvd3-line line-chart text-center" data-x-grid="false">
                          <svg></svg>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="widget-12-search">
                        <p class="pull-left">Company
                          <span class="bold">List</span>
                        </p>
                        <button class="btn btn-default btn-xs pull-right">
                          <span class="bold">+</span>
                        </button>
                        <div class="clearfix"></div>
                        <input type="text" placeholder="Search list" class="form-control m-t-5">
                      </div>
                      <div class="company-stat-boxes">
                        <div data-index="0" class="company-stat-box m-t-15 active padding-20 bg-master-lightest">
                          <div>
                            <button type="button" class="close" data-dismiss="modal">
                              <i class="pg-close fs-12"></i>
                            </button>
                            <p class="company-name pull-left text-uppercase bold no-margin">
                              <span class="fa fa-circle text-success fs-11"></span> AAPL
                            </p>
                            <small class="hint-text m-l-10">Yahoo Inc.</small>
                            <div class="clearfix"></div>
                          </div>
                          <div class="m-t-10">
                            <p class="pull-left small hint-text no-margin p-t-5">9:42AM ET</p>
                            <div class="pull-right">
                              <p class="small hint-text no-margin inline">37.73</p>
                              <span class=" label label-important p-t-5 m-l-5 p-b-5 inline fs-12">+ 0.09</span>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                        <div data-index="1" class="company-stat-box m-t-15  padding-20 bg-master-lightest">
                          <div>
                            <button type="button" class="close" data-dismiss="modal">
                              <i class="pg-close fs-12"></i>
                            </button>
                            <p class="company-name pull-left text-uppercase bold no-margin">
                              <span class="fa fa-circle text-primary fs-11"></span> YHOO
                            </p>
                            <small class="hint-text m-l-10">Yahoo Inc.</small>
                            <div class="clearfix"></div>
                          </div>
                          <div class="m-t-10">
                            <p class="pull-left small hint-text no-margin p-t-5">9:42AM ET</p>
                            <div class="pull-right">
                              <p class="small hint-text no-margin inline">37.73</p>
                              <span class=" label label-success p-t-5 m-l-5 p-b-5 inline fs-12">+ 0.09</span>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                        <div data-index="2" class="company-stat-box m-t-15  padding-20 bg-master-lightest">
                          <div>
                            <button type="button" class="close" data-dismiss="modal">
                              <i class="pg-close fs-12"></i>
                            </button>
                            <p class="company-name pull-left text-uppercase bold no-margin">
                              <span class="fa fa-circle text-complete fs-11"></span> GOOG
                            </p>
                            <small class="hint-text m-l-10">Yahoo Inc.</small>
                            <div class="clearfix"></div>
                          </div>
                          <div class="m-t-10">
                            <p class="pull-left small hint-text no-margin p-t-5">9:42AM ET</p>
                            <div class="pull-right">
                              <p class="small hint-text no-margin inline">37.73</p>
                              <span class=" label label-success p-t-5 m-l-5 p-b-5 inline fs-12">+ 0.09</span>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END WIDGET -->
            </div>
          </div>
        </div>
        <div class="col-lg-6 hidden-lg visible-xlg col-xlg-4 m-b-10">
          <!-- START WIDGET D3 widget_stackedBarWidget-->
          <div class="widget-15 card card-condensed  no-margin no-border widget-loader-circle">
            <div class="card-header ">
              <div class="card-controls">
                <ul>
                  <li><a href="#" class="card-collapse" data-toggle="collapse"><i
                              class="card-icon card-icon-collapse"></i></a>
                  </li>
                  <li><a href="#" class="card-refresh text-black" data-toggle="refresh"><i
                              class="card-icon card-icon-refresh"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="card-block no-padding">
              <ul class="nav nav-tabs nav-tabs-simple">
                <li class="nav-item">
                  <a href="#" data-toggle="tab" class="p-t-5 active">
                    APPL<br>
                    22.23<br>
                    <span class="text-success">+60.223%</span>
                  </a>
                </li>
                <li class="nav-item"><a href="#" data-toggle="tab" class="p-t-5">
                    FB<br>
                    45.97<br>
                    <span class="text-danger">-06.56%</span>
                  </a>
                </li>
                <li class="nav-item"><a href="#" data-toggle="tab" class="p-t-5">
                    GOOG<br>
                    22.23<br>
                    <span class="text-success">+60.223%</span>
                  </a>
                </li>
              </ul>
              <div class="tab-content p-l-20 p-r-20">
                <div class="tab-pane no-padding active" id="widget-15-tab-1">
                  <div class="full-width">
                    <div class="full-width">
                      <div class="widget-15-chart rickshaw-chart"></div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane no-padding" id="widget-15-tab-2">
                </div>
                <div class="tab-pane" id="widget-15-tab-3">
                </div>
              </div>
              <div class="p-t-20 p-l-20 p-r-20 p-b-30">
                <div class="row">
                  <div class="col-md-9">
                    <p class="fs-16 text-black">Apple’s Motivation - Innovation
                      <br>distinguishes between A leader and a follower.
                    </p>
                    <p class="small hint-text p-b-10">VIA Apple Store (Consumer and Education Individuals)
                      <br>(800) MY-APPLE (800-692-7753)
                    </p>
                  </div>
                  <div class="col-md-3 text-right">
                    <p class="font-montserrat bold text-success m-r-20 fs-16">+0.94</p>
                    <p class="font-montserrat bold text-danger m-r-20 fs-16">-0.63</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END WIDGET -->
        </div>
      </div>
      <div class="row m-b-10">
        <div class="col-lg-8 sm-p-b-10 md-p-b-10">
          <!-- START WIDGET widget_mapWidget-->
          <div class="widget-13 card no-border  no-margin widget-loader-circle">
            <div class="card-header  pull-up top-right ">
              <div class="card-controls">
                <ul>
                  <li><a href="#" class="card-refresh text-black" data-toggle="refresh"><i class="card-icon card-icon-refresh"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="container-sm-height no-overflow">
              <div class="row row-sm-height">
                <div class="col-sm-5 col-lg-4 col-xlg-3 col-sm-height col-top no-padding">
                  <div class="card-header  ">
                    <div class="card-title">Menu clipping
                    </div>
                  </div>
                  <div class="card-block">
                    <ul class="nav nav-pills m-t-5 m-b-15" role="tablist">
                      <li class="active">
                        <a href="#tab1" data-toggle="tab" role="tab" class="b-a b-grey text-master">
                          fb
                        </a>
                      </li>
                      <li>
                        <a href="#tab2" data-toggle="tab" role="tab" class="b-a b-grey text-master">
                          js
                        </a>
                      </li>
                      <li>
                        <a href="#tab3" data-toggle="tab" role="tab" class="b-a b-grey text-master">
                          sa
                        </a>
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="tab1">
                        <h3>Facebook</h3>
                        <p class="hint-text all-caps font-montserrat small no-margin ">Views</p>
                        <p class="all-caps font-montserrat  no-margin text-success ">14,256</p>
                        <br>
                        <p class="hint-text all-caps font-montserrat small no-margin ">Today</p>
                        <p class="all-caps font-montserrat  no-margin text-warning ">24</p>
                        <br>
                        <p class="hint-text all-caps font-montserrat small no-margin ">Week</p>
                        <p class="all-caps font-montserrat  no-margin text-success ">56</p>
                      </div>
                      <div class="tab-pane " id="tab2">
                        <h3>Google</h3>
                        <p class="hint-text all-caps font-montserrat small no-margin ">Views</p>
                        <p class="all-caps font-montserrat  no-margin text-success ">14,256</p>
                        <br>
                        <p class="hint-text all-caps font-montserrat small no-margin ">Today</p>
                        <p class="all-caps font-montserrat  no-margin text-warning ">24</p>
                        <br>
                        <p class="hint-text all-caps font-montserrat small no-margin ">Week</p>
                        <p class="all-caps font-montserrat  no-margin text-success ">56</p>
                      </div>
                      <div class="tab-pane" id="tab3">
                        <h3>Amazon</h3>
                        <p class="hint-text all-caps font-montserrat small no-margin ">Views</p>
                        <p class="all-caps font-montserrat  no-margin text-success ">14,256</p>
                        <br>
                        <p class="hint-text all-caps font-montserrat small no-margin ">Today</p>
                        <p class="all-caps font-montserrat  no-margin text-warning ">24</p>
                        <br>
                        <p class="hint-text all-caps font-montserrat small no-margin ">Week</p>
                        <p class="all-caps font-montserrat  no-margin text-success ">56</p>
                      </div>
                    </div>
                  </div>
                  <div class="bg-master-light p-l-20 p-r-20 p-t-10 p-b-10 pull-bottom full-width hidden-xs">
                    <p class="no-margin">
                      <a href="#"><i class="fa fa-arrow-circle-o-down text-success"></i></a>
                      <span class="hint-text">Super secret options</span>
                    </p>
                  </div>
                </div>
                <div class="col-sm-7 col-lg-8 col-xlg-9 col-sm-height col-top no-padding relative">
                  <div class="bg-master-light widget-13-map">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END WIDGET -->
        </div>
        <div class="col-lg-4">
          <!-- START WIDGET widget_realtimeWidget-->
          <div class="widget-14 card no-border  no-margin widget-loader-circle">
            <div class="container-xs-height full-height">
              <div class="row-xs-height">
                <div class="col-xs-height">
                  <div class="card-header ">
                    <div class="card-title">Server load
                    </div>
                    <div class="card-controls">
                      <ul>
                        <li><a href="#" class="card-refresh text-black" data-toggle="refresh"><i
                                    class="card-icon card-icon-refresh"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row-xs-height">
                <div class="col-xs-height">
                  <div class="p-l-20 p-r-20">
                    <p>Server: www.revox.io</p>
                    <div class="row">
                      <div class="col-lg-3 col-md-12">
                        <h4 class="bold no-margin">5.2GB</h4>
                        <p class="small no-margin">Total usage</p>
                      </div>
                      <div class="col-lg-3 col-md-6">
                        <h5 class=" no-margin p-t-5">227.34KB</h5>
                        <p class="small no-margin">Currently</p>
                      </div>
                      <div class="col-lg-3 col-md-6">
                        <h5 class=" no-margin p-t-5">117.65MB</h5>
                        <p class="small no-margin">Average</p>
                      </div>
                      <div class="col-lg-3 visible-xlg">
                        <div class="widget-14-chart-legend bg-transparent text-black no-padding pull-right"></div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row-xs-height">
                <div class="col-xs-height relative bg-master-lightest">
                  <div class="widget-14-chart_y_axis"></div>
                  <div class="widget-14-chart rickshaw-chart top-left top-right bottom-left bottom-right"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- END WIDGET -->
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 visible-lg hidden-xlg sm-m-b-10">
          <!-- START WIDGET D3 widget_stackedBarWidgetBasic-->
          <div class="widget-15-2 card no-margin no-border widget-loader-circle">
            <div class="card-header  top-right">
              <div class="card-controls">
                <ul>
                  <li><a href="#" class="card-refresh text-black" data-toggle="refresh"><i
                              class="card-icon card-icon-refresh"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <ul class="nav nav-tabs nav-tabs-simple">
              <li>
                <a href="#widget-15-2-tab-1" class="active">
                  APPL<br>
                  22.23<br>
                  <span class="text-success">+60.223%</span>
                </a>
              </li>
              <li><a href="#widget-15-2-tab-2">
                  FB<br>
                  45.97<br>
                  <span class="text-danger">-06.56%</span>
                </a>
              </li>
              <li><a href="#widget-15-2-tab-3">
                  GOOG<br>
                  22.23<br>
                  <span class="text-success">+60.223%</span>
                </a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane no-padding active" id="widget-15-2-tab-1">
                <div class="full-width">
                  <div class="widget-15-chart2 rickshaw-chart full-height"></div>
                </div>
              </div>
              <div class="tab-pane no-padding" id="widget-15-2-tab-2">
              </div>
              <div class="tab-pane" id="widget-15-2-tab-3">
              </div>
            </div>
            <div class="p-t-10 p-l-20 p-r-20 p-b-30">
              <div class="row">
                <div class="col-md-9">
                  <p class="fs-16 text-black">Apple’s Motivation - Innovation distinguishes between A leader and a follower.
                  </p>
                  <p class="small hint-text">VIA Apple Store (Consumer and Education Individuals)
                    <br>(800) MY-APPLE (800-692-7753)
                  </p>
                </div>
                <div class="col-md-3 text-right">
                  <h5 class="font-montserrat bold text-success">+0.94</h5>
                  <h5 class="font-montserrat bold text-danger">-0.63</h5>
                </div>
              </div>
            </div>
          </div>
          <!-- END WIDGET -->
        </div>
        <div class="col-md-4 col-lg-3 col-xlg-3 m-b-10 visible-xlg">
          <!-- START WIDGET D3 widget_graphOptionsWidget-->
          <div class="widget-16 card no-border  no-margin widget-loader-circle">
            <div class="card-header ">
              <div class="card-title">Page Options
              </div>
              <div class="card-controls">
                <ul>
                  <li><a href="#" class="card-refresh text-black" data-toggle="refresh"><i
                              class="card-icon card-icon-refresh"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="widget-16-header padding-20 d-flex">
              <span class="icon-thumbnail bg-master-light pull-left text-master">ws</span>
              <div class="flex-1 full-width overflow-ellipsis">
                <p class="hint-text all-caps font-montserrat  small no-margin overflow-ellipsis ">Pages name
                </p>
                <h5 class="no-margin overflow-ellipsis ">Webarch Sales Analysis</h5>
              </div>
            </div>
            <div class="p-l-25 p-r-45 p-t-25 p-b-25">
              <div class="row">
                <div class="col-md-4 ">
                  <p class="hint-text all-caps font-montserrat small no-margin ">Views</p>
                  <p class="all-caps font-montserrat  no-margin text-success ">14,256</p>
                </div>
                <div class="col-md-4 text-center">
                  <p class="hint-text all-caps font-montserrat small no-margin ">Today</p>
                  <p class="all-caps font-montserrat  no-margin text-warning ">24</p>
                </div>
                <div class="col-md-4 text-right">
                  <p class="hint-text all-caps font-montserrat small no-margin ">Week</p>
                  <p class="all-caps font-montserrat  no-margin text-success ">56</p>
                </div>
              </div>
            </div>
            <div class="relative no-overflow">
              <div class="widget-16-chart line-chart" data-line-color="success" data-points="true" data-point-color="white" data-stroke-width="2">
                <svg></svg>
              </div>
            </div>
            <div class="b-b b-t b-grey p-l-20 p-r-20 p-b-10 p-t-10">
              <p class="pull-left">Post is Public</p>
              <div class="pull-right">
                <input type="checkbox" data-init-plugin="switchery" />
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="b-b b-grey p-l-20 p-r-20 p-b-10 p-t-10">
              <p class="pull-left">Maintenance mode</p>
              <div class="pull-right">
                <input type="checkbox" data-init-plugin="switchery" checked="checked" />
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="p-l-20 p-r-20 p-t-10 p-b-10 ">
              <p class="pull-left no-margin hint-text">Super secret options</p>
              <a href="#" class="pull-right"><i class="fa fa-arrow-circle-o-down text-success fs-16"></i></a>
              <div class="clearfix"></div>
            </div>
          </div>
          <!-- END WIDGET -->
        </div>
        <div class="col-xlg-3 visible-xlg ">
          <div class="row">
            <div class="col-xlg-12">
              <!-- START WIDGET widget_socialPostTile-->
              <div class="card no-border  no-margin">
                <div class="padding-15">
                  <div class="item-header clearfix">
                    <div class="thumbnail-wrapper d32 circular">
                      <img width="40" height="40" src="{{asset('panel')}}/img/profiles/3x.jpg" data-src="{{asset('panel')}}/img/profiles/3.jpg" data-src-retina="{{asset('panel')}}/img/profiles/3x.jpg" alt="">
                    </div>
                    <div class="inline m-l-10">
                      <p class="no-margin">
                        <strong>Anne Simons</strong>
                      </p>
                      <p class="no-margin hint-text">Shared a link
                        <span class="location semi-bold"><i class="fa fa-map-marker"></i> NY center</span>
                      </p>
                    </div>
                  </div>
                </div>
                <hr class="no-margin">
                <div class="padding-15">
                  <p>Inspired by : good design is obvious, great design is transparent</p>
                  <div class="hint-text">via themeforest</div>
                </div>
                <div class="relative">
                  <ul class="buttons pull-top top-right list-inline p-r-10 p-t-10">
                    <li>
                      <a class="text-white" href="#"><i class="fa fa-expand"></i>
                      </a>
                    </li>
                    <li>
                      <a class="text-white" href="#"><i class="fa fa-heart-o"></i>
                      </a>
                    </li>
                  </ul>
                  <div class="widget-19-post no-overflow">
                    <img src="{{asset('panel')}}/img/social-post-image.png" class="block center-margin relative" alt="Post">
                  </div>
                </div>
                <div class="padding-15">
                  <div class="hint-text pull-left">few seconds ago</div>
                  <ul class="list-inline pull-right no-margin">
                    <li><a class="text-master hint-text" href="#">5,345 <i class="fa fa-comment-o"></i></a>
                    </li>
                    <li><a class="text-master hint-text" href="#">23K <i class="fa fa-heart-o"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
              </div>
              <!-- END WIDGET -->
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-8 col-xlg-6 md-m-t-10">
          <!-- START WIDGET widget_weatherWidget-->
          <div class="widget-17 card  no-border no-margin widget-loader-circle">
            <div class="card-header ">
              <div class="card-title">
                <i class="pg-map"></i> California, USA
                <span class="caret"></span>
              </div>
              <div class="card-controls">
                <ul>
                  <li class="">
                    <div class="dropdown">
                      <a data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                        <i class="card-icon card-icon-settings"></i>
                      </a>
                      <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">AAPL</a>
                        </li>
                        <li><a href="#">YHOO</a>
                        </li>
                        <li><a href="#">GOOG</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <a data-toggle="refresh" class="card-refresh text-black" href="#">
                      <i class="card-icon card-icon-refresh"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="card-block">
              <div class="p-l-5">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="row m-t-20">
                      <div class="col-lg-5">
                        <h4 class="no-margin">Monday</h4>
                        <p class="small hint-text">9th August 2014</p>
                      </div>
                      <div class="col-lg-7">
                        <div class="pull-left">
                          <p class="small hint-text no-margin">Currently</p>
                          <h4 class="text-danger bold no-margin">32°
                            <span class="small">/ 30C</span>
                          </h4>
                        </div>
                        <div class="pull-right">
                          <canvas height="64" width="64" class="clear-day"></canvas>
                        </div>
                      </div>
                    </div>
                    <h5>Feels like
                      <span class="semi-bold">rainy</span>
                    </h5>
                    <p>Weather information</p>
                    <div class="widget-17-weather">
                      <div class="row">
                        <div class="col-6 p-r-10">
                          <div class="row">
                            <div class="col-lg-12">
                              <p class="pull-left">Wind</p>
                              <p class="pull-right bold">11km/h</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <p class="pull-left">Sunrise</p>
                              <p class="pull-right bold">05:20</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <p class="pull-left">Humidity</p>
                              <p class="pull-right bold">20%</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <p class="pull-left">Precipitation</p>
                              <p class="pull-right bold">60%</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-6 p-l-10">
                          <div class="row">
                            <div class="col-lg-12">
                              <p class="pull-left">Sunset</p>
                              <p class="pull-right bold">21:05</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <p class="pull-left">Visibility</p>
                              <p class="pull-right bold">21km</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row m-t-10 timeslot">
                      <div class="col-2 p-t-10 text-center">
                        <p class="small">13:30</p>
                        <canvas height="25" width="25" class="partly-cloudy-day"></canvas>
                        <p class="text-danger bold">30°C</p>
                      </div>
                      <div class="col-2 p-t-10 text-center">
                        <p class="small">14:00</p>
                        <canvas height="25" width="25" class="cloudy"></canvas>
                        <p class="text-danger bold">30°C</p>
                      </div>
                      <div class="col-2 p-t-10 text-center">
                        <p class="small">14:30</p>
                        <canvas height="25" width="25" class="rain"></canvas>
                        <p class="text-danger bold">30°C</p>
                      </div>
                      <div class="col-2 p-t-10 text-center">
                        <p class="small">15:00</p>
                        <canvas height="25" width="25" class="sleet"></canvas>
                        <p class="text-danger bold">30°C</p>
                      </div>
                      <div class="col-2 p-t-10 text-center">
                        <p class="small">15:30</p>
                        <canvas height="25" width="25" class="snow"></canvas>
                        <p class="text-danger bold">30°C</p>
                      </div>
                      <div class="col-2 p-t-10 text-center">
                        <p class="small">16:00</p>
                        <canvas height="25" width="25" class="wind"></canvas>
                        <p class="text-danger bold">30°C</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 hidden-sm-down">
                    <div class="row">
                      <div class="forecast-day col-sm-6 text-center m-t-10 ">
                        <div class="bg-master-lightest p-b-10 p-t-10">
                          <h4 class="p-t-10 no-margin">Tuesday</h4>
                          <p class="small hint-text m-b-20">11th Augest 2014</p>
                          <canvas class="rain" width="64" height="64"></canvas>
                          <h5 class="text-danger">32°</h5>
                          <p>Feels like
                            <span class="bold">sunny</span>
                          </p>
                          <p class="small">Wind
                            <span class="bold p-l-20">11km/h</span>
                          </p>
                          <div class="m-t-20 block">
                            <div class="padding-10">
                              <div class="row">
                                <div class="col-lg-6 text-center">
                                  <p class="small">Noon</p>
                                  <canvas class="sleet" width="25" height="25"></canvas>
                                  <p class="text-danger bold">30°C</p>
                                </div>
                                <div class="col-lg-6 text-center">
                                  <p class="small">Night</p>
                                  <canvas class="wind" width="25" height="25"></canvas>
                                  <p class="text-danger bold">30°C</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 text-center m-t-10 ">
                        <div class="bg-master-lightest p-b-10 p-t-10">
                          <h4 class="p-t-10 no-margin">Wednesday</h4>
                          <p class="small hint-text m-b-20">11th Augest 2014</p>
                          <canvas class="rain" width="64" height="64"></canvas>
                          <h5 class="text-danger">32°</h5>
                          <p>Feels like
                            <span class="bold">sunny</span>
                          </p>
                          <p class="small">Wind
                            <span class="bold p-l-20">11km/h</span>
                          </p>
                          <div class="m-t-20 block">
                            <div class="padding-10">
                              <div class="row">
                                <div class="col-lg-6 text-center">
                                  <p class="small">Noon</p>
                                  <canvas class="sleet" width="25" height="25"></canvas>
                                  <p class="text-danger bold">30°C</p>
                                </div>
                                <div class="col-lg-6 text-center">
                                  <p class="small">Night</p>
                                  <canvas class="wind" width="25" height="25"></canvas>
                                  <p class="text-danger bold">30°C</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END WIDGET -->
        </div>
      </div>
    </div>
    <!-- END CONTAINER FLUID -->
  </div>


@endsection
@section('extra-footer')
  <script src="{{asset('panel')}}/plugins/nvd3/lib/d3.v3.js" type="text/javascript"></script>
  <script src="{{asset('panel')}}/plugins/nvd3/nv.d3.min.js" type="text/javascript"></script>
  <script src="{{asset('panel')}}/plugins/nvd3/src/utils.js" type="text/javascript"></script>
  <script src="{{asset('panel')}}/plugins/nvd3/src/tooltip.js" type="text/javascript"></script>
  <script src="{{asset('panel')}}/plugins/nvd3/src/interactiveLayer.js" type="text/javascript"></script>
  <script src="{{asset('panel')}}/plugins/nvd3/src/models/axis.js" type="text/javascript"></script>
  <script src="{{asset('panel')}}/plugins/nvd3/src/models/line.js" type="text/javascript"></script>
  <script src="{{asset('panel')}}/plugins/nvd3/src/models/lineWithFocusChart.js" type="text/javascript"></script>
  <script src="{{asset('panel')}}/plugins/mapplic/js/hammer.js"></script>
  <script src="{{asset('panel')}}/plugins/mapplic/js/jquery.mousewheel.js"></script>
  <script src="{{asset('panel')}}/plugins/mapplic/js/mapplic.js"></script>
  <script src="{{asset('panel')}}/plugins/rickshaw/rickshaw.min.js"></script>
  <script src="{{asset('panel')}}/plugins/jquery-sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
  <script src="{{asset('panel')}}/plugins/skycons/skycons.js" type="text/javascript"></script>
  <script src="{{asset('panel')}}/js/dashboard.js" type="text/javascript"></script>
@endsection