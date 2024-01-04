function validateForm() {
    let mobile = document.getElementsByName('mobile')[0].value;
    let password = document.getElementsByName('password')[0].value;

    // Validate mobile number
    if (mobile.length !== 10 || isNaN(mobile)) {
        alert('Mobile number should be 10 digits.');
        return false;
    }

    // Validate password
    if (password.length < 6 || !/\W/.test(password)) {
        alert('Password should be at least 6 characters long and contain a special character.');
        return false;
    }

    return true; 
}