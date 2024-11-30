$(document).ready(function() {
    //Load students when the page is ready
    loadStudents();

    //Handle from sunbmission using Ajax
    $("#add-student-from").submit(function(event) {
        event.preventDefault();

        //Get from data
        var fromData = {
            name: $("#name").val(),
            age: ("#age").val()
        };

        //Send Ajax request to add student 
        $.ajax({
            type: "POST",
            url: "add_student.php",
            data: fromData,
            dataType: "json",
            success: function(response) {
                //Reload the students list after adding a new student
                loadStudents();
            },
            error: function(error) {
                console.log(error);
            }
        });
    });

    //Function to load students using Ajax 
    function loadStudents() {
        $.ajax({
            type: "GET",
            url: "get_students.php",
            dataType: "json",
            success: function(students) {
                //Clear the previous list
                $("#student-list").empty();

                //Append each student to the list
                $.each(student, function(index, student) {
                    $("#student-list").append("<li>" + student.name + " - Age: " + student.age + "</li>");
                });
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
});