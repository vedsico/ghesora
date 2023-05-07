<?php
include("head.php");

?>
<?php
include("navbar.php");

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<style>
/*! CSS Used from: https://mobirise.com/extensions/educationm4/assets/bootstrap/css/bootstrap.min.css */
*,::after,::before{box-sizing:border-box;}
section{display:block;}
h2,h4{margin-top:0;margin-bottom:.5rem;}
a{color:#007bff;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
a:hover{color:#0056b3;text-decoration:underline;}
a:not([href]):not([tabindex]){color:inherit;text-decoration:none;}
a:not([href]):not([tabindex]):focus,a:not([href]):not([tabindex]):hover{color:inherit;text-decoration:none;}
a:not([href]):not([tabindex]):focus{outline:0;}
label{display:inline-block;margin-bottom:.5rem;}
button{border-radius:0;}
button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color;}
button,input{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
button,input{overflow:visible;}
button{text-transform:none;}
[type=submit],button{-webkit-appearance:button;}
[hidden]{display:none!important;}
h2,h4{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit;}
h2{font-size:2rem;}
h4{font-size:1.5rem;}
.display-2{font-size:5.5rem;font-weight:300;line-height:1.2;}
.display-4{font-size:3.5rem;font-weight:300;line-height:1.2;}
.container-fluid{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
.row{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
.col-lg-6,.col-md-12,.col-md-5,.col-md-7,.col-sm-12{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width:576px){
.col-sm-12{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}
}
@media (min-width:768px){
.col-md-5{-webkit-box-flex:0;-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%;}
.col-md-7{-webkit-box-flex:0;-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%;}
.col-md-12{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}
}
@media (min-width:992px){
.col-lg-6{-webkit-box-flex:0;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
}
.form-control{display:block;width:100%;padding:.375rem .75rem;font-size:1rem;line-height:1.5;color:#495057;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;border-radius:.25rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
.form-control:focus{color:#495057;background-color:#fff;border-color:#80bdff;outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25);}
.form-control::placeholder{color:#6c757d;opacity:1;}
.form-control:disabled{background-color:#e9ecef;opacity:1;}
.form-group{margin-bottom:1rem;}
.btn{display:inline-block;font-weight:400;text-align:center;white-space:nowrap;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
.btn:focus,.btn:hover{text-decoration:none;}
.btn:focus{outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25);}
.btn:disabled{opacity:.65;}
.btn:not(:disabled):not(.disabled){cursor:pointer;}
.btn:not(:disabled):not(.disabled):active{background-image:none;}
.btn-primary{color:#fff;background-color:#007bff;border-color:#007bff;}
.btn-primary:hover{color:#fff;background-color:#0069d9;border-color:#0062cc;}
.btn-primary:focus{box-shadow:0 0 0 .2rem rgba(0,123,255,.5);}
.btn-primary:disabled{color:#fff;background-color:#007bff;border-color:#007bff;}
.btn-primary:not(:disabled):not(.disabled):active{color:#fff;background-color:#0062cc;border-color:#005cbf;}
.btn-primary:not(:disabled):not(.disabled):active:focus{box-shadow:0 0 0 .2rem rgba(0,123,255,.5);}
.btn-lg{padding:.5rem 1rem;font-size:1.25rem;line-height:1.5;border-radius:.3rem;}
.card{position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:.25rem;}
.justify-content-center{-webkit-box-pack:center!important;-ms-flex-pack:center!important;justify-content:center!important;}
.pb-1{padding-bottom:.25rem!important;}
.pb-2{padding-bottom:.5rem!important;}
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
h2{orphans:3;widows:3;}
h2{page-break-after:avoid;}
}
/*! CSS Used from: https://mobirise.com/extensions/educationm4/assets/bootstrap/css/bootstrap-grid.min.css */
*,::after,::before{box-sizing:inherit;}
.container-fluid{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
.row{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
.col-lg-6,.col-md-12,.col-md-5,.col-md-7,.col-sm-12{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width:576px){
.col-sm-12{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}
}
@media (min-width:768px){
.col-md-5{-webkit-box-flex:0;-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%;}
.col-md-7{-webkit-box-flex:0;-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%;}
.col-md-12{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}
}
@media (min-width:992px){
.col-lg-6{-webkit-box-flex:0;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
}
.justify-content-center{-webkit-box-pack:center!important;-ms-flex-pack:center!important;justify-content:center!important;}
/*! CSS Used from: https://mobirise.com/extensions/educationm4/assets/bootstrap/css/bootstrap-reboot.min.css */
*,::after,::before{box-sizing:border-box;}
section{display:block;}
h2,h4{margin-top:0;margin-bottom:.5rem;}
a{color:#007bff;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
a:hover{color:#0056b3;text-decoration:underline;}
a:not([href]):not([tabindex]){color:inherit;text-decoration:none;}
a:not([href]):not([tabindex]):focus,a:not([href]):not([tabindex]):hover{color:inherit;text-decoration:none;}
a:not([href]):not([tabindex]):focus{outline:0;}
label{display:inline-block;margin-bottom:.5rem;}
button{border-radius:0;}
button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color;}
button,input{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
button,input{overflow:visible;}
button{text-transform:none;}
[type=submit],button{-webkit-appearance:button;}
[hidden]{display:none!important;}
/*! CSS Used from: https://mobirise.com/extensions/educationm4/assets/theme/css/style.css */
section{background-color:#eeeeee;}
section,.container-fluid{position:relative;word-wrap:break-word;}
a{font-style:normal;font-weight:400;cursor:pointer;}
a,a:hover{text-decoration:none;}
h2,h4,.display-2,.display-4{line-height:1;word-break:break-word;word-wrap:break-word;}
section{background-position:50% 50%;background-repeat:no-repeat;background-size:cover;}
.align-left{text-align:left;}
.align-center{text-align:center;}
@media (max-width: 767px){
.align-left,.align-center,.mbr-section-title{text-align:center;}
}
.mbr-bold{font-weight:700;}
.card{background-color:transparent;border:none;}
.mbr-bold{font-weight:700;}
[type="submit"]{-webkit-appearance:none;}
/*! CSS Used from: https://mobirise.com/extensions/educationm4/assets/mobirise/css/mbr-additional.css */
.mbr-section-title{font-style:normal;line-height:1.2;}
.display-2{font-family:'Merriweather', serif;font-size:2.6rem;}
.display-4{font-family:'Open Sans', sans-serif;font-size:0.875rem;}
@media (max-width: 768px){
.display-2{font-size:2.08rem;font-size:calc( 1.56rem + (2.6 - 1.56) * ((100vw - 20rem) / (48 - 20)));line-height:calc( 1.4 * (1.56rem + (2.6 - 1.56) * ((100vw - 20rem) / (48 - 20))));}
.display-4{font-size:0.7rem;font-size:calc( 0.95625rem + (0.875 - 0.95625) * ((100vw - 20rem) / (48 - 20)));line-height:calc( 1.4 * (0.95625rem + (0.875 - 0.95625) * ((100vw - 20rem) / (48 - 20))));}
}
.btn{border-radius:0;font-weight:600;border-width:2px;font-style:normal;letter-spacing:0px;margin:0.4rem 0.8rem;white-space:normal;-webkit-transition:all 0.3s ease-in-out;-moz-transition:all 0.3s ease-in-out;transition:all 0.3s ease-in-out;padding:10px 15px;border-radius:6px;display:inline-flex;align-items:center;justify-content:center;word-break:break-word;}
.btn-lg{font-weight:600;letter-spacing:0px;margin:0.4rem 0.8rem!important;-webkit-transition:all 0.3s ease-in-out;-moz-transition:all 0.3s ease-in-out;transition:all 0.3s ease-in-out;padding:20px 25px;border-radius:6px;}
.btn-primary,.btn-primary:active{background-color:#0087ab!important;border-color:#0087ab!important;color:#ffffff!important;}
.btn-primary:hover,.btn-primary:focus{color:#ffffff!important;background-color:#004b5e!important;border-color:#004b5e!important;}
.btn-primary:disabled{color:#ffffff!important;background-color:#004b5e!important;border-color:#004b5e!important;}
.btn-form{border-radius:0;}
.btn-form:hover{cursor:pointer;}
a,a:hover{color:#0087ab;}
.form-control{background-color:#f5f5f5;box-shadow:none;color:#565656;font-family:'Open Sans', sans-serif;font-size:1.125rem;line-height:1.43;min-height:3.5em;padding:1.07em 0.5em;}
.form-control,.form-control:focus{border:1px solid #e8e8e8;}
.mbr-form .btn{margin:0.4rem 0;}
@media (max-width: 767px){
.btn{font-size:0.9rem!important;}
}
.btn{box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.18);font-weight:600;}
.btn-primary:hover{color:#0087ab!important;background:white!important;border-color:white!important;}
.cid-r1xQinJ4eq{padding-top:0px;padding-bottom:0px;background-image:url("middle-icons/upload.svg");background-size: contain;background-position:left top}
.cid-r1xQinJ4eq .multi-horizontal{flex-grow:1;-webkit-flex-grow:1;max-width:100%;}
.cid-r1xQinJ4eq .card{background-color:#0a1c44;padding:4rem 10rem;}
.cid-r1xQinJ4eq .input-group-btn{display:block;}
.cid-r1xQinJ4eq .line-wrap{display:inline-block;width:100%;}
.cid-r1xQinJ4eq .line{display:inline-block;width:8%;height:4px;background-color:#ffffff;margin-top:0.5rem;margin-bottom:2rem;}
.cid-r1xQinJ4eq input{background:white!important;max-height:2.5rem;padding:0;border-radius:4px!important;font-size:16px;}
.cid-r1xQinJ4eq .btn-primary{border:1px solid #0087ab!important;}
.cid-r1xQinJ4eq .btn-file{margin:0!important;border-top-right-radius:4px;border-bottom-right-radius:4px;height:55px;}
.cid-r1xQinJ4eq .btn-lg{border-radius:4px;margin-right:0!important;margin-left:0!important;}
.cid-r1xQinJ4eq .form-file{padding:0!important;margin:0!important;text-align:right!important;min-height:55px;border:0;}
.cid-r1xQinJ4eq .form-control{background:white;padding:1rem 1rem;max-height:3rem;}
.cid-r1xQinJ4eq .mbr-form input{border-radius:0px;padding-left:15px;}
.cid-r1xQinJ4eq input[type="file"]{display:none;}
.cid-r1xQinJ4eq .form-title{color:#ffffff;}
@media (max-width: 1200px){
.cid-r1xQinJ4eq .card{padding:4rem 4rem;}
}
@media (max-width: 576px){
.cid-r1xQinJ4eq .col-sm-12{margin:1rem;}
.cid-r1xQinJ4eq .card{padding:2rem;}
}
.cid-r1xQinJ4eq .mbr-section-title,.cid-r1xQinJ4eq .line-wrap{color:#ffffff;}
/*! CSS Used fontfaces */
@font-face{font-family:'Merriweather';font-style:italic;font-weight:300;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4l0qyriQwlOrhSvowK_l5-eR7lXff1jvzRPA.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Merriweather';font-style:italic;font-weight:300;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4l0qyriQwlOrhSvowK_l5-eR7lXff8jvzRPA.woff2) format('woff2');unicode-range:U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Merriweather';font-style:italic;font-weight:300;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4l0qyriQwlOrhSvowK_l5-eR7lXff3jvzRPA.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Merriweather';font-style:italic;font-weight:300;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4l0qyriQwlOrhSvowK_l5-eR7lXff2jvzRPA.woff2) format('woff2');unicode-range:U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Merriweather';font-style:italic;font-weight:300;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4l0qyriQwlOrhSvowK_l5-eR7lXff4jvw.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Merriweather';font-style:italic;font-weight:400;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4m0qyriQwlOrhSvowK_l5-eRZDf-LHrw.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Merriweather';font-style:italic;font-weight:400;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4m0qyriQwlOrhSvowK_l5-eRZKf-LHrw.woff2) format('woff2');unicode-range:U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Merriweather';font-style:italic;font-weight:400;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4m0qyriQwlOrhSvowK_l5-eRZBf-LHrw.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Merriweather';font-style:italic;font-weight:400;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4m0qyriQwlOrhSvowK_l5-eRZAf-LHrw.woff2) format('woff2');unicode-range:U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Merriweather';font-style:italic;font-weight:400;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4m0qyriQwlOrhSvowK_l5-eRZOf-I.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Merriweather';font-style:italic;font-weight:700;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf1jvzRPA.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Merriweather';font-style:italic;font-weight:700;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf8jvzRPA.woff2) format('woff2');unicode-range:U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Merriweather';font-style:italic;font-weight:700;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf3jvzRPA.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Merriweather';font-style:italic;font-weight:700;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf2jvzRPA.woff2) format('woff2');unicode-range:U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Merriweather';font-style:italic;font-weight:700;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf4jvw.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Merriweather';font-style:italic;font-weight:900;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4l0qyriQwlOrhSvowK_l5-eR7NWPf1jvzRPA.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Merriweather';font-style:italic;font-weight:900;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4l0qyriQwlOrhSvowK_l5-eR7NWPf8jvzRPA.woff2) format('woff2');unicode-range:U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Merriweather';font-style:italic;font-weight:900;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4l0qyriQwlOrhSvowK_l5-eR7NWPf3jvzRPA.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Merriweather';font-style:italic;font-weight:900;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4l0qyriQwlOrhSvowK_l5-eR7NWPf2jvzRPA.woff2) format('woff2');unicode-range:U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Merriweather';font-style:italic;font-weight:900;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4l0qyriQwlOrhSvowK_l5-eR7NWPf4jvw.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Merriweather';font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4n0qyriQwlOrhSvowK_l521wRZVcf6lvg.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Merriweather';font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4n0qyriQwlOrhSvowK_l521wRZXMf6lvg.woff2) format('woff2');unicode-range:U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Merriweather';font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4n0qyriQwlOrhSvowK_l521wRZV8f6lvg.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Merriweather';font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4n0qyriQwlOrhSvowK_l521wRZVsf6lvg.woff2) format('woff2');unicode-range:U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Merriweather';font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4n0qyriQwlOrhSvowK_l521wRZWMf6.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Merriweather';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-440qyriQwlOrhSvowK_l5-cSZMZ-Y.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Merriweather';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-440qyriQwlOrhSvowK_l5-eCZMZ-Y.woff2) format('woff2');unicode-range:U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Merriweather';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-440qyriQwlOrhSvowK_l5-cyZMZ-Y.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Merriweather';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-440qyriQwlOrhSvowK_l5-ciZMZ-Y.woff2) format('woff2');unicode-range:U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Merriweather';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-440qyriQwlOrhSvowK_l5-fCZM.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Merriweather';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4n0qyriQwlOrhSvowK_l52xwNZVcf6lvg.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Merriweather';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4n0qyriQwlOrhSvowK_l52xwNZXMf6lvg.woff2) format('woff2');unicode-range:U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Merriweather';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4n0qyriQwlOrhSvowK_l52xwNZV8f6lvg.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Merriweather';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4n0qyriQwlOrhSvowK_l52xwNZVsf6lvg.woff2) format('woff2');unicode-range:U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Merriweather';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4n0qyriQwlOrhSvowK_l52xwNZWMf6.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Merriweather';font-style:normal;font-weight:900;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4n0qyriQwlOrhSvowK_l52_wFZVcf6lvg.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Merriweather';font-style:normal;font-weight:900;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4n0qyriQwlOrhSvowK_l52_wFZXMf6lvg.woff2) format('woff2');unicode-range:U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Merriweather';font-style:normal;font-weight:900;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4n0qyriQwlOrhSvowK_l52_wFZV8f6lvg.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Merriweather';font-style:normal;font-weight:900;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4n0qyriQwlOrhSvowK_l52_wFZVsf6lvg.woff2) format('woff2');unicode-range:U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Merriweather';font-style:normal;font-weight:900;src:url(https://fonts.gstatic.com/s/merriweather/v30/u-4n0qyriQwlOrhSvowK_l52_wFZWMf6.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:300;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtE6F15M.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:300;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWvU6F15M.woff2) format('woff2');unicode-range:U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:300;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtU6F15M.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:300;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWuk6F15M.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:300;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWu06F15M.woff2) format('woff2');unicode-range:U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:300;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtk6F15M.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:300;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWt06F15M.woff2) format('woff2');unicode-range:U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:300;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWuU6F.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtE6F15M.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWvU6F15M.woff2) format('woff2');unicode-range:U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtU6F15M.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWuk6F15M.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWu06F15M.woff2) format('woff2');unicode-range:U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtk6F15M.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWt06F15M.woff2) format('woff2');unicode-range:U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWuU6F.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:600;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtE6F15M.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:600;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWvU6F15M.woff2) format('woff2');unicode-range:U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:600;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtU6F15M.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:600;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWuk6F15M.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:600;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWu06F15M.woff2) format('woff2');unicode-range:U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:600;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtk6F15M.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:600;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWt06F15M.woff2) format('woff2');unicode-range:U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:600;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWuU6F.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:700;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtE6F15M.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:700;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWvU6F15M.woff2) format('woff2');unicode-range:U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:700;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtU6F15M.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:700;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWuk6F15M.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:700;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWu06F15M.woff2) format('woff2');unicode-range:U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:700;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtk6F15M.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:700;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWt06F15M.woff2) format('woff2');unicode-range:U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:700;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWuU6F.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:800;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtE6F15M.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:800;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWvU6F15M.woff2) format('woff2');unicode-range:U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:800;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtU6F15M.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:800;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWuk6F15M.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:800;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWu06F15M.woff2) format('woff2');unicode-range:U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:800;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtk6F15M.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:800;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWt06F15M.woff2) format('woff2');unicode-range:U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:800;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWuU6F.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:300;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSKmu1aB.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:300;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSumu1aB.woff2) format('woff2');unicode-range:U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:300;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSOmu1aB.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:300;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSymu1aB.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:300;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS2mu1aB.woff2) format('woff2');unicode-range:U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:300;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSCmu1aB.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:300;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSGmu1aB.woff2) format('woff2');unicode-range:U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:300;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS-muw.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSKmu1aB.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSumu1aB.woff2) format('woff2');unicode-range:U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSOmu1aB.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSymu1aB.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS2mu1aB.woff2) format('woff2');unicode-range:U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSCmu1aB.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSGmu1aB.woff2) format('woff2');unicode-range:U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS-muw.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSKmu1aB.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSumu1aB.woff2) format('woff2');unicode-range:U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSOmu1aB.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSymu1aB.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS2mu1aB.woff2) format('woff2');unicode-range:U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSCmu1aB.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSGmu1aB.woff2) format('woff2');unicode-range:U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS-muw.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSKmu1aB.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSumu1aB.woff2) format('woff2');unicode-range:U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSOmu1aB.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSymu1aB.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS2mu1aB.woff2) format('woff2');unicode-range:U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSCmu1aB.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSGmu1aB.woff2) format('woff2');unicode-range:U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS-muw.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:800;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSKmu1aB.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:800;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSumu1aB.woff2) format('woff2');unicode-range:U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:800;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSOmu1aB.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:800;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSymu1aB.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:800;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS2mu1aB.woff2) format('woff2');unicode-range:U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:800;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSCmu1aB.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:800;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSGmu1aB.woff2) format('woff2');unicode-range:U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:800;font-stretch:100%;src:url(https://fonts.gstatic.com/s/opensans/v35/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS-muw.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
</style><section class="form1 cid-r1xQinJ4eq" id="form1-z">

    

    
    <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="col-lg-6 col-md-5 col-sm-12 align-center">
			
			<label for="file-form1-z" style="width:100%;height: 100%;cursor:pointer;"></label>
            </div>




            <div class="col-lg-6 col-md-7 col-sm-12 align-left card" data-form-type="formoid">
                <h2 class="mbr-section-title pb-2 mbr-bold mbr-fonts-style align-left display-2">Complecteaza Formularul</h2>
                <div class="line-wrap">
                    <div class="line"></div>
                </div>
                <div data-form-alert="" hidden="">Thanks for filling out the form!</div>
                <form class="mbr-form" action="edit_post.php" method="post" data-form-title="Mobirise Form" enctype="multipart/form-data">
                    <div class="row row-sm-offset">
                        <div class="col-md-12 multi-horizontal" data-for="name">
                            <div class="form-group">
                                <h4 class="mbr-fonts-style pb-2 mbr-bold form-title display-4"><span style="font-weight: normal;">
                                        Selecteaza marca</span></h4>
                                <select class="form-control" name="make" data-form-field="Name" required="" id="name-form1-z">
								<option value="">Selecteaza marca</option>


                    <?php
                        require('db_config.php');
                        $sql = "SELECT *, posts.id as posts_id, categories.id as categories_id FROM posts INNER JOIN categories ON categories.id = posts.category_id INNER JOIN makes ON makes.id = categories.make_id WHERE posts.id = " . $_GET["id"]; 
                        $result = $mysqli->query($sql);
                        while($row = $result->fetch_assoc()){
							$dependent = $row['id'];
                            echo "<option " . ($row['posts_id'] === $_GET["id"] ? "selected" : "") . " value='".$row['id']."'>".$row['make_name']."</option>";
                        }
                    ?>
								</select>
                            </div>
                        </div>
                        <div class="col-md-12 multi-horizontal" data-for="category">
                            <div class="form-group">
                                <h4 class="mbr-fonts-style pb-2 mbr-bold form-title display-4"><span style="font-weight: normal;">
                                        Selecteaza modelul</span></h4>
                                <select class="form-control" name="category" data-form-field="category" required="" id="name-form1-z">
									<option value="">Selecteaza modelul</option>
									<?php
				
                        $sql = "SELECT *, categories.id as categories_id FROM categories INNER JOIN makes ON makes.id = categories.make_id WHERE categories.make_id = " . $dependent; 
                        $result = $mysqli->query($sql);
                        while($row = $result->fetch_assoc()){
                            echo "<option value='".$row['categories_id']."'>".$row['model_name']."</option>";
                        }
                    ?>
								</select>
                            </div>
                        </div>
                        
                        <div class="col-md-12 multi-horizontal" data-for="file">
                            <div class="form-group">
                                <h4 class="mbr-fonts-style pb-1 mbr-bold form-title display-4"><span style="font-weight: normal;">Selecteaza imaginea</span></h4>

                                <div class="form-control form-file" for="file-form1-z">

                                    <label for="file-form1-z" class="input-group-btn"><a class="btn btn-form btn-file btn-primary display-4">Alege una</a></label>
                                </div>
                                <input type="file" class="form-control" name="file" placeholder="File" data-form-field="File" id="file-form1-z">
                            </div>
                        </div>
<div class="col-md-12 multi-horizontal" data-for="color">
                            <div class="form-group">
                                <h4 class="mbr-fonts-style pb-2 mbr-bold form-title display-4"><span style="font-weight: normal;">
                                        Selecteaza culoarea masinei</span></h4>
                                <select class="form-control" name="color" data-form-field="color" required="" id="name-form1-z">
									<option>Selecteaza culoarea masinei</option>
		<option value="red">Red</option>
		<option value="blue">Blue</option>
		<option value="green">Green</option>
		<option value="black">Black</option>
		<option value="white">White</option>
								</select>
                            </div>
                        </div>
                    </div>
                    <span class="input-group-btn"><button href="" type="submit" name="submit" class="btn btn-form btn-lg btn-primary display-4">Incarca
                        </button></span>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="post-user">
				<div class="post-short-title">
					<a class="btn-same-posts" style="color: red;" href="delete.php?id=<?php echo $_GET["id"]; ?>">
						Delete
					</a>
				</div>
			</div>

<script>
$( "select[name='make']" ).change(function () {
    var stateID = $(this).val();


    if(stateID) {


        $.ajax({
            url: "ajaxpro.php",
            dataType: 'Json',
            data: {'id':stateID},
            success: function(data) {
                $('select[name="category"]').empty();
                $.each(data, function(key, value) {
                    $('select[name="category"]').append('<option value="'+ key +'">'+ value +'</option>');
                });
            }
        });


    }else{
        $('select[name="category"]').empty();
    }
});
</script>
<?php
include "footer.php";
?>

</body>
</html>