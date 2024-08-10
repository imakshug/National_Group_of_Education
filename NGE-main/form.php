





<style>
html {
    overflow-x: hidden;
}

body {
    font-family: 'Poppins', sans-serif;
}

:root {
    --main-color: #0d5339;
    --second-color: #01a0c6;
    --roundness: 20px;
    --bs-dropdown-link-active-bg: var(--second-color);
    --bg-img: url(image/pawan.jpg);
    --bg-img-deg: 133deg;
}

.text-black {
    width: 90%;
    margin: auto;
    text-align: center;
    font-size: 17px;
}

.para {
    text-align: justify;
    width: 100%;
    margin: auto;
}

.center,
li::before {
    color: #00a3c7;
}

.documents .col-lg-3,
.documents .col-lg-4,
.documents .col-lg-6 {
    margin-bottom: var(--bs-gutter-x);
}

.main-text {
    color: var(--main-color) !important;
    margin-bottom: 2rem;
}

.second-text {
    color: var(--second-color) !important;
}

.main-bg {
    background-color: var(--main-color) !important;
}

.second-bg {
    background-color: var(--second-color) !important;
}

.overview {
    margin: 0 0;
}

.not-rounded {
    border-radius: 0;
}

.bg-img,
.head {
    margin: 6.5em 0 0 0;
}

.icons {
    display: flex;
}

.icons a {
    margin-left: 1rem;
}

.icons i {
    color: #fff;
    font-size: 1.2rem;
}

.button-container {
    display: flex;
    gap: 30px;
    align-items: center;
    justify-content: center;
}

.button {
    padding: 10px 20px;
    background-color: #c7d4e2;
    color: #111010;
    border-radius: 5px;
    text-decoration: none;
    font-size: 16px;
}

.rounded {
    border-radius: var(--roundness) !important;
}

.rounded-top {
    border-radius: var(--roundness) var(--roundness) 0 0 !important;
}

.rounded-bottom {
    border-radius: 0 0 var(--roundness) var(--roundness) !important;
}

.rounded-left {
    border-radius: var(--roundness) 0 var(--roundness) 0 !important;
}

.rounded-right {
    border-radius: 0 var(--roundness) 0 var(--roundness) !important;
}

@media screen and (max-width: 600px) {
    .button-container {
        flex-direction: column;
        justify-content: center;
        gap: 10px;
    }
    .start {
        padding-left: 35px;
    }
    .navbar-brand {
        padding-left: 28px;
    }
}

.icon-wrapper {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: stretch;
}

.icon {
    flex: 1;
    max-width: 25%;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 10px;
    text-align: center;
}

.icon i {
    font-size: 50px;
    margin-bottom: 20px;
}

.icon h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.icon p {
    font-size: 16px;
    line-height: 1.5;
}

.text-white {
    color: black;
    font-weight: 400;
}

.footer-section {
    background: #343434;
    position: relative;
}

.footer-cta {
    border-bottom: 1px solid #373636;
}

.single-cta i {
    color: #ff5e14;
    font-size: 30px;
    float: left;
    margin-top: 8px;
}

.cta-text {
    padding-left: 15px;
    display: inline-block;
}

.cta-text h4 {
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 2px;
}

.cta-text span {
    color: #757575;
    font-size: 15px;
}

.footer-content {
    position: relative;
    z-index: 2;
}

.footer-pattern img {
    position: absolute;
    top: 0;
    left: 0;
    height: 330px;
    background-size: cover;
    background-position: 100% 100%;
}

.footer-logo {
    margin-bottom: 30px;
}

.footer-logo img {
    max-width: 200px;
}

.footer-text p {
    margin-bottom: 14px;
    font-size: 14px;
    color: #7e7e7e;
    line-height: 28px;
}

.footer-social-icon span {
    color: #fff;
    display: block;
    font-size: 1rem;
    font-weight: 700;
    font-family: 'Poppins', sans-serif;
    margin-bottom: 20px;
}

.footer-social-icon a {
    color: #fff;
    font-size: 16px;
    margin-right: 15px;
}

.footer-social-icon i {
    font-size: 4rem;
    text-align: center;
    line-height: 38px;
    border-radius: 50%;
    text-align: center;
}

.facebook-bg {
    background: #3B5998;
}

.twitter-bg {
    background: #55ACEE;
}

.google-bg {
    background: #DD4B39;
}

.footer-widget-heading h3 {
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 40px;
    position: relative;
}

.footer-widget-heading h3::before {
    content: "";
    position: absolute;
    left: 0;
    bottom: -15px;
    height: 2px;
    width: 70px;
    background: var(--second-color);
}

.footer-widget ul li {
    list-style-type: none;
    width: 100%;
    margin-bottom: 1rem;
}

.footer-widget ul li a:hover {
    color: var(--second-color);
}

.footer-widget ul li a {
    color: #fff;
    text-transform: capitalize;
    text-decoration: none;
}

.subscribe-form {
    position: relative;
    overflow: hidden;
}

.subscribe-form input {
    width: 100%;
    padding: 12px 28px;
    border: 1px solid #2E2E2E;
    color: #111;
}

.subscribe-form button {
    position: absolute;
    right: 0;
    background: var(--second-color);
    padding: 13px 20px;
    border: 1px solid var(--second-color);
    top: 0;
}

.subscribe-form button i {
    color: #fff;
    font-size: 22px;
    transform: rotate(-6deg);
}

.copyright-area {
    background: #202020;
    padding: 25px 0;
}

.copyright-text p {
    margin: 0;
    font-size: 14px;
    color: #878787;
}

.copyright-text p a {
    color: #ff5e14;
}

.footer-menu li {
    display: inline-block;
    margin-left: 12px;
}

.footer-menu li:hover a {
    color: var(--second-color);
}

.footer-menu li a {
    font-size: 18px;
    color: #878787;
    text-decoration: none;
    width: auto;
}

.nav-link {
    font-size: 1em;
    font-weight: 500;
}

.dropdown-toggle::after {
    border-top: .3em solid var(--main-color);
    border-right: .3em solid transparent;
    border-bottom: 0;
    border-left: .3em solid transparent;
}

.dropdown-item.active,
.dropdown-item:active {
    background-color: var(--second-color);
}

/* team start here  */

#team i {
    font-size: 26px;
    color: #555;
}

#team p {
    font-weight: 500;
}

#team .card {
    transition: all 0.3s ease-in;
    -webkit-transition: all 0.3s ease-in;
    -moz-transition: all 0.3s ease-in;
}

#team .card:hover color: #fff;
}

#team .card:hover h3,
#team .card:hover i {
    color: #fff;
}

a {
    text-decoration: none;
}

/* team end here  */

/* testmonial start here  */

::selection {
    background: rgba(23, 162, 184, 0.3);
}

.wrapper {
    max-width: 1200px;
    margin: auto;
    padding: 0 20px;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    padding-bottom: 10px;
}

.wrapper .box {
    background: #fff;
    width: calc(33% - 10px);
    padding: 25px;
    border-radius: 3px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15);
}

.wrapper .box i.quote {
    font-size: 20px;
    color: #17a2b8;
}

.wrapper .box .content {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding-top: 10px;
}

.box .info .name {
    font-weight: 600;
    font-size: 17px;
}

.box .info .job {
    font-size: 16px;
    font-weight: 500;
    color: #17a2b8;
}

.box .info .stars {
    margin-top: 2px;
}

.box .info .stars i {
    color: #17a2b8;
}

.box .content .image {
    height: 75px;
    width: 75px;
    padding: 3px;
    background: #17a2b8;
    border-radius: 50%;
}

.content .image img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    border-radius: 50%;
    border: 2px solid #fff;
}

.box:hover .content .image img {
    border-color: #fff;
}

@media (max-width: 1045px) {
    .wrapper .box {
        width: calc(50% - 10px);
        margin: 10px 0;
    }
}

@media (max-width: 702px) {
    .wrapper .box {
        width: 100%;
    }
}

/* testmonial end here  */

/* about start here  */

.image-container {
    position: relative;
    max-width: 70%;
    margin: 0 auto;
    top: 10px;
}

.image-container img {
    width: 100%;
    height: auto;
    display: block;
}

.image-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #272525;
    padding: 1rem;
}

.image-text h2 {
    font-size: 2rem;
    margin-bottom: 0.5rem;
}

@media screen and (max-width: 768px) {
    .image-text {
        position: absolute;
        left: 50%;
        top: 10%;
        transform: translate(-50%, -50%);
        text-align: center;
        width: 50%;
    }
    .image-text h2 {
        font-size: 8px;
    }
}

/* about end here  */

/* faq section start here  */

.containerwidth {
    width: 70%;
    margin: auto;
}

.wrapper {
    background-color: #ffffff;
    padding: 10px 20px;
    margin-bottom: 20px;
    border-radius: 5px;
    -webkit-box-shadow: 0 15px 25px rgba(0, 0, 50, 0.2);
    box-shadow: 0 15px 25px rgba(0, 0, 50, 0.2);
}

.toggle,
.content {
    font-family: "Poppins", sans-serif;
}

.toggle {
    width: 100%;
    background-color: transparent;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    font-size: 16px;
    color: #111130;
    font-weight: 600;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 10px 0;
}

.content {
    position: relative;
    font-size: 14px;
    text-align: justify;
    line-height: 30px;
    height: 0;
    overflow: hidden;
    -webkit-transition: all 1s;
    -o-transition: all 1s;
    transition: all 1s;
}

/* faq section end here  */

.price a {
    text-decoration: none;
    padding: 10px 16px;
    background-color: rgb(77, 178, 218);
    color: #fff;
    font-size: 20px;
    border-radius: 20px 15px;
}

.price a:hover {
    background-color: #1f537a;
}

@media screen and (max-width: 600px) {
    .price {
        justify-content: center;
        gap: 10%;
        padding-top: 10px;
    }
    .price span {
        font-size: 8px;
    }
    .price p {
        padding-left: 10%;
    }
    .price a {
        display: flex;
        justify-content: center;
        font-size: 20px;
        padding-right: 20px;
    }
}

/* privacy section start here  */

.privacy {
    width: 70%;
    margin: auto;
    padding-top: 20px;
}

.privacy h2 {
    background-color: #878787;
}

/* privacy section end here  */

/* home section start here  */

.bg-img {
    /* The image used */
    background-image: linear-gradient(var(--bg-img-deg), rgba(255, 255, 255, 1) 25%, rgba(249, 249, 249, 0) 90%), var(--bg-img);
    background-blend-mode: normal;
    min-height: 495px;
    width: 100%;
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}

/* Add styles to the form container */

.container1 {
    position: absolute;
    right: 0;
    margin: 20px;
    max-width: 330px;
    padding: 16px;
    background-color: white;
    height: 100%;
}

/* Full-width input fields */

.home-search,
    {
    width: 30%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}

.home-search:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for the submit button */

.btn2 {
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn2:hover {
    opacity: 1;
}

.icon-wrapper {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: stretch;
}

.icon {
    flex: 1;
    max-width: 25%;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 10px;
    text-align: center;
}

.icon i {
    font-size: 50px;
    margin-bottom: 20px;
}

.icon h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.icon p {
    font-size: 16px;
    line-height: 1.5;
}

.text-white {
    color: black;
    font-weight: 400;
}

.footer-cta {
    border-bottom: 1px solid #373636;
}

.single-cta i {
    color: #ff5e14;
    font-size: 30px;
    float: left;
    margin-top: 8px;
}

.cta-text {
    padding-left: 15px;
    display: inline-block;
}

.cta-text h4 {
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 2px;
}

.cta-text span {
    color: #757575;
    font-size: 15px;
}

/* benfit start here  */

.section1 {
    height: 100%;
    width: 100%;
    display: grid;
    place-items: center;
}

.row1 {
    display: flex;
    flex-wrap: wrap;
}

.column1 {
    width: 100%;
    padding: 0 1em 1em 1em;
    text-align: center;
}

.card1 {
    width: 100%;
    height: 100%;
    padding: 2em 1.5em;
    background: linear-gradient(#ffffff 50%, var(--second-color) 50%);
    background-size: 100% 200%;
    background-position: 0 2.5%;
    border-radius: 5px;
    box-shadow: 0 0 35px rgba(0, 0, 0, 0.12);
    cursor: pointer;
    transition: 0.5s;
}

h3 {
    font-size: 20px;
    font-weight: 600;
    color: #1f194c;
    margin: 1em 0;
}

p {
    color: #575a7b;
    font-size: 15px;
    line-height: 1.6;
    letter-spacing: 0.03em;
}

.icon-wrapper1 {
    background-color: var(--second-color);
    position: relative;
    margin: auto;
    font-size: 30px;
    height: 2.5em;
    width: 2.5em;
    color: #ffffff;
    border-radius: 50%;
    display: grid;
    place-items: center;
    transition: 0.5s;
}

.page-icon {
    width: 75px;
    height: 75px;
    transform: scale(1.03);
}

.card1:hover {
    background-position: 0 100%;
}

.card1:hover .icon-wrapper1 {
    background-color: #ffffff;
    color: var(--second-color);
}

.card1:hover h3 {
    color: #ffffff;
}

.card1:hover p {
    color: #f0f0f0;
}

.large-heading {
    font-size: 3em;
}

.mid-heading {
    font-size: 2em;
}

.small-heading {
    font-size: 1.5em;
    color: var(--second-color);
}

.up-dots {
    position: relative;
    margin: auto;
    width: 320px;
}

}

}

.text {
    font-size: 1em;
}

.half-vh {
    height: 45vh;
}

.full-vh {
    height: 90vh;
}

.seventy-vh {
    height: 0;
}

.h-100 {
    height: 100%;
}

.half-width {
    width: 50%;
}

.flex {
    display: flex;
    justify-content: flex-start;
    gap: 10px
}

.flex-col {
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 10px
}

.flex-col-space-between {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    gap: 10px
}

.form-logo {
    height: auto;
    width: 200px;
}

.card-bg {
    background: radial-gradient(circle, var(--second-color) 68%, #fff0 17%);
    background-repeat: no-repeat;
    background-position-y: -260px;
    background-size: 100%;
}

.justify-center {
    justify-content: center;
}

.grid-center {
    display: grid;
    place-items: center;
}

.glass {
    background: #0009;
    backdrop-filter: blur(5px);
}

@media screen and (min-width: 768px) {
    .section1 {
        padding: 0 2em;
        padding-bottom: 10%;
    }
    .column1 {
        flex: 0 50%;
        max-width: 50%;
    }
}

.margin-for-topbar {
    margin-top: 2rem;
}

@media screen and (min-width: 992px) {
    .section1 {
        padding: 1em 3em;
    }
    .column1 {
        flex: 0 0 33.33%;
        max-width: 33.33%;
    }
}

@media screen and (min-width:350px) {
    .icon-wrapper {
        margin-top: 20px;
    }
}

/* benfits end here  */

/* registration form start here  */

/* registration form end here */

.dropdown:hover {
    background: #e9ecef;
}

.dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0;
    /* remove the gap so it doesn't close */
}

/*background-image:
    linear-gradient(133deg, rgba(255,255,255,1) 25%, rgba(249,249,249,0) 90%),
    url('../image/bgmain.jpg'); */

.main-section {
    background-image: linear-gradient(24deg, rgba(255, 255, 255, 1) 25%, rgba(249, 249, 249, 0) 90%), url('../image/bgmain.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: repeat;
    background-blend-mode: normal;
    min-height: 90vh;
    height: auto;
}

@media (width < 820px) {
    .main-section {
        background-image: linear-gradient(0deg, rgba(255, 255, 255, 1) 43%, rgba(249, 249, 249, 0) 100%), url(../image/bgmain.jpg);
        background-size: cover;
        background-position: 810px;
        background-repeat: repeat;
        background-blend-mode: normal;
        min-height: 90vh;
        height: auto;
    }
}

.btm-border {
    border-bottom: 1px solid #333;
}

.custom-card {
    border-radius: 1rem;
    height: 300px;
    background: white;
    outline: 1px solid #999;
    position: relative;
    transition: all .3s ease;
}

.custom-card:hover {
    box-shadow: 0 0 10px #333;
}

.tab-content .tab-pane .container .row .col h1:after {
    display: inline-block;
    width: 50px;
    height: 50px;
    content: '';
    background: url("../image/tiny.webp");
    transform: scale(.6) translate(-75%, 100%);
}

.nav-tabs {
    border: none;
}

.nav-tabs .nav-link {
    border-radius: 0;
}

/*.custom-card:before{
content:'';
position:absolute;
width:100%;
height:100%;
background:#01a0c6;
transform-origin:center;
transform:rotate(-5deg);
border-radius:1rem;
padding:1rem .5rem;
outline:1px solid #999;
z-index:-1;
}*/

.sell-card {
    width: 100%;
    height: 700px;
    position: relative;
}

.sell-card .detail {
    width: 100%;
    height: 70%;
    background: #eee;
    box-shadow: 0px -1px 2px #999, 0px -2px 2px #999, 0px -3px 2px #999, 0px -4px 2px #999, 0px -5px 2px #999;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    text-align: left;
    padding: 1rem;
}

.price p {
    color: #fff;
    font-size: 1.2rem;
}

.sell-card .price {
    background: #01a0c6;
    width: 100%;
    height: 22%;
    color: #fff;
    padding-top: 1rem;
    border-radius: 1rem 1rem 0 0;
    transform-origin: bottom center;
    transform: scale(.9);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

@media( width < 992px) {
    .sell-card {
        width: 100%;
        height: max-content;
        position: relative;
    }
    .sell-card .detail {
        width: 100%;
        height: min-content;
        background: #eee;
        box-shadow: 0px -1px 2px #999, 0px -2px 2px #999, 0px -3px 2px #999, 0px -4px 2px #999, 0px -5px 2px #999;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        text-align: left;
        padding: 1rem;
    }
}

.nav-tabs .nav-item.show .nav-link,
.nav-tabs .nav-link.active {
    background: #01a0c6;
    color: #fff;
}

.nav-tabs .nav-item.show .nav-link,
.nav-tabs .nav-link {
    color: var(--second-color);
}

.justify-content-space-between {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}

.custom-card p {
    padding: 0 15%;
}

.small-img {
    width: 50px;
    height: 50px;
}

.white-img {
    filter: brightness(40) grayscale(1) contrast(2);
}

.swiper-wrapper {
    height: 35rem;
    padding-top: 4rem;
}

.swiper-button-next {
    margin-top: 0px;
    position: absolute;
    top: 90%;
    right: 45%;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: white;
    color: var(--second-color);
    transform: translateY(-50%);
}

.swiper-button-prev {
    position: absolute;
    top: 90%;
    left: 45%;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: white;
    color: var(--second-color);
    transform: translateY(-50%);
    margin-top: 0px;
}

.swiper-button-next:after {
    content: "\2192";
    margin-top: -5px;
}

.swiper-button-prev:after {
    content: "\2192";
    margin-top: 5px;
    transform: rotate(180deg);
}

.swiper-button-next,
.swiper-button-prev {
    transition: all .3 ease;
    border: 1px solid var(--second-color);
}

.swiper-button-next:hover,
.swiper-button-prev:hover {
    background: var(--second-color);
    color: white;
}

.detail ul {
    height: auto;
    overflow: clip;
}

.swiper-slide-next .card {
    transition: all 1s ease;
    transform: scale(1.1);
    max-height: 435px;
}

.process .col-lg-6:nth-child(2) {
    padding-left: 2rem;
    border-left: 3px solid var(--second-color);
}

@media (width>992px) {
    .hide-on-pc {
        display: none;
    }
}

@media (width < 992px) {
    .hide-on-mobile {
        display: none;
    }
    .margin-for-topbar {
        margin-top: 0rem;
    }
    .swiper-button-next {
        right: 10%;
    }
    .swiper-button-prev {
        left: 10%;
    }
    .process .col-lg-6:nth-child(2) {
        padding-left: 0rem;
        margin-top: 1rem;
        border-top: 3px solid var(--second-color);
        border-left: 0px solid var(--second-color);
    }
}

.line-clamp {
    display: -webkit-box;
    -webkit-line-clamp: 5;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Define the shape and color of the hamburger lines */

.navbar-toggler span {
    display: block;
    background-color: #4f4f4f;
    height: 3px;
    width: 25px;
    margin-top: 5px;
    margin-bottom: 5px;
    position: relative;
    left: 0;
    opacity: 1;
    transition: all 0.35s ease-out;
    transform-origin: center left;
}

/* top line needs a little padding */

.navbar-toggler span:nth-child(1) {
    margin-top: 0.3em;
}

/**
* Animate collapse into X.
*/

/* top line rotates 45 degrees clockwise and moves up and in a bit to close the center of the X in the center of the button */

.navbar-toggler:not(.collapsed) span:nth-child(1) {
    transform: translate(15%, -33%) rotate(45deg);
}

/* center line goes transparent */

.navbar-toggler:not(.collapsed) span:nth-child(2) {
    opacity: 0;
}

/* bottom line rotates 45 degrees counter clockwise, in, and down a bit to close the center of the X in the center of the button  */

.navbar-toggler:not(.collapsed) span:nth-child(3) {
    transform: translate(15%, 33%) rotate(-45deg);
}

/**
* Animate collapse open into hamburger menu
*/

/* top line moves back to initial position and rotates back to 0 degrees */

.navbar-toggler span:nth-child(1) {
    transform: translate(0%, 0%) rotate(0deg);
}

/* middle line goes back to regular color and opacity */

.navbar-toggler span:nth-child(2) {
    opacity: 1;
}

/* bottom line goes back to initial position and rotates back to 0 degrees */

.navbar-toggler span:nth-child(3) {
    transform: translate(0%, 0%) rotate(0deg);
}
</style><style>>#captcha {}

#captcha .preview {
color: #555;
width: 100%;
text-align: center;
height: 40px;
line-height: 40px;
letter-spacing: 8px;
border: 1px dashed #888;
border-radius: 0.5em;
margin-bottom: 1.6em;
}

.captcha_refersh {
transition: .4s;
}

.captcha_refersh:hover {
transition: .4s;
transform: scale(0.90);
}

#main-form .form-control,
.gray-input {
background: #D9D9D9;
}

sup {
color: red;
}

#main-form {
width: 98%;
}

.form {
position: relative;
}

.lady {
height: 100%;
position: absolute;
top: 0%;
right: 0%;
transform: translate(125px, 0);
}


</style>









<div class="form">
<form action="process.php" METHOD="POST" id="main-form" class="flex-col-space-between  card rounded  h-100">
    <div class="">
        <h4 class="p-3 text-center second-bg mid-heading text-white rounded-top">Send Us Your Details</h4>
    </div>
    <div class="p-3">
        <input type="hidden" id="recaptcha" name="recaptcha_response">
        <input type="hidden" name="page" value="/" required>

        <div class="row">
            <div class="col-lg-6">
                <label>First Name<sup>*</sup></label>
                <input type="text" placeholder="" class="form-control rounded" name="fname" required><br>
            </div>
            <div class="col-lg-6">
                <label>Last Name<sup>*</sup></label>
                <input type="text" placeholder="" class="form-control rounded" name="lname" required><br>
            </div>
        </div>


        <div class="row">

            <div class="col-lg-12">
                <label>Email<sup>*</sup></label>
                <input type="Email" placeholder="" class="form-control rounded" name="email" required><br>
            </div>
            <div class="col-lg-12">
                <label>Contact No<sup>*</sup></label>
                <input type="tel" placeholder="" class="form-control rounded" name="phone" required><br>
            </div>
        </div>
        <div class="pb-3 grid-center">
            <button onclick="onClick" type="submit" id="submitbutton"
                class=" btn second-bg text-white rounded btn-lg">Submit</button>
        </div>
        <br>
        <br>
    </div>
</form>


</div>