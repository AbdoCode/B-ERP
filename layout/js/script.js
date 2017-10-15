$(function () {
    'use strict';
    // to show forget password
    function showforget() {
        $(".forget-password").show();
        localStorage.setItem('show', 'true');
    }
    $(".login .forget-button").on('click', function () {
        showforget();
    });
    if(localStorage.getItem('show')){
        $('.forget-password').show();
    }
    $(".forget-password .glyphicon-remove, .forget-password form .form-group .forgetSubmit").on('click', function () {
        $(".forget-password").hide();
        localStorage.removeItem('show');
    });
    // resize boxes width on mobile mode
    if ($(window).innerWidth() <= 768) {
        $(".add-activities, .add-objectives, .forget-password, .add-issue-administration, .add-issue-kid, .add-class-preparations").width((98 / 100) * $(window).innerWidth());
    }
    $(window).resize(function () {
        if ($(window).innerWidth() <= 768) {
            $(".add-activities, .add-objectives, .forget-password, .add-issue-administration, .add-issue-kid, .add-class-preparations").width((98 / 100) * $(window).innerWidth());
        }
    });
    // center boxes
    $.fn.centerBox = function () {
        $(this).css({
            'position': 'fixed',
            'left': ($(window).innerWidth() - $(this).width()) / 2,
            'top': ($(window).innerHeight() - $(this).height()) / 2
        });
    };
    $(".add-activities").centerBox();
    $(".add-objectives").centerBox();
    $(".add-issue-administration").centerBox();
    $(".add-issue-kid").centerBox();
    $(".forget-password").centerBox();
    $(".add-class-preparations").centerBox();
    // function for center horizontal
    $.fn.centerBoxHorizontal = function () {
        var obj = $(this);
        obj.css({
            'position': 'absolute',
            'left': ($(window).width() - obj.width()) / 2
        });
        $(window).resize(function () {
            obj.css({
                'position': 'absolute',
                'left': ($(window).width() - obj.width()) / 2
            });
        });
    };
    $(".navbar .navbar-text").centerBoxHorizontal();
    // function for full port height
    function setHeight() {
        var windowHeight = $(window).innerHeight() - $(".navbar").outerHeight(true);
        $(".mainAside").css('min-height', windowHeight);
    };
    setHeight();
    $(window).resize(function() {
        setHeight();
    });
    // Display Main Aside on mobile view
    if($(window).innerWidth() <= 768){
        $(".viewAside").on('click', function () {
            $(this).toggle();
            $(".mainAside").toggle();
        });
        $(".mainAside ul li a[data-toggle='tab']").on('click', function () {
            $(".mainAside").toggle();
            $(".viewAside").toggle();
        });
    }
    $(window).resize(function () {
        if($(window).innerWidth() <= 768){
            $(".viewAside").on('click', function () {
                $(this).toggle();
                $(".mainAside").toggle();
            });
            $(".mainAside ul li a[data-toggle='tab']").on('click', function () {
                $(".mainAside").toggle();
                $(".viewAside").toggle();
            });
            if($(".mainAside").css('display') == 'block' && $(".viewAside").css('display') == 'none'){
                $(".mainAside").css('display', 'none');
                $(".viewAside").css('display', 'block');
            }
        } else {
            if($(".mainAside").css('display') == 'none' && $(".viewAside").css('display') == 'block'){
                $(".mainAside").css('display', 'block');
                $(".viewAside").css('display', 'none');
            }
        }
    });
    // to colorize rows
    $(document).on('change', ".dailyTasksStatus", function(e) {
        if($(this).val() == "completed"){
            $(this).parent().parent().parent().addClass("success").removeClass("danger warning");
            $(this).parent().siblings(".SumoSelect").css("display", "none");
        } else if($(this).val() == "pending"){
            $(this).parent().parent().parent().addClass("danger").removeClass("success warning");
            $(this).parent().siblings(".SumoSelect").css("display", "none");
        } else if($(this).val() == "inprogress"){
            $(this).parent().parent().parent().addClass("warning").removeClass("danger success");
            $(this).parent().siblings(".SumoSelect").css("display", "inline-block");
        }
    });
    // Fire jquery.sumoselect plugin
    $('select').SumoSelect();
    // colorize rows events
    $(".events .table tr td:nth-of-type(3)").each(function () {
        if($(this).html() == "Completed"){
            $(this).parent().addClass("success");
        } else if($(this).html() == "Pending"){
            $(this).parent().addClass("danger");
        } else if($(this).html() == "Postponed"){
            $(this).parent().addClass("warning");
        }
    });
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
    // add new row in table on preparations box
    $(".add-class-preparations .add-item-button").on('click', function () {
        $(".add-class-preparations .table").append('<tr> <td> <div class="form-group"> <input type="text" class="form-control" placeholder="type item" /> </div> </td> <td> <div class="form-group"> <select class="form-control"> <option disabled selected>Choose Rate</option> <option value="10%">10%</option> <option value="20%">20%</option> <option value="30%">30%</option> <option value="40%">40%</option> <option value="50%">50%</option> <option value="60%">60%</option> <option value="70%">70%</option> <option value="80%">80%</option> <option value="90%">90%</option> <option value="100%">100%</option> </select> </div> </td> </tr>');
    });
    // add new row in table on preparations box
    $(".add-reception-logistics .container-for-btn-group button").on('click', function () {
        $(".add-reception-logistics .table").append('<tr><td><input type="text" class="form-control"></td><td><input type="number" class="form-control"></td><td><input type="number" class="form-control"></td></tr>');
    });
    // calculate width for preparations-checks
    $(".classes .preparations form").each(function () {
        var count = $(this).children().length,
            width = 100 / count;
        if($(window).innerWidth() <= 768) {
            $(this).children().css('width', '50%');
        } else if($(window).innerWidth() <= 992) {
            $(this).children().css('width', '25%');
        } else {
            $(this).children().css('width', width+'%');
        }
    });
    // center photos in carousel in view activities
    $(".view-activity .carousel .item").each(function () {
        var number = ($(".view-activity .carousel").height() - $(this).height()) / 2;
        $(this).css("margin-top", number);
    });
    $(".performance-sheet-print button").on('click',function () {
        $('.performance-sheet').printMe({
            "path": ["style.css"]
        });
    });
});




















