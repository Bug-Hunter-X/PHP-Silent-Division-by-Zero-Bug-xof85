# PHP Silent Division by Zero

This repository demonstrates a common, yet subtle, bug in PHP related to division by zero.  Due to PHP's loose typing, a division by zero may not immediately result in an error, potentially leading to unexpected behavior and difficult-to-debug issues. The `bug.php` file shows the problem, while `bugSolution.php` offers a solution.

**Problem:**  PHP's weak typing system allows a silent failure when dividing by zero, outputting unexpected results instead of throwing an error. This can be particularly harmful in situations where the division result is used in further calculations or affects application logic.

**Solution:**  Explicitly check for a zero divisor before performing division using strict comparison and throw a custom exception or handle the case in an appropriate way for your application.