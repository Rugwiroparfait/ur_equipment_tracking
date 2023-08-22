$(document).ready(function () {
    $("#trackingForm").submit(function (event) {
      event.preventDefault();
      
      var registrationNumber = $("#registrationNumber").val();
      var serialNumber = $("#serialNumber").val();
  
      // You can perform further validation here
  
      // Send the data to the server
      $.ajax({
        type: "POST",
        url: "track.php",
        data: {
          registrationNumber: registrationNumber,
          serialNumber: serialNumber,
        },
        success: function (response) {
          $("#resultMessage").html(response);
        },
      });
    });
  });
  