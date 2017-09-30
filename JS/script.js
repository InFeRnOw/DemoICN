$(document).ready(function() {

    $(".htmlCont").hide();

var htmlCount = 0;

    $(".lHtml").click(function() {
        if (htmlCount == 0) {
            $(".htmlCont").fadeIn(1000);
            htmlCount += 1;
        }
        else {
            $(".htmlCont").fadeOut(1000);
            htmlCount -= 1;
        }
    });

    $(".sousClassAvec1").click(function() {
        $(".htmlCont imgAvec").fadeIn(1000);
        $(".htmlCont imgSans").fadeOut(1000);
    });











});
