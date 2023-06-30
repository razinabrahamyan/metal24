window.DomHelper = new (function () {
    this.dropDownQuestions = function (target) {
        $(target).parent().find(".faq-question-answer").toggleClass("d-block h-auto");
    }
});

window.getLMKCookie = function (name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

window.setLMKCookie = function (name, value, seconds) {
    var expires = "";
    if (seconds) {
        var date = new Date();
        date.setTime(date.getTime() + (seconds * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

window.notify = new (function () {
    this.createAlert = function (title, summary, details, severity, dismissible, autoDismiss, appendToId) {
        let iconMap = {
            info: "fa fa-info-circle",
            success: "fa fa-thumbs-up",
            warning: "fa fa-exclamation-triangle",
            danger: "fa ffa fa-exclamation-circle"
        };

        let iconAdded = false;

        let alertClasses = ["alert", "animated", "flipInX"];
        alertClasses.push("alert-" + severity.toLowerCase());

        let msgIcon = $("<i />", {
            "class": iconMap[severity]
        });

        let msg = $("<div />", {
            "class": alertClasses.join(" ")
        });

        if (title) {
            let msgTitle = $("<h4 />", {
                html: title
            }).appendTo(msg);

            if (!iconAdded) {
                msgTitle.prepend(msgIcon);
                iconAdded = true;
            }
        }

        if (summary) {
            let msgSummary = $("<strong />", {
                html: summary
            }).appendTo(msg);

            if (!iconAdded) {
                msgSummary.prepend(msgIcon);
                iconAdded = true;
            }
        }

        if (details) {
            let msgDetails = $("<p />", {
                html: details
            }).appendTo(msg);

            if (!iconAdded) {
                msgDetails.prepend(msgIcon);
                iconAdded = true;
            }
        }


        if (dismissible) {
            let msgClose = $("<span />", {
                "class": "close",
                "data-dismiss": "alert",
                html: "<i class='fa fa-times-circle'></i>"
            }).appendTo(msg);
        }

        $('#' + appendToId).prepend(msg);

        if (autoDismiss) {
            setTimeout(function () {
                msg.addClass("flipOutX");
                setTimeout(function () {
                    msg.remove();
                }, 1000);
            }, 5000);
        }
    };

    this.formError = function () {
        this.createAlert('Ой-ой', 'Вы уже отправили заявку', 'Скоро с Вами свяжутся наши специалисты.', 'danger', true, true, 'pageMessages');
    };

    this.formSuccess = function () {
        this.createAlert('Отлично!', 'Заявка оформлена!', 'Скоро с Вами свяжутся наши специалисты.', 'success', true, true, 'pageMessages');
    }
});

document.addEventListener("DOMContentLoaded", () => {
    /*Mobile Nav*/
    $(document).on("click", ".hamburger", function (event) {
        let target = $(".mobile_menu");
        $('.hamburger').toggleClass('open');
        if ($('.hamburger').hasClass("open")) {
            target.removeClass("fadeOutDown").addClass("fadeInUp");
            $("body").attr("style", "overflow: hidden;");
        } else {
            target.removeClass("fadeInUp").addClass("fadeOutDown");
            $("body").attr("style", "");
        }
    });
    $(document).on("click", ".header_li_hov", function (event) {
        event.preventDefault();
        $(this).parent("li").toggleClass('drop');
    });
    /*Mobile Nav*/

    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('https://lmk-moscow.ru/serviceworker.js').then(function (registration) {
            console.log('Laravel PWA: ServiceWorker registration successful with scope: ', registration.scope);
        }, function (err) {
            console.log('Laravel PWA: ServiceWorker registration failed: ', err);
        });
    } else {
        console.log('ServiceWorker Not Found');
    }

    /*SmartCallBack*/
    /*Отладка стилей под нас*/
    /*Инициация событий SmartCallback*/
    document.addEventListener("SCBWidgetOpen", function (event) {
        $('#scb_block,.scb_back-wrapper,#scb_button_wait,#scb_phone_input,.scb_checkbox_border').attr('style', 'border-radius: 8px !important;');
        $('body').addClass('overflow-hidden');
    });
    document.addEventListener("SCBWidgetClose", function (event) {
        $('body').removeClass('overflow-hidden');
    });

    //Костыль для SCB
    $('#scb_udobnoe_block').ready(function () {
        setTimeout(function () {
            if (typeof (dat) !== "undefined") {
                $('#scb_udobnoe_block').remove();
            }
        }, 1000);
        setTimeout(function () {
            if (typeof (dat) !== "undefined") {
                $('#scb_udobnoe_block').remove();
            }
        }, 2000);
    });

    $('.lmk_scb_open_call').click(function () {
        if (typeof SCBopen !== "undefined") {
            SCBopen(1, 'callback');
        } else {
            console.log('SCB не доступен');
        }
    });
    /*SmartCallBack*/

    /*Form Wizard*/
    jQuery('.form-wizard-next-btn').click(function () {
        var parentFieldset = jQuery(this).parents('.wizard-fieldset');
        var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
        var next = jQuery(this);
        var nextWizardStep = true;
        parentFieldset.find('.wizard-required').each(function () {
            var thisValue = jQuery(this).val();

            if (thisValue == "") {
                jQuery(this).siblings(".wizard-form-error").slideDown();
                nextWizardStep = false;
            } else {
                jQuery(this).siblings(".wizard-form-error").slideUp();
            }
        });
        if (nextWizardStep) {
            next.parents('.wizard-fieldset').removeClass("show", "400");
            currentActiveStep.removeClass('active').addClass('activated').next().addClass('active', "400");
            next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show", "400");
            jQuery(document).find('.wizard-fieldset').each(function () {
                if (jQuery(this).hasClass('show')) {
                    var formAtrr = jQuery(this).attr('data-tab-content');
                    jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function () {
                        if (jQuery(this).attr('data-attr') == formAtrr) {
                            jQuery(this).addClass('active');
                            var innerWidth = jQuery(this).innerWidth();
                            var position = jQuery(this).position();
                            jQuery(document).find('.form-wizard-step-move').css({
                                "left": position.left,
                                "width": innerWidth
                            });
                        } else {
                            jQuery(this).removeClass('active');
                        }
                    });
                }
            });
        }
    });
    //click on previous button
    jQuery('.form-wizard-previous-btn').click(function () {
        var counter = parseInt(jQuery(".wizard-counter").text());
        ;
        var prev = jQuery(this);
        var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
        prev.parents('.wizard-fieldset').removeClass("show", "400");
        prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show", "400");
        currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active', "400");
        jQuery(document).find('.wizard-fieldset').each(function () {
            if (jQuery(this).hasClass('show')) {
                var formAtrr = jQuery(this).attr('data-tab-content');
                jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function () {
                    if (jQuery(this).attr('data-attr') == formAtrr) {
                        jQuery(this).addClass('active');
                        var innerWidth = jQuery(this).innerWidth();
                        var position = jQuery(this).position();
                        jQuery(document).find('.form-wizard-step-move').css({
                            "left": position.left,
                            "width": innerWidth
                        });
                    } else {
                        jQuery(this).removeClass('active');
                    }
                });
            }
        });
    });
    //click on form submit button
    jQuery(document).on("click", ".form-wizard .form-wizard-submit", function () {
        var parentFieldset = jQuery(this).parents('.wizard-fieldset');
        var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
        parentFieldset.find('.wizard-required').each(function () {
            var thisValue = jQuery(this).val();
            if (thisValue == "") {
                jQuery(this).siblings(".wizard-form-error").slideDown();
            } else {
                jQuery(this).siblings(".wizard-form-error").slideUp();
            }
        });
    });
    // focus on input field check empty or not
    jQuery(".form-control").on('focus', function () {
        var tmpThis = jQuery(this).val();
        if (tmpThis == '') {
            jQuery(this).parent().addClass("focus-input");
        } else if (tmpThis != '') {
            jQuery(this).parent().addClass("focus-input");
        }
    }).on('blur', function () {
        var tmpThis = jQuery(this).val();
        if (tmpThis == '') {
            jQuery(this).parent().removeClass("focus-input");
            jQuery(this).siblings('.wizard-form-error').slideDown("3000");
        } else if (tmpThis != '') {
            jQuery(this).parent().addClass("focus-input");
            jQuery(this).siblings('.wizard-form-error').slideUp("3000");
        }
    });
    /*Form Wizard*/

    /*Form file input*/
    $('#chooseFile').bind('change', function () {
        var filename = $("#chooseFile").val();
        if (/^\s*$/.test(filename)) {
            $(".file-upload").removeClass('active');
            $("#noFile").text("No file chosen...");
        } else {
            $(".file-upload").addClass('active');
            $("#noFile").text(filename.replace("C:\\fakepath\\", ""));
        }
    });
    /*Form file input*/

    /*SEO*/
    $('.breadcrumb').attr('itemscope', '').attr('itemtype', 'https://schema.org/BreadcrumbList');
    $('.breadcrumb li').attr('itemscope', '').attr('itemprop', "itemListElement").attr('itemtype', 'https://schema.org/ListItem');
    let breadcrumbCount = 1;
    $('.breadcrumb li:not(".active") a').attr('itemprop', 'item').each(function () {
        $(this).append('<meta itemprop="position" content="' + breadcrumbCount + '">');
        $(this).append('<meta itemprop="name" content="' + $(this).text() + '">');
        breadcrumbCount++;
    });
    $('.breadcrumb li.active').each(function () {
        $(this).append('<meta itemprop="position" content="' + breadcrumbCount + '">');
        $(this).append('<meta itemprop="name" content="' + $(this).text() + '">');
        breadcrumbCount++;
    });
    /*SEO*/

    // const mobileScreen = /Android|webOS|iPhone|iPad|Mac|Macintosh|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
    // const appleScreen = /Macintosh/i.test(navigator.userAgent) && navigator.maxTouchPoints && navigator.maxTouchPoints > 1/i.test(navigator.userAgent)

    if ($(window).width() < 980) {
        if (window.location.pathname !== '/') {
            $('html, body').animate({
                scrollTop: 1103
            }, 200);
        }

        $("#toggleSidebar").hide()

    }
    $(window).on('resize', function () {
        if ($(window).width() < 980) {
            $("#toggleSidebar").hide()
        } else {
            $("#toggleSidebar").show()

        }
    });

    let menuResizing = function () {
        if ($(window).width() <= 1199) {
            $('.classy-nav-container').addClass('light left breakpoint-on').removeClass('breakpoint-off');
        } else {
            $('.classy-nav-container').removeClass('light left breakpoint-on').addClass('breakpoint-off');
        }
    };
    menuResizing();
    $(window).on('resize', menuResizing);
    // $('.classy-navbar-toggler,.classycloseIcon').click(function () {
    //     $('.classy-menu').toggleClass('menu-on');
    //     $('.navbarToggler').toggleClass('active');
    // })

    scrollFunction()
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            $('#phones-scrolled-block, #simple_logo').show(50);
            $('#long_logo').hide(50);
        } else {
            $('#phones-scrolled-block, #simple_logo').hide(100);
            $('#long_logo').show(100);
        }
        if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
            $('#sticker').attr('style', 'position: fixed;top: 0px;z-index: inherit;');
        } else {
            $('#sticker').attr('style', '');
        }
    }

    $(window).scroll(function fix_element() {
        $('#fixed_block').css(
            $(window).scrollTop() > 2300
                ? {'width': '254px', 'position': 'fixed', 'top': '365px'}
                : {'position': 'relative', 'top': 'auto'}
        );
        $('#sidebar_licence').css(
            $(window).scrollTop() > 2300
                ? {'width': '254px', 'position': 'fixed', 'top': '60px'}
                : {'position': 'relative', 'top': 'auto'}
        );

        $('#fixed_block').css(
            $(window).scrollTop() > $('#footer_form_wrapper').offset().top - 600
                ? {'z-index': '-5'}
                : {'z-index': '2'}
        );

        $('#sidebar_licence').css(
            $(window).scrollTop() > $('#footer_form_wrapper').offset().top - 334
                ? {'z-index': '-5'}
                : {'z-index': '2'}
        );

        return fix_element;
    }());

    let collapse_show = []
    parent_element = $('.collapse_elem');
    child_element = $('.collapse_child');

    $(document).mousemove(function () {
        if ($("#accordion:hover").length != 0) {
        } else {
            collapse_show.map((v) => {
                $(`${v}`).collapse('hide')
            })
        }
    });
    parent_element.on('mouseover', function (e) {
        let target = $(e.target).data('target')
        $(target).collapse('show')
        if (!collapse_show.includes(target)) {
            collapse_show.push(target)
        }
    });
    parent_element.on('mouseleave', function (e) {
        let target = $(e.target).data('target')
        $(target).collapse("hide")
    })
    parent_element.map((i, v) => {
        let child = $(v).children()[1].id
        $('#' + child).on('mouseleave', function () {
            $(this).collapse('hide')
        })
    })

    child_element.on('mouseenter', function () {
        let t = $(this).data('target')
        $(t).collapse('show')
        if (!collapse_show.includes(t)) {
            collapse_show.push(t)
        }
    })
    child_element.on('mouseleave', function () {
        let t = $(this).data('target')
        $(t).collapse("hide")
    })

    /*NOTIFY*/
    if (window.getLMKCookie('not_acceptable_popup') !== '1') {
        setTimeout(function () {
            $.notify({
                // title: '<div class="float-left"><i class="fas fa-exclamation-triangle fa-lg" style="color: red !important;font-size: 44px"></i></div>',
                icon: 'glyphicon glyphicon-star',
                message: "<div class='d-flex' style='padding-right: 9px;'><span class='col-2 p-0'><i class='fas fa-exclamation-triangle fa-lg' style='color: red !important;font-size: 44px;line-height: 50px;'></i></span><span class='col-10 badge m-0 p-2 badge-danger text-center float-left' style='line-height: 16px;'><span style='font-size: 20px;' class='p-0 col-12'>Мы не принимаем!</span><br><span class='p-0 col-12'>Ванны, Легковые машины, Плиты, Двери, Окна</span></span></div>",
                // message: "<span class='col-2'><i class='fas fa-exclamation-triangle fa-lg' style='color: red !important;font-size: 44px'></i></span><span class='col-10 badge m-0 p-2 badge-danger text-center float-left' style='color: #fff;font-size: 15px;'><span style='font-size: 18px;' class='p-0 col-12'>Временно не принимаются:</span><br><span class='p-0 col-12'>Ванны, Легковые машины, Плиты, Двери, Окна</span></span>"
            }, {
                type: 'primary',
                animate: {
                    enter: 'animated fadeInLeft',
                    exit: 'animated fadeOutLeft'
                },
                onShow: function () {
                    this.css('left', '0')
                        .css('top', '70px')
                        .css('width', '100%')
                        .css('border-radius', '0')
                        .css('max-width', '450px')
                        .css('height', '75px');
                    window.setLMKCookie('not_acceptable_popup', '1', 5 * 60);
                },
                placement: {
                    from: "bottom",
                    align: "left"
                },
                offset: 20,
                spacing: 10,
                z_index: 9999,
                timer: 2000,
            });
        }, 2000);
    }
    /*NOTIFY*/

    $('.preloader').fadeOut('slow', function () {
        $(this).remove();
    });

    /*SNOW*/
    function createSnowflake() {
        const snowflake = document.createElement("i");
        snowflake.classList.add("far");
        snowflake.classList.add("fa-snowflake");
        snowflake.style.width = Math.random() * 10 + 10 + "px";
        snowflake.style.left = Math.random() * window.innerWidth + "px";
        snowflake.style.animationDuration = Math.random() * 100 + 2 + "s";
        snowflake.style.opacity = Math.random();
        document.getElementById('snow').appendChild(snowflake);

        setTimeout(() => {
            snowflake.remove();
        }, 5000)
    }

    // setInterval(createSnowflake, 200);
    /*SNOW*/
});


/*VUE*/
let elements = document.getElementsByClassName('form_block');
for (let el of elements) {
    new Vue({
        el: el,
        data: {
            formData: undefined,
            formSent: false,
            quiz_category: 10,
        },
        methods: {
            sendForm: function (e) {
                e.preventDefault();
                const config = {
                    headers: {
                        Accept: 'application/json',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    }
                }

                this.formData = new FormData(e.target);
                this.formData.append('page', $('h1').text());
                this.formData.append('link', window.location.href);

                if (!this.formSent) {
                    axios.post('/axios/send-form', this.formData, config).then(response => {
                        if (response.status === 200) {
                            window.notify.formSuccess()
                        } else {
                            this.formSent = true;
                        }
                    }).catch(e => {
                        console.log(e);
                        this.formSent = false;
                    });
                } else {
                    window.notify.formError()
                }
                this.formSent = true;
            },
            addMask: function (selector, masked = '+7 (___) ___-__-__') {
                const elems = document.querySelectorAll(selector);

                function mask(event) {
                    const keyCode = event.keyCode;
                    const template = masked,
                        def = template.replace(/\D/g, ""),
                        val = this.value.replace(/\D/g, "");
                    let i = 0,
                        newValue = template.replace(/[_\d]/g, function (a) {
                            return i < val.length ? val.charAt(i++) || def.charAt(i) : a;
                        });
                    i = newValue.indexOf("_");
                    if (i !== -1) {
                        newValue = newValue.slice(0, i);
                    }
                    let reg = template.substr(0, this.value.length).replace(/_+/g,
                        function (a) {
                            return "\\d{1," + a.length + "}";
                        }).replace(/[+()]/g, "\\$&");
                    reg = new RegExp("^" + reg + "$");
                    if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) {
                        this.value = newValue;
                    }
                    if (event.type === "blur" && this.value.length < 5) {
                        this.value = "";
                    }

                }

                for (const elem of elems) {
                    elem.addEventListener("input", mask);
                    elem.addEventListener("focus", mask);
                    elem.addEventListener("blur", mask);
                }
            }
        },
        mounted() {
            this.addMask('.form_block input[name=phone]');
        },
    });
}
window.calculator = new Vue({
    el: '#left_picture_form_wrapper',
    methods: {
        calc: function () {
            if ($('.calculator_block').length > 0) {
                setTimeout(function () {
                    let price = ($('[name="met_type_2"]').val() !== undefined) ? $('[name="met_type_2"]').val().replace(/ /g, '') * 1 : 0;
                    let forTonn = [7, 8, 9, 10];
                    if (forTonn.includes(window.calculator.calc_quiz_category)) {
                        $('#totalPrice').text(price * (window.calculator.weight / 1000));
                    } else {
                        $('#totalPrice').text(price * window.calculator.weight);
                    }
                }, 25);
            }
        },
    },
    watch: {
        calc_quiz_category: function () {
            $('[name="met_type_2"]').val($("[name=met_type_2] option:first").val());
        },
        weight: function () {
            this.calc();
        },
    },
    data: {
        calc_quiz_category: 10,
        weight: 1000,
    },
    mounted() {
        this.calc();
    }
});

window.ymapHandler = new Vue({
    el: "#footer-area",
    data: {
        map: undefined,
        placemark: undefined,
        points: addresses ?? null,
        yaMapsShown: false,
    },
    methods: {
        initMap: function () {
            this.map = new ymaps.Map("ymap", {
                center: [55.76, 37.64],
                zoom: 9,
                controls: []
            }, {
                searchControlProvider: 'yandex#search',
                suppressMapOpenBlock: true,
                suppressObsoleteBrowserNotifier: true,
            });

            this.map.controls.add(new ymaps.control.FullscreenControl());
            this.map.controls.add(new ymaps.control.ZoomControl({
                options: {
                    size: "small"
                }
            }));

            if (this.points !== null) {
                Object.entries(this.points).forEach(([key, point]) => {
                    this.map.geoObjects.add(new ymaps.Placemark([point.lat, point.lng], {
                        balloonContent: point.address + '<br><div class="b-btn-base base-br"><button onclick="window.open(\'https://yandex.ru/maps/?text='+point.lat+','+point.lng+'&rtt=mt\',\'_blank\') " rel="nofollow noindex noreferrer" class="btn text-center map-btn">Перейти</button></div><a href="tel:+79254333556" class="phone-map rotate-i"><i class="fa fa-phone"></i></a>'
                    }));
                })
            }
        },
        moveToMapPoint: function (lat, lng) {
            this.map.setCenter([lat, lng], 15);
        },
        mountMap: function () {
            let el = $('#ymap')[0];
            var rect = el.getBoundingClientRect();

            if (rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /* or $(window).height() */
                rect.right <= (window.innerWidth || document.documentElement.clientWidth) /* or $(window).width() */) {
                var elem = document.createElement('script');
                elem.type = 'text/javascript';
                elem.src = 'https://api-maps.yandex.ru/2.1/?load=package.standard,package.geoObjects&lang=ru_RU&amp;apikey=8c1ddd83-7c9c-4d9e-a532-9c67ea915ff8&onload=window.ymapHandler.initMap';
                document.getElementsByTagName('body')[0].appendChild(elem);
                this.yaMapsShown = true;
            }
        }
    },
    mounted() {
        if ($(window).width() > 980 && $('#ymap').is(":visible")) {
            this.mountMap();
            $(window).scroll(function () {
                if (!window.ymapHandler.yaMapsShown && $(window).width() > 980) {
                    window.ymapHandler.mountMap();
                }
            });
        }
    },
});

/*Navbars*/
new Vue({
    el: '#buenoNav',
    data: {
        show: false
    },
    created() {
        window.addEventListener("resize", this.myEventHandler);
    },
    destroyed() {
        window.removeEventListener("resize", this.myEventHandler);
    },
    methods: {
        myEventHandler(e) {
            this.show = $(window).width() < 980;
        }
    },
    mounted() {
        if ($(window).width() < 980) {
            this.show = true
        }
    }
})

new Vue({
    el: '#toggleSidebar',
    data: {
        show: false
    },
    created() {
        window.addEventListener("resize", this.myEventHandler);
    },
    destroyed() {
        window.removeEventListener("resize", this.myEventHandler);
    },
    methods: {
        myEventHandler(e) {
            this.show = $(window).width() > 980;
        }
    },
    mounted() {
        if ($(window).width() > 980) {
            this.show = true
        }
    }
})
/*Navbars*/
/*VUE*/
