//Date & time
function date_time(id) {
    var date = new Date,
        AP = "AM",
        year = date.getFullYear(),
        month = date.getMonth(),
        months = new Array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'),
        d = date.getDate(),
        day = date.getDay(),
        days = new Array('Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat'),
        h = date.getHours();
    if (h == 0) {
        h = 12;
    } else if (h > 12) {
        h = h - 12;
        AP = "PM";
    }
    if (h < 10) {
        h = "0" + h;
    }
    var m = date.getMinutes();
    if (m < 10) {
        m = "0" + m;
    }
    var s = date.getSeconds();
    if (s < 10) {
        s = "0" + s;
    }
    var result = days[day] + ' ' + d + ' ' + months[month] + ' ' + year + ' / ' + h + ':' + m + ':' + s + ' ' + AP;
    document.getElementById(id).innerHTML = result;
    setTimeout('date_time("'+id+'");',1000);
    return true;
}
if (location.pathname.substring(location.pathname.lastIndexOf("/") + 1) != 'login.php' && location.pathname.substring(location.pathname.lastIndexOf("/") + 1) != 'forget-password.php') {
    window.onload = date_time('dateTime');
}
// Notification By Ajax
function showNotification() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("notification").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "notification.php", true);
    xhttp.send();
}
/*global $*/
$(function () {
    'use strict';
    //Define variables
    var viewAside = $(".viewAside"),
        mainAside = $(".mainAside"),
        windowVar = $(window),
        navbar = $(".navbar"),
        picsView = $(".pics-view"),
        errorImg = $(".error-path img");
    // resize boxes width on mobile mode
    if (windowVar.innerWidth() <= 768) {
        picsView.width((98 / 100) * windowVar.innerWidth());
    }
    windowVar.resize(function () {
        if (windowVar.innerWidth() <= 768) {
            picsView.width((98 / 100) * windowVar.innerWidth());
        }
    });
    // center boxes
    $.fn.centerBox = function () {
        $(this).css({
            'position': 'fixed',
            'top': (($(window).height() - $(this).outerHeight()) / 2) + $(window).scrollTop() + "px",
            'left': (($(window).width() - $(this).outerWidth()) / 2) + $(window).scrollLeft() + "px"
        });
    };
    picsView.centerBox();
    // function for center horizontal
    $.fn.centerBoxHorizontal = function () {
        var obj = $(this);
        obj.css({
            'position': 'absolute',
            'left': (windowVar.width() - obj.width()) / 2
        });
        windowVar.resize(function () {
            obj.css({
                'position': 'absolute',
                'left': (windowVar.width() - obj.width()) / 2
            });
        });
    };
    $(".navbar .navbar-text").centerBoxHorizontal();
    // function for full port height
    function setHeight() {
        var windowHeight = windowVar.innerHeight() - navbar.outerHeight(true);
        mainAside.css('min-height', windowHeight);
    }
    if (windowVar.innerWidth() > 768) {
        setHeight();
        windowVar.resize(function () {
            setHeight();
        });
        windowVar.scroll(function () {
            var windowHeightScroll = (windowVar.innerHeight() - navbar.outerHeight(true)) + windowVar.scrollTop();
            mainAside.css('min-height', windowHeightScroll);
        });
    } else {
        var mobileHeight = ($(".mainAside .nav > li").length * 42) + 20;
        mainAside.css('min-height', mobileHeight + 'px');
    }
    // Display Main Aside on mobile view
    if (windowVar.innerWidth() <= 768) {
        $(".asideBack, .mainAside ul li a[data-toggle='tab']").on('click', function () {
            mainAside.hide();
            viewAside.show();
        });
        viewAside.on('click', function () {
            $(this).hide();
            mainAside.show();
        });
    }
    // to colorize rows select Box
    function colorizeSelect($target) {
        $(document).on('change', $target, function () {
            if ($(this).val() === "completed") {
                $(this).parent().parent().parent().addClass("success").removeClass("danger warning");
                $(this).parent().siblings(".SumoSelect").css("display", "none");
            } else if ($(this).val() === "pending") {
                $(this).parent().parent().parent().addClass("danger").removeClass("success warning");
                $(this).parent().siblings(".SumoSelect").css("display", "none");
            } else if ($(this).val() === "inprogress") {
                $(this).parent().parent().parent().addClass("warning").removeClass("danger success");
                $(this).parent().siblings(".SumoSelect").css("display", "inline-block");
            }
        });
    }
    colorizeSelect(".dailyTasksStatus");
    colorizeSelect(".tableStatus");
    // Fire jquery.sumoselect plugin
    $('select:not(.normalSelect)').SumoSelect();
    // Function colorize rows
    function colorize($target) {
        $($target).each(function () {
            if ($(this).html() === "Completed") {
                $(this).parent().addClass("success");
            } else if ($(this).html() === "Pending") {
                $(this).parent().addClass("danger");
            } else if ($(this).html() === "Postponed") {
                $(this).parent().addClass("info");
            } else if ($(this).html() === "Cancelled") {
                $(this).parent().addClass("active");
            } else if ($(this).html() === "In progress") {
                $(this).parent().addClass("warning");
            }
        });
    }
    // event colorize
    colorize(".events .table tr td:nth-of-type(3)");
    //open Boxes
    function openBox($openButton, $box, $closeButton) {
        $($openButton).on('click', function () {
            $($box).css("display", "block");
            $($closeButton).on('click', function () {
                $($box).css("display", "none");
            });
        });
    }
    openBox(".viewEventPhotos", ".pics-view", '.pics-view > span');
    // function to add
    function addRow($startButton, $divToAppend, $content) {
        $($startButton).on('click', function () {
            $($divToAppend).append($content);
        });
    }
    // add new row on objective box
    addRow(".add-objectives .add-item-button", ".add-objectives .form-horizontal .toAppend", '<div class="form-group"><label for="+1" class="col-xs-1 control-label">+1</label><div class="col-sm-11 col-sm-push-0 col-xs-10 col-xs-push-1"><textarea class="form-control" id="+1" placeholder="type your objective..." rows="2"></textarea></div></div>');
    // add new row in table on preparations box
    addRow(".add-class-preparations .add-item-button", ".add-class-preparations .table", '<tr> <td> <div class="form-group"> <input type="text" class="form-control" placeholder="type item" /> </div> </td> <td> <div class="form-group"> <select class="form-control"> <option disabled selected>Choose Rate</option> <option value="10%">10%</option> <option value="20%">20%</option> <option value="30%">30%</option> <option value="40%">40%</option> <option value="50%">50%</option> <option value="60%">60%</option> <option value="70%">70%</option> <option value="80%">80%</option> <option value="90%">90%</option> <option value="100%">100%</option> </select> </div> </td> </tr>');
    // add new row in table on preparations box
    addRow(".add-reception-logistics .container-for-btn-group button", ".add-reception-logistics .table", '<tr><td><input type="text" class="form-control"></td><td><input type="number" class="form-control"></td><td><input type="number" class="form-control"></td></tr>');
    // add new row in table at add-event
    addRow(".add-event .container-for-btn-group button", ".add-event .table", '<tr><td><input type="text" class="form-control" placeholder="type objective..."/></td><td><input type="text" class="form-control" placeholder="type activities..."/></td><td><input type="text" class="form-control" placeholder="Ex: 500LE"></td></tr>');
    // calculate width for preparations-checks
    if (windowVar.innerWidth() > 768) {
        $(".classes .preparations form").each(function () {
            var count = $(this).children().length,
                width = 100 / count;
            if (windowVar.innerWidth() <= 768) {
                $(this).children().css('width', '50%');
            } else if (windowVar.innerWidth() <= 992) {
                $(this).children().css('width', '25%');
            } else {
                $(this).children().css('width', width + '%');
            }
        });
    }
    // function for carousels
    function forCarousels($target, $carousel) {
        $($target).each(function () {
            var number = ($($carousel).height() - $(this).height()) / 2;
            $(this).css("margin-top", number);
        });
    }
    // center photos in carousel in view activities
    forCarousels(".view-activity .carousel .item", ".view-activity .carousel");
    // center photos in carousel in view event
    $(".viewEventPhotos").on('click', function () {
        forCarousels(".pics-view .carousel .item", ".pics-view .carousel");
    });
    // upload profile photo
    $('#image_uploads').change(function (e) {
        var img = URL.createObjectURL(e.target.files[0]);
        $('.profile .profile-img img').attr('src', img);
    });
    // center 404 error photo
    errorImg.css("marginTop", (($(window).height() - $("nav").outerHeight()) - errorImg.height()) / 2);
});