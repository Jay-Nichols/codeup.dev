'use strict';

var student = {
    awesomeGrade: 80,
    name: null,
    subjects: [],
    calculateAverage: function () {
        var average = 0;
        this.subjects.forEach(function (subject) {
            average += subject.grade;
        });
        return average / this.subjects.length;
    },
    addSubject: function (name, grade) {
        var subject = {
            name: name,
            grade: grade
        };
        this.subjects.push(subject);
    },
    isAwesome: function () {
        return this.calculateAverage() > this.awesomeGrade;
    }
}   


    var studentName = document.getElementById('student-name');
    var nameField = document.getElementById('name');
    var removeDisabled = document.getElementById('add-grade');
    var addAndAverageButton = document.getElementById('calculate-average');

    



    var saveFunction = function () {
        //console.log("function");
        //console.log(studentName.value);

        removeDisabled.removeAttribute("disabled");
        studentName.innerHTML = nameField.value;
        console.log(nameField.value);

    }

    
    //var studentName = document.getElementById('student-name');

    
    



    //document.getElementById('add-grade').addEventListener('click', listener, false);
    //var calcButton = document.getElementById('calculate-average').addEventListener('click', listener, false);
    document.getElementById('save-name').addEventListener('click', saveFunction, false);
   
    


    //if (document.addElementById('name') !== '') {
        //removeDisabled.removeAttribute("disabled");
//};







    








//var calcRemover = function(event) {

//}