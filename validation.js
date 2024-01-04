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

    const dobInput = document.getElementById('dob').value;
    const today = new Date();
    const selectedDate = new Date(dobInput);
    const eighteenYearsAgo = new Date(today.getFullYear() - 18, today.getMonth(), today.getDate());
    
    if (selectedDate > eighteenYearsAgo) {
        alert('Please select a date at least 18 years ago for Date of Birth.');
        return false;
    }
    return true; 
}