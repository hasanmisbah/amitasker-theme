"use strict";


let amitasker = function () {

    let data = {
        init: function () {
            this.navbar();
            this.plugin();
        },
        navbar: function () {

            // hide navbar after clicking
            $('.nav-link').on('click', function () {
                $('.navbar-toggler').click();
            });

            // setting navbar sticky
            $(window).on('scroll', function () {
                var scroll_top = $(window).scrollTop();

                if (scroll_top > 40) {
                    $('.navbar').addClass('sticky');

                } else {
                    $('.navbar').removeClass('sticky');
                }

            });

        },
        plugin: function () {
            // $(".skillbar").skillbar();

            // skillbar data call
            o.init();

            $('.client-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 2,
                autoplay: true,
                autoplaySpeed: 2000,
                cssEase: 'ease',
                dots: false,
                infinite: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]

            });
            $('.testimonial-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                dots: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
            $('.counting').counterUp({
                delay: 10,
                time: 1000
            });
        }
    }
    data.init();
}



var o = {
    init: function () {
        this.diagram();
    },
    random: function (l, u) {
        return Math.floor((Math.random() * (u - l + 1)) + l);
    },
    diagram: function () {
        var r = Raphael('diagram', 400, 400),
            rad = 73,
            defaultText = 'Skill set',
            speed = 250;

        r.circle(200, 200, 85).attr({ stroke: 'none', fill: '#193340' });

        var title = r.text(200, 200, defaultText).attr({
            font: '22px Ubuntu',
            fill: '#fff'
        }).toFront();

        r.customAttributes.arc = function (value, color, rad) {
            var v = 3.6 * value,
                alpha = v == 360 ? 359.99 : v,
                random = o.random(91, 240),
                a = (random - alpha) * Math.PI / 180,
                b = random * Math.PI / 180,
                sx = 200 + rad * Math.cos(b),
                sy = 200 - rad * Math.sin(b),
                x = 200 + rad * Math.cos(a),
                y = 200 - rad * Math.sin(a),
                path = [['M', sx, sy], ['A', rad, rad, 0, +(alpha > 180), 1, x, y]];
            return { path: path, stroke: color }
        }

        $('.get').find('.arc').each(function (i) {
            var t = $(this),
                color = t.find('.color').val(),
                value = t.find('.percent').val(),
                text = t.find('.text').text();

            rad += 25;
            var z = r.path().attr({ arc: [value, color, rad], 'stroke-width': 20 });

            z.mouseover(function () {
                this.animate({ 'stroke-width': 40, opacity: .75 }, 1000, 'elastic');
                if (Raphael.type != 'VML') //solves IE problem
                    this.toFront();
                title.stop().animate({ opacity: 0 }, speed, '>', function () {
                    this.attr({ text: text + '\n' + value + '%' }).animate({ opacity: 1 }, speed, '<');
                });
            }).mouseout(function () {
                this.stop().animate({ 'stroke-width': 20, opacity: 1 }, speed * 4, 'elastic');
                title.stop().animate({ opacity: 0 }, speed, '>', function () {
                    title.attr({ text: defaultText }).animate({ opacity: 1 }, speed, '<');
                });
            });
        });

    }
};



var waypoint = new Waypoint({
    element: $('#company-stats'),
    handler: function (direction) {
        let dir = direction;
        if(dir == 'down'){
            counting();
        }
        //counting();
       // alert('done');
       console.log(direction);
    }
});

let counting = function () {
    let $counter = $('.counting');
    $counter.each(function () {

        
        var $this = $(this),
            countTo = $this.val();
            console.log(countTo);
        $({ countNum: $this.text() }).animate(
            {
                countNum: countTo
            },

            {
                duration: 8000,
                easing: "linear",
                step: function () {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function () {
                   // $this.text(this.countNum);
                }
            }
        );
    });
};
$(document).ready(function () {
    amitasker();
});