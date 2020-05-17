
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Pages - Admin Dashboard UI Kit - Lock Screen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="{{asset('panel')}}/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('panel')}}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('panel')}}/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('panel')}}/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('panel')}}/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('panel')}}/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('panel')}}/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="{{asset('panel')}}/pages/css/themes/corporate.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
    window.onload = function()
    {
      / fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
    }
    </script>
  </head>
  <body class="fixed-header menu-pin menu-behind">
    <div class="register-container full-height sm-p-t-30">
      <div class="d-flex justify-content-center flex-column full-height ">
        <img src="{{asset('panel')}}/img/logo.png" alt="logo" data-src="{{asset('panel')}}/img/logo.png" data-src-retina="{{asset('panel')}}/img/logo_2x.png" width="78" height="22">
        <h3>Pages makes it easy to enjoy what matters the most in your life</h3>
        <p>
          Create a pages account. If you have a facebook account, log into it for this process. Sign in with <a href="#" class="text-info">Facebook</a> or <a href="#" class="text-info">Google</a>
        </p>
            <form id="form-register" class="p-t-15" role="form"  method="POST" action="{{ route('register') }}">
                @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group form-group-default">
                <label>First Name</label>
                <input type="text" placeholder="John" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required >
              </div>
            </div>
            {{-- <div class="col-md-6">
              <div class="form-group form-group-default">
                <label>Last Names</label>
                <input type="text" name="lname" placeholder="Smith" class="form-control" required>
              </div>
            </div>
          </div> --}}
          {{-- <div class="row">
            <div class="col-md-12">
              <div class="form-group form-group-default">
                <label>Pages User name</label>
                <input type="text" name="uname" placeholder="yourname.pages.com (this can be changed later)" class="form-control" required>
              </div>
            </div>
          </div> --}}
          @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          <div class="row">
            <div class="col-md-12">
              <div class="form-group form-group-default">
                <label>Password</label>
                <input type="password" placeholder="Minimum of 4 Charactors" class="form-control @error('password') is-invalid @enderror" name="password" required>
               @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                 @enderror
            </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group form-group-default">
                <label for="password-confirm">Password</label>
                <input id="password-confirm" type="password" placeholder="Minimum of 4 Charactors" class="form-control"  name="password_confirmation" required autocomplete="new-password">
            </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group form-group-default">
                <label>Email</label>
                <input type="email" placeholder="We will send loging details to you" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

              </div>
            </div>
          </div>
          <div class="row m-t-10">
            <div class="col-lg-6">
              <p><small>I agree to the <a href="#" class="text-info">Pages Terms</a> and <a href="#" class="text-info">Privacy</a>.</small></p>
            </div>
            <div class="col-lg-6 text-right">
              <a href="#" class="text-info small">Help? Contact Support</a>
            </div>
          </div>
          <button class="btn btn-primary btn-cons m-t-10" type="submit">Create a new account</button>
        </form>
      </div>
    </div>
    <div class=" full-width">
      <div class="register-container m-b-10 clearfix">
        <div class="m-b-30 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix d-flex-md-up">
          <div class="col-md-2 no-padding d-flex align-items-center">
            <img src="{{asset('panel')}}/img/demo/pages_icon.png" alt="" class="" data-src="{{asset('panel')}}/img/demo/pages_icon.png" data-src-retina="{{asset('panel')}}/img/demo/pages_icon_2x.png" width="60" height="60">
          </div>
          <div class="col-md-9 no-padding d-flex align-items-center">
            <p class="hinted-text small inline sm-p-t-10">No part of this website or any of its contents may be reproduced, copied, modified or adapted, without the prior written consent of the author, unless otherwise indicated for stand-alone materials.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- START OVERLAY -->
    <div class="overlay hide" data-pages="search">
      <!-- BEGIN Overlay Content !-->
      <div class="overlay-content has-results m-t-20">
        <!-- BEGIN Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Logo !-->
          <img class="overlay-brand" src="{{asset('panel')}}/img/logo.png" alt="logo" data-src="{{asset('panel')}}/img/logo.png" data-src-retina="{{asset('panel')}}/img/logo_2x.png" width="78" height="22">
          <!-- END Overlay Logo !-->
          <!-- BEGIN Overlay Close !-->
          <a href="#" class="close-icon-light overlay-close text-black fs-16">
            <i class="pg-close"></i>
          </a>
          <!-- END Overlay Close !-->
        </div>
        <!-- END Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Controls !-->
          <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
          <br>
          <div class="inline-block">
            <div class="checkbox right">
              <input id="checkboxn" type="checkbox" value="1" checked="checked">
              <label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
            </div>
          </div>
          <div class="inline-block m-l-10">
            <p class="fs-13">Press enter to search</p>
          </div>
          <!-- END Overlay Controls !-->
        </div>
        <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
        <div class="container-fluid">
          <span>
                <strong>suggestions :</strong>
            </span>
          <span id="overlay-suggestions"></span>
          <br>
          <div class="search-results m-t-40">
            <p class="bold">Pages Search Results</p>
            <div class="row">
              <div class="col-md-6">
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div>
                      <img width="50" height="50" src="{{asset('panel')}}/img/profiles/avatar.jpg" data-src="{{asset('panel')}}/img/profiles/avatar.jpg" data-src-retina="{{asset('panel')}}/img/profiles/avatar2x.jpg" alt="">
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
                    <p class="hint-text">via john smith</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div>T</div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
                    <p class="hint-text">via pages</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div><i class="fa fa-headphones large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
                    <p class="hint-text">via pagesmix</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
              </div>
              <div class="col-md-6">
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
                    <div><i class="fa fa-facebook large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
                    <p class="hint-text">via facebook</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
                    <div><i class="fa fa-twitter large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
                    <p class="hint-text">via twitter</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
                    <div><i class="fa fa-google-plus large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
                    <p class="hint-text">via google plus</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
              </div>
            </div>
          </div>
        </div>
        <!-- END Overlay Search Results !-->
      </div>
      <!-- END Overlay Content !-->
    </div>
    <!-- END OVERLAY -->
    <!-- BEGIN VENDOR JS -->
    <script src="{{asset('panel')}}/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="{{asset('panel')}}/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="{{asset('panel')}}/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="{{asset('panel')}}/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="{{asset('panel')}}/plugins/tether/js/tether.min.js" type="text/javascript"></script>
    <script src="{{asset('panel')}}/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{asset('panel')}}/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="{{asset('panel')}}/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="{{asset('panel')}}/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="{{asset('panel')}}/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="{{asset('panel')}}/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="{{asset('panel')}}/plugins/select2/js/select2.full.min.js"></script>
    <script type="text/javascript" src="{{asset('panel')}}/plugins/classie/classie.js"></script>
    <script src="{{asset('panel')}}/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <script src="{{asset('panel')}}/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <script src="{{asset('panel')}}/pages/js/pages.min.js"></script>
    <script>
    $(function()
    {
      $('#form-register').validate()
    })
    </script>
  </body>
</html>
