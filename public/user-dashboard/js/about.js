$(document).ready(function() {
    $('#editIcon').on('click', function() {
        // Toggle visibility of display and input fields
        // $('#profileImageDisplay').toggle();
        $('#profileImageInput').toggle(); 

        $('#userNameDisplay').toggle();
        $('#userNameInput').toggle();
        
  
        $('#addressDisplay').toggle();
        $('#addressInput').toggle();
        
        $('#xInput').toggle();
        $('#facebookInput').toggle();
        $('#instagramInput').toggle();
        $('#githubInput').toggle();

        $('#userNameSideDisplay').toggle();
        $('#userNameSideInput').toggle();
       
        $('#profileDisplay').toggle();
        $('#profileInput').toggle();

        $('#emailDisplay').toggle();
        $('#emailInput').toggle();

        $('#phoneDisplay').toggle();
        $('#phoneInput').toggle();

        $('#aboutDisplay').toggle();
        $('#aboutInput').toggle();
        // Toggle the icon between 'edit' and 'cancel'
        if ($(this).hasClass('fa-pen-to-square')) {
            $(this).removeClass('fa-pen-to-square').addClass('fa-times'); // Switch to 'cancel' icon
            $('#updateButton').show(); // Show save button
        } else {
            $(this).removeClass('fa-times').addClass('fa-pen-to-square'); // Switch back to 'pen' icon
            $('#updateButton').hide(); // Hide save button
        }

        $('#updateButton').on('click', function(event) {
            event.preventDefault(); // Prevent the form from submitting normally
            const aboutId = $('#aboutId').val();
            let formData = new FormData($('#profileForm')[0]); // Create FormData from the form

            $.ajax({
                url: '/about/' + aboutId, // Correct usage of route()
                method: 'POST', 
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), // Include CSRF token
                    'X-HTTP-Method-Override': 'PUT' // Laravel can interpret this as a PUT request
                },
                data: formData,
                contentType: false, // Important for FormData
                processData: false, // Important for FormData
                success: function(response) {
                    console.log(response); // Log the response
                    $('#profileDisplay').text(response.about.profile);
                    $('#profileDisplay').toggle();
                    $('#profileInput').toggle();
                    $('#editIcon').toggleClass('fa-times fa-pen-to-square');
                    toastr.options = {
                        "progressBar": true
                    };
                    toastr.success('About has been updated successfully.');



                },
                error: function(xhr) {
                    console.error('Error updating profile:', xhr); // Log any errors
                }
            });
        });
    });
});
