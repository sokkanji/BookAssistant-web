headerCompleted = () => {
    $("#header").html();
    $(document).on('mouseover', '.dropdown>li', function () {
        $('.m2').slideDown(200);
        $('.menubar').css('height', '200px').css('box-shadow', 'none');
    });
    $(document).on('mouseover', '.m2', function () {
        $('.m2').stop().slideDown(200);
    });
    $(document).on('mouseout', '.m2', '.dropdown>li', function () {
        $('.m2').stop().slideUp(170);
        $('.menubar').css('height', '110px').css('box-shadow', '0px 1.4px 0px 0px rgba(0, 0, 0, 0.08)');
    });
}

contentsCompleted = () => {
    $("#contents").html();
}

footerCompleted = () => {
    $("#footer").html();
}