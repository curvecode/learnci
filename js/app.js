function setEventSubmit() {
    $("#saveTask").bind("click", function() {
        var $data = {
            todoName : $("#inputTask").val(),
            userName : $("#inputUserName").val()
        };
        submitAjax($data);
    });
}

function setEventElementDataList() {
    $("#listTask").on("click", "li", function() {
        var $data = $(this).text();
        // removeTodoData($data) === true ? $(this).remove() : console.log("Loi") ;
        removeTodoData($data);
        $(this).remove();
    });
}

function submitAjax($data) {
    $.ajax({
        method: "POST",
        url: "todos/insertTodo",
        data : $data,
        success: function(data) {
            console.log('success');
        },
        error: function(err) {
            alert("Loi roi " + err);
            console.log(err);
        }
    }).done(function(msg) {
        appendToListData($data);
    });
}

/**
 * @param {}
 * @func loadTodoListAjax
 */
function loadTodoListAjax() {
    $.ajax({
        url: "todos/getTodo",
        dataType: "json",
        success: function(data) {
            $("#loading").hide();
            data.forEach(function(item, index) {
                appendToListData(item);
            });
        },
        error: function(err) {
            console.log(err);
        }
    });
}

function removeTodoData($data) {
    $.ajax({
        url: "todos/removeTodo",
        method: "POST",
        data: { todoName : $data },
        success: function(data) {
            console.log("success");
        },
        error: function(err) {
            console.log("error");
        }
    }).done(function(){
        console.log("done");
    });
}

/**
 * Them du lieu vao data list tren DOM
 * @param {$data}  
 */
function appendToListData($data) {
    $("#listTask").append("<li>"+ $data.todoName +"</li>");
}

$(document).ready(function() {
    setEventSubmit();
    loadTodoListAjax();
    setEventElementDataList();
});