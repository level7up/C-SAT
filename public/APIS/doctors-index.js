var config = {
  apiKey: "AIzaSyB3n9RSuF0FWCOoEtPeRvoh0l6idayhf2E",
  authDomain: "c-sat-17577.firebaseapp.com",
  databaseURL: "https://c-sat-17577.firebaseio.com",
  projectId: "c-sat-17577",
  storageBucket: "c-sat-17577.appspot.com",
  messagingSenderId: "918338881553"
};
firebase.initializeApp(config);

var database = firebase.database();
var lastIndex = 0;
// Get Data
firebase
  .database()
  .ref("com/phds/")
  .on("value", function(snapshot) {
    var value = snapshot.val();
    var htmls = [];

    $.each(value, function(index, value) {
      if (value) {
        htmls.push(
          "<tr>\
                <td>" +
            value.id +
            '</td>\
                <td><img width="75px" height="75px" class=" rounded-circle"src="' +
            value.image +
            '"> </td>\
                <td><a href="/dr/' +
            value.id +
            '" >' +
            value.fullname +
            "</a></td>\
                <td>" +
            value.Title +
            "</td>\
                <td>" +
            value.Email +
            '</td>\
                <td><a data-toggle="modal" data-target="#update-modal" class="btn btn-success btn-sm updateData" data-id="' +
            index +
            '">Update</a>\
                <a data-toggle="modal" data-target="#remove-modal" class="btn btn-danger btn-sm removeData" data-id="' +
            index +
            '">Delete</a></td>\
            </tr>'
        );
      }
      lastIndex = index;
    });
    $("#tbody").html(htmls);
    $("#submitUser").removeClass("desabled");
  });

// Add Data
$("#submitUser").on("click", function() {
  var values = $("#addUser").serializeArray();
  var fullname = values[0].value;
  var Email = values[1].value;
  var Department = values[2].value;
  var Title = values[3].value;
  var image = values[4].value;
  var userID = lastIndex + 1;

  firebase
    .database()
    .ref("com/phds/" + userID)
    .set({
      fullname: fullname,
      Email: Email,
      Department: Department,
      Rate: 0,
      Title: Title,
      image: image,
      id: userID
    });

  // Sectionedphds For Search
  firebase
    .database()
    .ref("com/sectionedphds/" + userID + "/" + userID)
    .set({
      fullname: fullname,
      Rate: Rate,
      image: image,
      id: userID
    });

  // Reassign lastID value
  lastIndex = userID;
  $("#addUser input").val("");
});

// Update Data
var updateID = 0;
$("body").on("click", ".updateData", function() {
  updateID = $(this).attr("data-id");
  firebase
    .database()
    .ref("com/phds/" + updateID)
    .on("value", function(snapshot) {
      var values = snapshot.val();
      var updateData =
        '<div class="form-group">\
            <label class="text-info">Name</label>\
		        <div class="col-md-12">\
		            <input id="fullname" type="text" class="form-control" name="fullname" value="' +
        values.fullname +
        '" required autofocus>\
		        </div>\
		    </div>\
            <div class="form-group">\
                    <label class="text-info">Email</label>\
		        <div class="col-md-12">\
		            <input id="Email" type="Email" class="form-control" name="Email" value="' +
        values.Email +
        '" required autofocus>\
		        </div>\
            </div>\
            <div class="form-group">\
                <label class="text-info">Department</label>\
		        <div class="col-md-12">\
		            <input id="Department" type="text" class="form-control" name="Department" value="' +
        values.Department +
        '" required autofocus>\
		        </div>\
            </div>\
            <label class="text-info">Title</label>\
            <div class="form-check form-check-radio">\
                <label class="form-check-label">\
                    <input class="form-check-input" type="radio" name="Title" value="Doctor" required autofocus>\
                    <span class="form-check-sign"></span>Doctor</label>\
            </div>\
            \
            <div class="form-check form-check-radio">\
                <label class="form-check-label">\
                    <input class="form-check-input" type="radio" name="Title"  value="Teacher Assestant">\
                    <span class="form-check-sign"></span>Teacher Assistant</label>\
            </div>\
            \
            <div class="form-group">\
                <label class="text-info">Image URL</label>\
		        <div class="col-md-12">\
		            <input id="image" type="text" class="form-control" name="image" value="' +
        values.image +
        '" required autofocus>\
		        </div>\
		    </div><div class="form-group">\
		        <label for="id" class="col-md-12 col-form-label">ID</label>\
		        <div class="col-md-12">\
		            <input id="id" type="text" class="form-control" name="id" value="' +
        values.id +
        '" required autofocus>\
		        </div>\
		    </div>';

      $("#updateBody").html(updateData);
    });
});

$(".updateUserRecord").on("click", function() {
  var values = $(".users-update-record-model").serializeArray();
  var postData = {
    fullname: values[0].value,
    Email: values[1].value,
    Department: values[2].value,
    Title: values[3].value,
    image: values[4].value,
    id: values[5].value
  };

  var updates = {};
  updates["/com/phds/" + updateID] = postData;

  firebase
    .database()
    .ref()
    .update(updates);

  $("#update-modal").modal("hide");
});

// Remove Data
$("body").on("click", ".removeData", function() {
  var id = $(this).attr("data-id");
  $("body")
    .find(".users-remove-record-model")
    .append('<input name="id" type="hidden" value="' + id + '">');
});

$(".deleteMatchRecord").on("click", function() {
  var values = $(".users-remove-record-model").serializeArray();
  var id = values[0].value;
  firebase
    .database()
    .ref("com/phds/" + id)
    .remove();
  firebase
    .database()
    .ref("com/sectionedphds/" + id)
    .remove();
  firebase
    .database()
    .ref("Reviews/" + id)
    .remove();
  $("body")
    .find(".users-remove-record-model")
    .find("input")
    .remove();
  $("#remove-modal").modal("hide");
});
$(".remove-data-from-delete-form").click(function() {
  $("body")
    .find(".users-remove-record-model")
    .find("input")
    .remove();
});
