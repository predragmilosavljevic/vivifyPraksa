
var testVar = 'globalVarInsideAppJS';

var helloWorld = function () {
    alert('Hello world');

    var testVar = 'localVarInsideAnonymusFunction';
};



var jsonObject ={"first_name":"John","last_name":" Johnson","company":"vivifyIdeas"};

var jsonArray = {"employees":[
    {"first_name":"John", "last_name":"Doe"},
    {"first_name":"Anna",	"last_name":"Smith"},
    {"first_name":"Peter", "last_name":"Jones"}
    ]
};


function Person(fname, lname, gender) {
    this.first_name = fname;
    this.last_name = lname;
    this.gender = gender;
};

Person.prototype.getInfo = function() {
    return 'First Name: '+ this.first_name + ' Last Name: ' + this.last_name + ' Gender: ' + this.gender;
};
Person.prototype.sayHello = function () {
    console.log("Hello, I'm " + this.first_name);
};

    var youngBoy = new Person('Peter', 'Pan', 'male');


function Girl(age) {
    Person.call(this);
    this.age = age;
};

Girl.prototype = Object.create(Person.prototype);

    var youngGirl = new Girl(8);


//Static property
Person.height = 150;

//Static function
Person.drink = function (drinkName) {
    console.log('I am drinking ' + drinkName);
};