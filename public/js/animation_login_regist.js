// Часть кода которая отвечает за визуальные эффекты
$(".btn").mouseenter(function () {
    $(".btn").css({
        "background-color" : "#71D8EB",
        "border" : "2px solid #71D8EB"
    });
});

$(".btn").mouseleave(function () {
    $(".btn").css({
        "background-color" : "#42C0D7",
        "border" : "2px solid #42C0D7"
    });
});

$("#regist").mouseenter(function () {
    $("#regist").css({
        "border" : "4px solid #71D8EB"
    });
});

$("#regist").mouseleave(function () {
    $("#regist").css({
        "border" : "4px solid #42C0D7"
    });
});

$("#forget").mouseenter(function () {
    $("#forget").css("color", "#71D8EB");
});

$("#forget").mouseleave(function () {
    $("#forget").css("color", "#42C0D7");
});


$(".confirm").mouseenter(function () {
    $(".confirm").css({
        "background-color" : "#71D8EB",
        "border" : "4px solid #71D8EB"
    });
});

$(".confirm").mouseleave(function () {
    $(".confirm").css({
        "background-color" : "#42C0D7",
        "border" : "4px solid #42C0D7"
    });
});