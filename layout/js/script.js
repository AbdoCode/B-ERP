/*global $*/
$(function () {
    'use strict';
    //Define variables
    var forgetPasswordBox = $(".forget-password"),
        viewAside = $(".viewAside"),
        mainAside = $(".mainAside"),
        windowVar = $(window),
        navbar = $(".navbar");
    // to show forget password
    function showforget() {
        forgetPasswordBox.show();
        localStorage.setItem('show', 'true');
    }
    $(".login .forget-button").on('click', function () {
        showforget();
    });
    if (localStorage.getItem('show')) {
        forgetPasswordBox.show();
    }
    $(".forget-password .glyphicon-remove, .forget-password form .form-group .forgetSubmit").on('click', function () {
        forgetPasswordBox.hide();
        localStorage.removeItem('show');
    });
    // resize boxes width on mobile mode
    if (windowVar.innerWidth() <= 768) {
        $(".add-activities, .add-objectives, .forget-password, .add-issue-administration, .add-issue-kid, .add-class-preparations").width((98 / 100) * windowVar.innerWidth());
    }
    windowVar.resize(function () {
        if (windowVar.innerWidth() <= 768) {
            $(".add-activities, .add-objectives, .forget-password, .add-issue-administration, .add-issue-kid, .add-class-preparations").width((98 / 100) * windowVar.innerWidth());
        }
    });
    // center boxes
    $.fn.centerBox = function () {
        $(this).css({
            'position': 'fixed',
            'left': (windowVar.innerWidth() - $(this).width()) / 2,
            'top': (windowVar.innerHeight() - $(this).height()) / 2
        });
    };
    $(".add-activities").centerBox();
    $(".add-objectives").centerBox();
    $(".add-issue-administration").centerBox();
    $(".add-issue-kid").centerBox();
    forgetPasswordBox.centerBox();
    $(".add-class-preparations").centerBox();
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
    setHeight();
    windowVar.resize(function () {
        setHeight();
    });
    if (windowVar.innerWidth() > 768) {
        windowVar.scroll(function () {
            var windowHeightScroll = (windowVar.innerHeight() - navbar.outerHeight(true)) + windowVar.scrollTop();
            mainAside.css('min-height', windowHeightScroll);
        });
    }
    // Display Main Aside on mobile view
    if (windowVar.innerWidth() <= 768) {
        viewAside.on('click', function () {
            $(this).toggle();
            mainAside.toggle();
        });
        $(".mainAside ul li a[data-toggle='tab']").on('click', function () {
            mainAside.toggle();
            viewAside.toggle();
        });
    }
    windowVar.resize(function () {
        if (windowVar.innerWidth() <= 768) {
            viewAside.on('click', function () {
                $(this).toggle();
                mainAside.toggle();
            });
            $(".mainAside ul li a[data-toggle='tab']").on('click', function () {
                mainAside.toggle();
                viewAside.toggle();
            });
            /*
            if (mainAside.css('display') === 'block' && viewAside.css('display') === 'none') {
                mainAside.css('display', 'none');
                viewAside.css('display', 'block');
            }*/
        } else {
            if (mainAside.css('display') === 'none' && viewAside.css('display') === 'block') {
                mainAside.css('display', 'block');
                viewAside.css('display', 'none');
            }
        }
    });
    // to colorize rows
    $(document).on('change', ".dailyTasksStatus", function (e) {
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
    openBox(".activities .container-for-btn-group button", ".add-activities", ".add-activities .panel .panel-heading .glyphicon-remove");
    openBox(".add-issue-administration-button", ".add-issue-administration", ".add-issue-administration .panel .panel-heading .glyphicon-remove");
    openBox(".add-issue-kid-button", ".add-issue-kid", ".add-issue-kid .panel .panel-heading .glyphicon-remove");
    openBox(".subject .add-objective-button", ".add-objectives", ".add-objectives .panel .panel-heading .glyphicon-remove");
    openBox(".add-preparations-button", ".add-class-preparations", ".add-class-preparations .panel .panel-heading .glyphicon-remove");
    // function to add
    function addRow($startButton, $divToAppend, $content) {
        $($startButton).on('click', function () {
            $($divToAppend).append($content);
        });
    }
    // add new row in table on preparations box
    addRow(".add-class-preparations .add-item-button", ".add-class-preparations .table", '<tr> <td> <div class="form-group"> <input type="text" class="form-control" placeholder="type item" /> </div> </td> <td> <div class="form-group"> <select class="form-control"> <option disabled selected>Choose Rate</option> <option value="10%">10%</option> <option value="20%">20%</option> <option value="30%">30%</option> <option value="40%">40%</option> <option value="50%">50%</option> <option value="60%">60%</option> <option value="70%">70%</option> <option value="80%">80%</option> <option value="90%">90%</option> <option value="100%">100%</option> </select> </div> </td> </tr>');
    // add new row in table on preparations box
    addRow(".add-reception-logistics .container-for-btn-group button", ".add-reception-logistics .table", '<tr><td><input type="text" class="form-control"></td><td><input type="number" class="form-control"></td><td><input type="number" class="form-control"></td></tr>');
    // calculate width for preparations-checks
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
    // center photos in carousel in view activities
    $(".view-activity .carousel .item").each(function () {
        var number = ($(".view-activity .carousel").height() - $(this).height()) / 2;
        $(this).css("margin-top", number);
    });
});