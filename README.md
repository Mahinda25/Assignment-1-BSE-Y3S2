**# Assignment-1-BSE-Y3S2
calculator**
The calculator performs basic arithmetic operations (addition, subtraction, multiplication, division) as well as percentage calculation, square root, exponential, and logarithm calculations.percentage calculations, square roots, and logarithms. It offers a rudimentary web interface that allows users to enter data and choose operations.

**Implementation Approach: **

**HTML Structure:**
A basic HTML form is generated, complete with digit and operation buttons, as well as a display space for input and results.
The form's method is set to "post" to transmit the data to the server for processing.

**PHP Processing:**
PHP code handles the form submission.
It extracts the input numbers and the chosen action from the form data.
Cookies are used to store intermediate numbers as well as the specified action.
The PHP script calculates and shows the result based on the operation specified.

**Testing**
To test, set up a local PHP server.
Make sure you have PHP installed on your PC. You can use XAMPP, MAMP, or any other PHP-enabled local server.
Place the code above in a file called calculator.php in your server's document root (htdocs).

**Access the calculator:**
Open your browser and go to http://localhost/Assignment-1-BSE-Y3S2/calc.PHP

**Perform calculations:**
Enter values using the number buttons.
Select an operation by clicking on the relevant button.
To see the results, click the "=" button.

**Result verification:**
The output of the computation should be presented in the input area.
Verify the accuracy of the outcome for various operations.
Addition: Make sure the total of the two numbers is represented appropriately.
Subtraction: Make sure the difference between the two numbers is shown accurately.
Multiplication: Make sure the product of the two numbers is represented appropriately.
Division: Make sure the quotient of the two integers is represented accurately. Ensure that division by zero results in an error.
Check whether the percentage computation is right.
Square Root: Determine whether the square root of the integer is valid.
Logarithm: Determine whether the logarithm of the first number to the base of the second number is right. Check that incorrect bases (=0 or 1) result in an error.
Exponential: Make sure the exponential computation is correct.

**Edge cases:**
Test the calculator's handling of edge circumstances such as negative numbers, zeros, and very big numbers.

**Conclusion**
This article describes the implementation strategy for a multifunctional calculator in PHP, as well as how to verify its functioning. Following these steps should allow you to properly develop and test the calculator, ensuring that all essential operations are performed appropriately.

