$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})
$(".destroy").click(function () {
    event.preventDefault()
    $.ajax({
        url: $(this).attr("href"),
        method: "DELETE",
        success: (data) => {
            location.reload()
        }
    })
})
$(".logout").click(function(){
    event.preventDefault()
    $.ajax({
        url: "/logout",
        method: "POST",
        success: (data) => {
            location.reload()
        }
    })
})
$(".link-modal").click(function () {
    event.preventDefault()
    let lastClasses = $(this).children().attr("class");
    $(this).children().removeClass(lastClasses)
    $(this).children().removeClass("fa-exclamation-circle")
    $(this).children().addClass("fas fa-spinner fa-spin")
    $.ajax({
        url: $(this).attr("href"),
        success: (data) => {
            $("#modal-info").modal("toggle")
            $("#modal-info .info").html(data)
            $(this).children().addClass(lastClasses)
            $(this).children().removeClass("fa-spinner fa-spin")
            $("table").dataTable()
        }
    }).error((data) => {
        $(this).children().addClass("fas fa-exclamation-circle")
        $(this).children().removeClass("fa-spinner fa-spin")
    })
})
$(window).resize(function(){
    containerSize()
})
containerSize()
function containerSize() {
    $("#app>.container-fluid").css("min-height", windowSize() - 52);
}
function windowSize() {
    return $(window).innerHeight();
}
