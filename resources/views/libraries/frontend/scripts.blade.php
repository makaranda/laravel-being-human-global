<script type="application/javascript" src="{{ url('public/assets/frontend/js/jquery.min.js') }}"></script>
<script type="application/javascript" src="{{ url('public/assets/frontend/js/jquery_3.6.1_jquery.min.js') }}"></script>
<script type="application/javascript" src="{{ url('public/assets/frontend/js/bootstrap.bundle.min.js') }}"></script>
<!--<script src="--><!--/public/assets/frontend/js/all.min.js"></script>-->
<script type="application/javascript" src="{{ url('public/assets/frontend/js/swiper-bundle.min.js') }}"></script>
<script type="application/javascript" src="{{ url('public/assets/frontend/js/aos.js') }}"></script>
<script type="application/javascript" src="{{ url('public/assets/frontend/js/fslightbox.js') }}"></script>
<script type="application/javascript" src="{{ url('public/assets/frontend/js/owl.carousel.min.js') }}"></script>
<script type="application/javascript" src="{{ url('public/assets/frontend/js/wow.min.js') }}"></script>
<script type="application/javascript" src="{{ url('public/assets/frontend/js/purecounter_vanilla.js') }}"></script>

<!-- Jquery, Popper, Bootstrap -->
<script src="{{ url('public/assets/frontend/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ url('public/assets/frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ url('public/assets/frontend/js/popper.min.js') }}"></script>
<script src="{{ url('public/assets/frontend/js/bootstrap.min.js') }}"></script>

<!-- Slick-slider , Owl-Carousel ,slick-nav -->
<script src="{{ url('public/assets/frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ url('public/assets/frontend/js/slick.min.js') }}"></script>
<script src="{{ url('public/assets/frontend/js/jquery.slicknav.min.js') }}"></script>

<!-- wow , counter , waypoint, Nice-select -->
<script src="{{ url('public/assets/frontend/js/wow.min.js') }}"></script>
<script src="{{ url('public/assets/frontend/js/jquery.magnific-popup.js') }}"></script>
<script src="{{ url('public/assets/frontend/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ url('public/assets/frontend/js/jquery.counterup.min.js') }}"></script>
<script src="{{ url('public/assets/frontend/js/waypoints.min.js') }}"></script>
{{--
<script src="{{ url('public/assets/frontend/js/price_rangs.js') }}"></script> --}}


<!-- jQuery plugins -->
<script src="{{ asset('public/assets/frontend/js/jquery.js') }}"></script>
<script src="{{ asset('public/assets/frontend/js/parallax.js') }}"></script>
<script src="{{ asset('public/assets/frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('public/assets/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/assets/frontend/js/owl.js') }}"></script>
<script src="{{ asset('public/assets/frontend/js/wow.js') }}"></script>
<script src="{{ asset('public/assets/frontend/js/validation.js') }}"></script>
<script src="{{ asset('public/assets/frontend/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('public/assets/frontend/js/appear.js') }}"></script>
<script src="{{ asset('public/assets/frontend/js/scrollbar.js') }}"></script>

<!-- main-js -->
<script src="{{ asset('public/assets/frontend/js/script.js') }}"></script>


<!-- Bootstrap 5.3 JS (Include before closing </body>) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

{{--
<script src="{{ url('public/assets/frontend/js/main.js') }}"></script> --}}



<!-- Success Modal -->
<div class="modal fade" id="successModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <img loading="lazy" src="public/assets/images/logo/logo.png" class="mx-auto" alt="logo">
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="text-center col-12 my-4">
                        <h2 class="success-msg"><i class="fa-regular fa-circle-check"></i></h2>
                        <p class="success-msg fw-bolder" id="successMsg"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="course-data-bottom item-flex-center width-100">
                    <div class="btn-1 w-100">
                        <a data-bs-dismiss="modal" class="float-end" aria-label="Close"
                            href="javascript:void(0)">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Warning Modal -->
<div class="modal fade" id="warningModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="warningModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <img loading="lazy" src="public/assets/images/logo/logo.png" class="mx-auto" alt="logo">
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="text-center col-12 my-4">
                        <h2 class="warning-msg"><i class="fa-solid fa-triangle-exclamation"></i></h2>
                        <p class="warning-msg fw-bolder" id="warningMsg"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="course-data-bottom item-flex-center width-100">
                    <div class="btn-1 w-100">
                        <a data-bs-dismiss="modal" class="float-end" aria-label="Close"
                            href="javascript:void(0)">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Error Modal -->
<div class="modal fade" id="errorModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <img loading="lazy" src="public/assets/images/logo/logo.png" class="mx-auto" alt="logo">
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="text-center col-12 my-4">
                        <h2 class="error-msg"><i class="fa-regular fa-circle-xmark"></i></h2>
                        <p class="error-msg fw-bolder" id="errorMsg"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="course-data-bottom item-flex-center width-100">
                    <div class="btn-1 w-100">
                        <a data-bs-dismiss="modal" class="float-end" aria-label="Close"
                            href="javascript:void(0)">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Error Modal -->
<div class="modal fade" id="waitingModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="waitingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="waitingLoader">
            <div class="waitingLoader-container">
                <div class="waitingLoader-logo">
                    <img loading="lazy" src="public/assets/images/logo/preloader.png" alt="Preloader">
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        let currentStep = 1;
        const totalSteps = 2;

        function showStep(step) {
            $(".step").addClass("d-none");
            $(".step-" + step).removeClass("d-none");
            let percent = (step / totalSteps) * 100;
            $(".progress-bar")
                .css("width", percent + "%")
                .text("Step " + step + " of " + totalSteps);
        }

        $(".next-btn").click(function () {
            if (currentStep < totalSteps) {
                currentStep++;
                showStep(currentStep);
            }
        });

        $(".prev-btn").click(function () {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        });

        $("#multiStepForm").on("submit", function (e) {
            e.preventDefault();
            alert("Form submitted successfully!");
        });

        showStep(currentStep);
    });
</script>
<script>
    console.log('jQuery:', $.fn.jquery);
    console.log('Validate:', typeof $.fn.validate);
    $(document).ready(function () {
        $('#newsletterForm').validate({
            rules: {
                formFName: { required: true, minlength: 3 },
                formLName: { required: true, minlength: 4 },
                formEmailAddress: { required: true, email: true }
            },
            messages: {
                formFName: { required: "Your First name is required", minlength: "At least 3 characters" },
                formLName: { required: "Your Last name is required", minlength: "At least 4 characters" },
                formEmailAddress: { required: "Please enter a valid email address" }
            },
            submitHandler: function (form) {
                grecaptcha.ready(function () {
                    grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', { action: 'newsletter' }).then(function (token) {
                        $('#g-recaptcha-response').val(token);


                        let formData = $(form).serialize();

                        $.ajax({
                            type: 'POST',
                            url: "{{ route('frontend.newslettersubmit') }}",
                            data: formData,
                            beforeSend: function () {
                                $('#overlay').removeClass('d-none');
                                $('#overlay').addClass('d-flex');
                                $('#newsletterSubmitBtn').prop('disabled', true).text('Submitting...');
                                $('#newsletterSuccess').html('');
                            },
                            success: function (response) {
                                $('#newsletterSuccess').html('<div class="alert alert-success">Thank you for subscribing!</div>');
                                $('#newsletterForm')[0].reset();

                                $('#overlay').addClass('d-none');
                                $('#overlay').removeClass('d-flex');
                            },
                            error: function (xhr) {
                                let errors = xhr.responseJSON?.errors;
                                let message = "Something went wrong. Please try again.";

                                if (errors) {
                                    message = "<ul>";
                                    $.each(errors, function (key, val) {
                                        message += "<li>" + val[0] + "</li>";
                                    });
                                    message += "</ul>";
                                }

                                $('#newsletterSuccess').html('<div class="alert alert-danger">' + message + '</div>');
                                $('#overlay').addClass('d-none');
                                $('#overlay').removeClass('d-flex');
                            },
                            complete: function () {
                                $('#newsletterSubmitBtn').prop('disabled', false).text('Subscribe');
                                $('#overlay').addClass('d-none');
                                $('#overlay').removeClass('d-flex');
                            }
                        });
                    });
                });
            }
        });
    });
</script>

<!-- Google Translate Init -->
{{--
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,si',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            autoDisplay: false
        }, 'google_translate_element');
    }
</script> --}}


<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            autoDisplay: false
        }, 'google_translate_element');
    }
</script>
<!-- Load Google Translate Script -->
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script>
    $(document).ready(function () {
        // Mapping of country code to Google Translate language
        const countryLangMap = {
            "AF": { lang: "fa", label: "فارسی" },       // Afghanistan
            "AL": { lang: "sq", label: "Shqip" },      // Albania
            "DZ": { lang: "ar", label: " العربية" },    // Algeria
            "AS": { lang: "en", label: " English" },    // American Samoa
            "AD": { lang: "ca", label: "Català" },     // Andorra
            "AO": { lang: "pt", label: "Po rtuguês" },  // Angola
            "AI": { lang: "en", label: " English" },    // Anguilla
            "AG": { lang: "en", label: " English" },    // Antigua & Barbuda
            "AR": { lang: "es", label: " Español" },    // Argentina
            "AM": { lang: "hy", label: " Հայերեն" },     // Armenia
            "AU": { lang: "en", label: " English" },    // Australia
            "AT": { lang: "de", label: " Deutsch" },    // Austria
            "AZ": { lang: "az", label: "Azərb aycanca" },// Azerbaijan
            "BS": { lang: "en", label: " English" },    // Bahamas
            "BH": { lang: "ar", label: " العربية" },    // Bahrain
            "BD": { lang: "bn", label: "বাংলা" },       // Bangladesh
            "BB": { lang: "en", label: " English" },    // Barbados
            "BY": { lang: "be", label: "Бел аруская" },  // Belarus
            "BE": { lang: "nl", label: "Ned erlands" },  // Belgium
            "BZ": { lang: "en", label: " English" },    // Belize
            "BJ": { lang: "fr", label: "F rançais" },   // Benin
            "BM": { lang: "en", label: " English" },    // Bermuda
            "BT": { lang: "dz", label: "རྫོང་ཁ" },     // Bhutan
            "BO": { lang: "es", label: " Español" },    // Bolivia
            "BA": { lang: "bs", label: "B osanski" },   // Bosnia & Herzegovina
            "BW": { lang: "en", label: " English" },    // Botswana
            "BR": { lang: "pt", label: "Po rtuguês" },  // Brazil
            "BN": { lang: "ms", label: "Bahasa  Melayu" }, // Brunei
            "BG": { lang: "bg", label: "Бъ лгарски" },   // Bulgaria
            "BF": { lang: "fr", label: "F rançais" },   // Burkina Faso
            "BI": { lang: "fr", label: "F rançais" },   // Burundi
            "KH": { lang: "km", label: "ខ្មែរ" },       // Cambodia
            "CM": { lang: "fr", label: "F rançais" },   // Cameroon
            "CA": { lang: "en", label: " English" },    // Canada
            "CV": { lang: "pt", label: "Po rtuguês" },  // Cape Verde
            "KY": { lang: "en", label: " English" },    // Cayman Islands
            "CF": { lang: "fr", label: "F rançais" },   // Central African Republic
            "TD": { lang: "fr", label: "F rançais" },   // Chad
            "CL": { lang: "es", label: " Español" },    // Chile
            "CN": { lang: "zh-CN", label: "中文" },     // China
            "CO": { lang: "es", label: " Español" },    // Colombia
            "KM": { lang: "fr", label: "F rançais" },   // Comoros
            "CG": { lang: "fr", label: "F rançais" },   // Congo
            "CD": { lang: "fr", label: "F rançais" },   // Congo, Democratic Rep.
            "CR": { lang: "es", label: " Español" },    // Costa Rica
            "CI": { lang: "fr", label: "F rançais" },   // Côte d’Ivoire
            "HR": { lang: "hr", label: "H rvatski" },   // Croatia
            "CU": { lang: "es", label: " Español" },    // Cuba
            "CY": { lang: "el", label: "Ε λληνικά" },    // Cyprus (Greek)
            "CZ": { lang: "cs", label: " Čeština" },    // Czech Republic
            "DK": { lang: "da", label: "Dansk" },      // Denmark
            "DJ": { lang: "fr", label: "F rançais" },   // Djibouti
            "DM": { lang: "en", label: " English" },    // Dominica
            "DO": { lang: "es", label: " Español" },    // Dominican Republic
            "EC": { lang: "es", label: " Español" },    // Ecuador
            "EG": { lang: "ar", label: " العربية" },    // Egypt
            "SV": { lang: "es", label: " Español" },    // El Salvador
            "GQ": { lang: "es", label: " Español" },    // Equatorial Guinea
            "ER": { lang: "ti", label: "ትግርኛ" },     // Eritrea
            "EE": { lang: "et", label: "Eesti" },      // Estonia
            "ET": { lang: "am", label: "አማርኛ" },     // Ethiopia
            "FJ": { lang: "en", label: " English" },    // Fiji
            "FI": { lang: "fi", label: "Suomi" },      // Finland
            "FR": { lang: "fr", label: "F rançais" },   // France
            "GA": { lang: "fr", label: "F rançais" },   // Gabon
            "GM": { lang: "en", label: " English" },    // Gambia
            "GE": { lang: "ka", label: " ქართული" },    // Georgia
            "DE": { lang: "de", label: " Deutsch" },    // Germany
            "GH": { lang: "en", label: " English" },    // Ghana
            "GR": { lang: "el", label: "Ε λληνικά" },    // Greece
            "GD": { lang: "en", label: " English" },    // Grenada
            "GT": { lang: "es", label: " Español" },    // Guatemala
            "GN": { lang: "fr", label: "F rançais" },   // Guinea
            "GW": { lang: "pt", label: "Po rtuguês" },  // Guinea-Bissau
            "GY": { lang: "en", label: " English" },    // Guyana
            "HT": { lang: "fr", label: "F rançais" },   // Haiti
            "HN": { lang: "es", label: " Español" },    // Honduras
            "HK": { lang: "zh-CN", label: "中文" },     // Hong Kong
            "HU": { lang: "hu", label: "Magyar" },     // Hungary
            "IS": { lang: "is", label: "Í slenska" },   // Iceland
            "IN": { lang: "hi", label: "हिंदी" },       // India
            "ID": { lang: "id", label: "Bahasa In donesia" }, // Indonesia
            "IR": { lang: "fa", label: "فارسی" },       // Iran
            "IQ": { lang: "ar", label: " العربية" },    // Iraq
            "IE": { lang: "en", label: " English" },    // Ireland
            "IL": { lang: "he", label: "עברית" },       // Israel
            "IT": { lang: "it", label: "I taliano" },   // Italy
            "JM": { lang: "en", label: " English" },    // Jamaica
            "JP": { lang: "ja", label: "日本語" },       // Japan
            "JO": { lang: "ar", label: " العربية" },    // Jordan
            "KZ": { lang: "kk", label: " Қазақша" },    // Kazakhstan
            "KE": { lang: "sw", label: "Ki swahili" },  // Kenya
            "KI": { lang: "en", label: " English" },    // Kiribati
            "KR": { lang: "ko", label: "한국어" },       // South Korea
            "KW": { lang: "ar", label: " العربية" },    // Kuwait
            "KG": { lang: "ky", label: "К ыргызча" },    // Kyrgyzstan
            "LA": { lang: "lo", label: "ລາວ" },        // Laos
            "LV": { lang: "lv", label: "L atviešu" },   // Latvia
            "LB": { lang: "ar", label: " العربية" },    // Lebanon
            "LS": { lang: "st", label: " Sesotho" },    // Lesotho
            "LR": { lang: "en", label: " English" },    // Liberia
            "LY": { lang: "ar", label: " العربية" },    // Libya
            "LI": { lang: "de", label: " Deutsch" },    // Liechtenstein
            "LT": { lang: "lt", label: "L ietuvių" },   // Lithuania
            "LU": { lang: "fr", label: "F rançais" },   // Luxembourg
            "MO": { lang: "zh-CN", label: "中文" },     // Macau
            "MK": { lang: "mk", label: "Мак едонски" }, // North Macedonia
            "MG": { lang: "fr", label: "F rançais" },   // Madagascar
            "MW": { lang: "en", label: " English" },    // Malawi
            "MY": { lang: "ms", label: "Bahasa  Melayu" }, // Malaysia
            "MV": { lang: "dv", label: "ދިވެހި" },     // Maldives
            "ML": { lang: "fr", label: "F rançais" },   // Mali
            "MT": { lang: "mt", label: "Malti" },      // Malta
            "MH": { lang: "en", label: " English" },    // Marshall Islands
            "MR": { lang: "ar", label: " العربية" },    // Mauritania
            "MU": { lang: "en", label: " English" },    // Mauritius
            "MX": { lang: "es", label: " Español" },    // Mexico
            "FM": { lang: "en", label: " English" },    // Micronesia
            "MD": { lang: "ro", label: "Română" },     // Moldova
            "MC": { lang: "fr", label: "F rançais" },   // Monaco
            "MN": { lang: "mn", label: "Монгол" },      // Mongolia
            "ME": { lang: "sr", label: "Crn ogorski" }, // Montenegro
            "MA": { lang: "ar", label: " العربية" },    // Morocco
            "MZ": { lang: "pt", label: "Po rtuguês" },  // Mozambique
            "MM": { lang: "my", label: "မ ြန်မာစာ" },   // Myanmar
            "NA": { lang: "en", label: " English" },    // Namibia
            "NR": { lang: "en", label: " English" },    // Nauru
            "NP": { lang: "ne", label: "नेपाली" },     // Nepal
            "NL": { lang: "nl", label: "Ned erlands" },  // Netherlands
            "NZ": { lang: "en", label: " English" },    // New Zealand
            "NI": { lang: "es", label: " Español" },    // Nicaragua
            "NE": { lang: "fr", label: "F rançais" },   // Niger
            "NG": { lang: "en", label: " English" },    // Nigeria
            "NO": { lang: "no", label: "Norsk" },      // Norway
            "OM": { lang: "ar", label: " العربية" },    // Oman
            "PK": { lang: "ur", label: "اردو" },       // Pakistan
            "PW": { lang: "en", label: " English" },    // Palau
            "PA": { lang: "es", label: " Español" },    // Panama
            "PG": { lang: "en", label: " English" },    // Papua New Guinea
            "PY": { lang: "es", label: " Español" },    // Paraguay
            "PE": { lang: "es", label: " Español" },    // Peru
            "PH": { lang: "tl", label: " Tagalog" },    // Philippines
            "PL": { lang: "pl", label: "Polski" },     // Poland
            "PT": { lang: "pt", label: "Po rtuguês" },  // Portugal
            "PR": { lang: "es", label: " Español" },    // Puerto Rico
            "QA": { lang: "ar", label: " العربية" },    // Qatar
            "RO": { lang: "ro", label: "Română" },     // Romania
            "RU": { lang: "ru", label: " Русский" },    // Russia
            "RW": { lang: "rw", label: "Kiny arwanda" },// Rwanda
            "KN": { lang: "en", label: " English" },    // Saint Kitts & Nevis
            "LC": { lang: "en", label: " English" },    // Saint Lucia
            "VC": { lang: "en", label: " English" },    // Saint Vincent & Grenadines
            "WS": { lang: "sm", label: "Samoan" },     // Samoa
            "SM": { lang: "it", label: "I taliano" },   // San Marino
            "ST": { lang: "pt", label: "Po rtuguês" },  // Sao Tome & Principe
            "SA": { lang: "ar", label: " العربية" },    // Saudi Arabia
            "SN": { lang: "fr", label: "F rançais" },   // Senegal
            "RS": { lang: "sr", label: "Српски" },     // Serbia
            "SC": { lang: "fr", label: "F rançais" },   // Seychelles
            "SL": { lang: "en", label: " English" },    // Sierra Leone
            "SG": { lang: "en", label: " English" },    // Singapore
            "SK": { lang: "sk", label: "Slo venčina" }, // Slovakia
            "SI": { lang: "sl", label: "Slov enščina" },// Slovenia
            "SB": { lang: "en", label: " English" },    // Solomon Islands
            "SO": { lang: "so", label: "S oomaali" },   // Somalia
            "ZA": { lang: "en", label: " English" },    // South Africa
            "ES": { lang: "es", label: " Español" },    // Spain
            "LK": { lang: "si", label: "සිංහල" },      // Sri Lanka
            "SD": { lang: "ar", label: " العربية" },    // Sudan
            "SR": { lang: "nl", label: "Ned erlands" }, // Suriname
            "SZ": { lang: "en", label: " English" },    // Eswatini
            "SE": { lang: "sv", label: " Svenska" },    // Sweden
            "CH": { lang: "de", label: " Deutsch" },    // Switzerland
            "SY": { lang: "ar", label: " العربية" },    // Syria
            "TW": { lang: "zh-TW", label: "中文" },     // Taiwan
            "TJ": { lang: "tg", label: "Тоҷикӣ" },     // Tajikistan
            "TZ": { lang: "sw", label: "Ki swahili" },  // Tanzania
            "TH": { lang: "th", label: "ไทย" },        // Thailand
            "TL": { lang: "pt", label: "Po rtuguês" },  // Timor-Leste
            "TG": { lang: "fr", label: "F rançais" },   // Togo
            "TO": { lang: "en", label: " English" },    // Tonga
            "TT": { lang: "en", label: " English" },    // Trinidad & Tobago
            "TN": { lang: "ar", label: " العربية" },    // Tunisia
            "TR": { lang: "tr", label: "Türkçe" },     // Turkey
            "TM": { lang: "tk", label: " Türkmen" },    // Turkmenistan
            "UG": { lang: "en", label: " English" },    // Uganda
            "UA": { lang: "uk", label: "Укр аїнська" },  // Ukraine
            "AE": { lang: "ar", label: " العربية" },    // UAE
            "GB": { lang: "en", label: " English" },    // UK
            "US": { lang: "en", label: " English" },    // USA
            "UY": { lang: "es", label: " Español" },    // Uruguay
            "UZ": { lang: "uz", label: "Oʻzbek" },     // Uzbekistan Oʻzbek
            "VU": { lang: "bi", label: " Bislama" },    // Vanuatu
            "VE": { lang: "es", label: " Español" },    // Venezuela
            "VN": { lang: "vi", label: "Tiế ng Việt" }, // Vietnam
            "YE": { lang: "ar", label: " العربية" },    // Yemen
            "ZM": { lang: "en", label: " English" },    // Zambia
            "ZW": { lang: "en", label: " English" }     // Zimbabwe
        };

        console.log("Test Lng");
        function triggerTranslate(lang) {
            var select = document.querySelector("select.goog-te-combo");
            if (select) {
                select.value = lang;
                select.dispatchEvent(new Event("change"));
            }
        }

        // Fetch user's geo info
        $.getJSON('https://ipapi.co/json/', function (data) {
            let countryCode = data.country; // e.g., "IN", "LK", "US"
            let localLang = 'en'; // fallback
            let localLabel = 'English';

            //if (countryLangMap[countryCode]) {
            //    localLang = countryLangMap[countryCode].lang;
            //    localLabel = countryLangMap[countryCode].label;
            //}

            // Set local language button text
            //$("#translate_lang a").text(localLabel);
            $("#translate_lang a").text(countryLangMap[countryCode].label);

            // Show/hide buttons
            if (localLang === 'en') {
                $("#translate_lang").removeClass("d-none").addClass("d-block");
                $("#translate_english").removeClass("d-block").addClass("d-none");
            } else {
                $("#translate_english").removeClass("d-none").addClass("d-block");
                $("#translate_lang").removeClass("d-block").addClass("d-none");
            }

            // Auto translate page
            setTimeout(() => triggerTranslate(localLang), 500);
        });

        // Click events for manual switching
        $("#translate_english a").click(function () {
            triggerTranslate("en");
            $("#translate_english").removeClass("d-block").addClass("d-none");
            $("#translate_lang").removeClass("d-none").addClass("d-block");
        });

        $("#translate_lang a").click(function () {
            // Get the current button label
            let currentLabel = $(this).text();

            // Find the language code from countryLangMap
            let lang = 'en'; // fallback
            for (const country in countryLangMap) {
                if (countryLangMap[country].label === currentLabel) {
                    lang = countryLangMap[country].lang;
                    break;
                }
            }

            // Trigger Google Translate
            triggerTranslate(lang);

            // Swap buttons
            $("#translate_lang").removeClass("d-block").addClass("d-none");
            $("#translate_english").removeClass("d-none").addClass("d-block");
        });
    });
</script>

<script>
    // function translateTo(lang) {
    //     console.log('My Language : ', lang);
    //     const interval = setInterval(() => {
    //         const iframe = document.querySelector('iframe.goog-te-menu-frame');
    //         if (!iframe) return;

    //         const innerDoc = iframe.contentDocument || iframe.contentWindow.document;
    //         const items = innerDoc.querySelectorAll('.goog-te-menu2-item span.text');

    //         items.forEach(item => {
    //             const itemLang = item.innerText.trim().toLowerCase();
    //             if (itemLang.includes(lang.toLowerCase())) {
    //                 item.click();
    //                 clearInterval(interval);
    //             }
    //         });
    //     }, 300);

    //     // Failsafe: clear after 5s
    //     setTimeout(() => clearInterval(interval), 5000);
    // }
</script>
<script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>

<script>
    const player = new Plyr('#video-source');
</script>

<script>

    function AlertModelDetails(title, body, cancel, ok, page_id = 0, action = null, method = 'POST') {
        $('#alertModelLabel').text(title);
        $('#alertModelBody').html(body);
        $('#alertModelBtnCalcel').text(cancel);
        $('#alertModelBtnOk').text(ok);
        $('#alertPageId').val(page_id);
        $('#alertModel form').attr('action', action);
        $('#alertModel form').attr('method', method);

        var myModal = new bootstrap.Modal(document.getElementById('alertModel'));
        myModal.show();
    }

    $('#logout_btn').on('click', function () {
        AlertModelDetails('Logout', 'Are you sure you want to logout this Admin?', 'Cancel', 'Logout', 0, '{{ route('admin.logout') }}', 'GET');
    });

    $('#customer_logout_btn').on('click', function () {
        AlertModelDetails('Logout', 'Are you sure you want to logout this Customer?', 'Cancel', 'Logout', 0, '{{ route('frontend.userlogout') }}', 'GET');
    });

</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.section_area ul').addClass('list-style-one clearfix');

        $('#forget_password_form').on('click', function (e) {
            e.preventDefault();

            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to reset your password?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, Reset it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Enter your Username or Email',
                        input: 'text',
                        inputPlaceholder: 'name@example.com or username',
                        inputAttributes: {
                            autocapitalize: 'off'
                        },
                        showCancelButton: true,
                        confirmButtonText: 'Send OTP',
                        showLoaderOnConfirm: true,
                        preConfirm: (loginInput) => {
                            return new Promise((resolve, reject) => {
                                $.ajax({
                                    url: '{{ route('frontend.userresetpassword') }}',
                                    type: 'POST',
                                    contentType: 'application/json',
                                    data: JSON.stringify({
                                        formResetPwd: loginInput,
                                        _token: $('meta[name="csrf-token"]').attr('content')
                                    }),
                                    success: function (response) {
                                        console.log(response);
                                        resolve(response); // this will go to result.value

                                    },
                                    error: function (xhr, status, error) {
                                        console.error('Error:', error);
                                        console.error('Response:', xhr.responseJSON);
                                        console.error('Status:', status);

                                        let errorMsg = xhr.responseJSON?.message || 'Server Error';
                                        Swal.showValidationMessage(errorMsg);
                                        //reject(new Error(errorMsg));
                                    }
                                });
                            });
                        }
                    }).then((result) => {
                        if (result.isConfirmed && result.value.status === 'otp_sent') {
                            // Show Bootstrap modal for OTP input
                            $('#alertModelLabel').text('Enter OTP');
                            $('#alertModelBody').html(`
                                <input type="hidden" id="otp_user_id" value="${result.value.user_id}">
                                <div class="mb-3">
                                    <label for="otp" class="form-label">OTP</label>
                                    <input type="text" class="form-control" id="otp" placeholder="Enter OTP">
                                </div>
                            `);
                            // Set form attributes dynamically
                            $('#frmAlertModel').attr('action', '{{ route('frontend.verifyotp') }}');
                            $('#frmAlertModel').attr('method', 'POST');
                            $('#alertModelBtnCalcel').text('Cancel');

                            $('#alertModelBtnOk').text('Verify OTP');
                            $('#alertModel').modal('show');
                        }
                    })
                        .catch((err) => {
                            console.error('Swal preConfirm error:', err);
                        });
                }
            });
        });

        $('#frmAlertModel').on('submit', function (e) {
            e.preventDefault();

            const form = $(this);
            const url = form.attr('action');
            const method = form.attr('method');

            let otp = $('#otp').val() ?? '';
            let user_id = $('#otp_user_id').val() ?? '';
            console.log('lOGOUT : ', otp, user_id);
            $.ajax({
                url: url,
                method: method,
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    otp: otp,
                    user_id: user_id
                },
                success: function (res) {
                    if (res.status === 'success') {
                        $('#alertModel').modal('hide');
                        Swal.fire('Success', res.message, 'success');
                    } else {
                        Swal.fire('Error', res.message, 'error');
                    }
                },
                error: function (xhr, status, error) {
                    console.error('OTP Error:', error);
                    console.error('OTP Response:', xhr.responseJSON);
                    console.error('OTP Status:', status);

                    let errorMsg = xhr.responseJSON?.message || 'Server Error';
                    Swal.showValidationMessage(errorMsg);
                    //reject(new Error(errorMsg));
                }
            });
        });


    });
</script>