$(document).ready(function() {

    $(".htmlCont, .cssCont").hide();

var Count = 0;

    $(".lHtml").click(function() {
        if (Count == 0) {
            $(".htmlCont").fadeIn(1000);
            Count += 1;
            $(".htmlCont img").hide();
        }
        else {
            $(".htmlCont").fadeOut(1000);
            Count -= 1;
            $(".htmlCont img").fadeOut(1000);
        }
    });

    $(".lCss").click(function() {
        if (Count == 0) {
            $(".cssCont").fadeIn(1000);
            Count += 1;
            $(".cssCont img").hide();
        }
        else {
            $(".cssCont").fadeOut(1000);
            Count -= 1;
            $(".cssCont img").fadeOut(1000);
        }
    });

    $(".sousClassAvec1").click(function() {
        $(".htmlCont .imgAvec").fadeIn(1000);
        $(".htmlCont .imgSans").hide();
    });

    $(".sousClassSans1").click(function() {
        $(".htmlCont .imgSans").fadeIn(1000);
        $(".htmlCont .imgAvec").hide();
    });

    $(".sousClassAvec2").click(function() {
        $(".cssCont .imgAvec").fadeIn(1000);
        $(".cssCont .imgSans").hide();
    });

    $(".sousClassSans2").click(function() {
        $(".cssCont .imgSans").fadeIn(1000);
        $(".cssCont .imgAvec").hide();
    });











});
