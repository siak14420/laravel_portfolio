$(document).ready(function() {
    $('#editIcon').on('click', function() {
        // Toggle visibility of display and input fields
        // $('#profileImageDisplay').toggle();
        $('#profileImageInput').toggle(); 

        $('#userNameDisplay').toggle();
        $('#userNameInput').toggle();
        
        $('#profileDisplay').toggle();
        $('#profileInput').toggle();
        
        $('#addressDisplay').toggle();
        $('#addressInput').toggle();
        
        $('#xInput').toggle();
        $('#facebookInput').toggle();
        $('#instagramInput').toggle();
        $('#githubInput').toggle();

        $('#userNameSideDisplay').toggle();
        $('#userNameSideInput').toggle();
       
        $('#profileSideDisplay').toggle();
        $('#profileSideInput').toggle();

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

        $('#updateButton').on('click', function() {
            // event.preventDefault(); // Prevent the form from submitting normally
            console.log('cejcekce');
            // // Get the new values from input fields
            // const newName = $('#userNameInput').val();
            // const newProfile = $('#profileInput').val();
            // const newAddress = $('#addressInput').val();
            // const profileImage = $('#profileImageInput')[0].files[0]; // Get the selected image file
            // const newX = $('#xInput').val();
            // const newFacebook = $('#facebookInput').val();
            // const newInstagram = $('#instagramInput').val();
            // const newGithub = $('#githubInput').val();
            // const newUserNameSide = $('#userNameSideInput').val();
            // const newProfileSide = $('#profileSideInput').val();
            // const newEmail = $('#emailInput').val();
            // const newPhone = $('#phoneInput').val();
            // const newAbout = $('#aboutInput').val();

    
            // // Create FormData to handle file uploads
            // let formData = new FormData();
            // formData.append('name', newName);
            // formData.append('profile', newProfile);
            // formData.append('address', newAddress);
            // formData.append('image', profileImage); 
            // formData.append('xId', newX); 
            // formData.append('facebookId', newFacebook); 
            // formData.append('instagramId', newInstagram); 
            // formData.append('githubId', newGithub); 
            // formData.append('name', newUserNameSide); 
            // formData.append('profile', newProfileSide); 
            // formData.append('email', newEmail); 
            // formData.append('phone', newPhone); 
            // formData.append('about', newAbout); 
            let formData = new FormData($('#profileForm')[0]);
            const aboutId = `{{ $about->id }}`;
            console.log(aboutId); // Assuming you're passing the ID to the Blade view
    return false;
            // Reset the Edit button text and visibility
            // $('#editIcon').show();
            // $(this).hide(); // Hide the save button
    
            // Optional: Here you can make an AJAX request to save the new data
            $.ajax({
                url: `/about/${aboutId}`, // Correct usage of route()
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                   console.log( response);
                }
            })
        });
    });
});
