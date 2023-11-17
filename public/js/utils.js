function signOut() {
    $.ajax({
        type: "POST",
        url: './ajax/ajax.php',
        data: {
            action: 'sign_out'
        },
        success: function(html) {
            alert(html);
        }
    });
}